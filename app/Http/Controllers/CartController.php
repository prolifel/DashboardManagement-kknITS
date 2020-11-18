<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Province;
use App\City;
use App\District;
use App\Customer;
use App\Order;
use App\OrderDetail;
use Illuminate\Support\Str;
use DB;

class CartController extends Controller
{
    public function addToCart(Request $request){
        $this->validate($request, [
            'product_id' => 'required|exists:products,id',
            'qty' => 'required|integer'
        ]);

        $carts = $this->getCarts();

        if ($carts && array_key_exists($request->product_id, $carts)) {
            $carts[$request->product_id]['qty'] += $request->qty;
        } else {
            $product = Product::find($request->product_id);
            $carts[$request->product_id] = [
                'qty' => $request->qty,
                'product_id' => $product->id,
                'product_name' => $product->name,
                'product_price' => $product->price,
                'product_image' => $product->image
            ];
        }

        $cookie = cookie('dw-carts', json_encode($carts), 2880);
        return redirect(route('marketplace.index'))->withSuccess("Produk berhasil ditambahkan ke keranjang")->withCookie($cookie);
    }

    public function listCart()
    {
        $carts = $this->getCarts();

        $subtotal = collect($carts)->sum(function($q) {
            return $q['qty'] * $q['product_price'];
        });

        return view('marketplace.cart', ['carts' => $carts], ['subtotal' => $subtotal]);
    }

    public function updateCart(Request $request){
        //AMBIL DATA DARI COOKIE
        $carts = $this->getCarts();
        //KEMUDIAN LOOPING DATA PRODUCT_ID, KARENA NAMENYA ARRAY PADA VIEW SEBELUMNYA
        //MAKA DATA YANG DITERIMA ADALAH ARRAY SEHINGGA BISA DI-LOOPING
        foreach ($request->product_id as $key => $row) {
            //DI CHECK, JIKA QTY DENGAN KEY YANG SAMA DENGAN PRODUCT_ID = 0
            if ($request->qty[$key] == 0) {
                //MAKA DATA TERSEBUT DIHAPUS DARI ARRAY
                unset($carts[$row]);
            } else {
                //SELAIN ITU MAKA AKAN DIPERBAHARUI
                $carts[$row]['qty'] = $request->qty[$key];
            }
        }
        //SET KEMBALI COOKIE-NYA SEPERTI SEBELUMNYA
        $cookie = cookie('dw-carts', json_encode($carts), 2880);
        //DAN STORE KE BROWSER.
        return redirect()->back()->cookie($cookie);
    }

    private function getCarts()
    {
        $carts = json_decode(request()->cookie('dw-carts'), true);
        $carts = $carts != '' ? $carts:[];
        return $carts;
    }

    public function checkout()
    {
        //QUERY UNTUK MENGAMBIL SEMUA DATA PROPINSI
        $provinces = Province::orderBy('created_at', 'DESC')->get();
        $carts = $this->getCarts(); //MENGAMBIL DATA CART
        //MENGHITUNG SUBTOTAL DARI KERANJANG BELANJA (CART)
        $subtotal = collect($carts)->sum(function($q) {
            return $q['qty'] * $q['product_price'];
        });
        //ME-LOAD VIEW CHECKOUT.BLADE.PHP DAN PASSING DATA PROVINCES, CARTS DAN SUBTOTAL
        return view('marketplace.checkout', compact('provinces', 'carts', 'subtotal'));
    }

    public function getCity()
    {
        //QUERY UNTUK MENGAMBIL DATA KOTA / KABUPATEN BERDASARKAN PROVINCE_ID
        $cities = City::where('province_id', request()->province_id)->get();
        //KEMBALIKAN DATANYA DALAM BENTUK JSON
        return response()->json(['status' => 'success', 'data' => $cities]);
    }

    public function getDistrict()
    {
        //QUERY UNTUK MENGAMBIL DATA KECAMATAN BERDASARKAN CITY_ID
        $districts = District::where('city_id', request()->city_id)->get();
        //KEMUDIAN KEMBALIKAN DATANYA DALAM BENTUK JSON
        return response()->json(['status' => 'success', 'data' => $districts]);
    }

    public function processCheckout(Request $request)
    {
        //VALIDASI DATANYA
        $this->validate($request, [
            'customer_name' => 'required|string|max:100',
            'customer_phone' => 'required',
            'email' => 'required|email',
            'customer_address' => 'required|string',
            'province_id' => 'required|exists:provinces,id',
            'city_id' => 'required|exists:cities,id',
            'district_id' => 'required|exists:districts,id'
        ]);

        //INISIASI DATABASE TRANSACTION
        //DATABASE TRANSACTION BERFUNGSI UNTUK MEMASTIKAN SEMUA PROSES SUKSES UNTUK KEMUDIAN DI COMMIT AGAR DATA BENAR BENAR DISIMPAN, JIKA TERJADI ERROR MAKA KITA ROLLBACK AGAR DATANYA SELARAS
        DB::beginTransaction();
        try {
            //CHECK DATA CUSTOMER BERDASARKAN EMAIL
            $customer = Customer::where('email', $request->email)->first();
            //JIKA DIA TIDAK LOGIN DAN DATA CUSTOMERNYA ADA
            if (!auth()->check() && $customer) {
                //MAKA REDIRECT DAN TAMPILKAN INSTRUKSI UNTUK LOGIN
                return redirect()->back()->with(['error' => 'Silahkan Login Terlebih Dahulu']);
            }

            //AMBIL DATA KERANJANG
            $carts = $this->getCarts();
            //HITUNG SUBTOTAL BELANJAAN
            $subtotal = collect($carts)->sum(function($q) {
                return $q['qty'] * $q['product_price'];
            });

            //SIMPAN DATA CUSTOMER BARU
            $customer = Customer::create([
                'name' => $request->customer_name,
                'email' => $request->email,
                'phone_number' => $request->customer_phone,
                'address' => $request->customer_address,
                'district_id' => $request->district_id,
                'status' => false
            ]);

            //SIMPAN DATA ORDER
            $order = Order::create([
                'invoice' => Str::random(4) . '-' . time(), //INVOICENYA KITA BUAT DARI STRING RANDOM DAN WAKTU
                'customer_id' => $customer->id,
                'customer_name' => $customer->name,
                'customer_phone' => $request->customer_phone,
                'customer_address' => $request->customer_address,
                'district_id' => $request->district_id,
                'subtotal' => $subtotal
            ]);

            //LOOPING DATA DI CARTS
            foreach ($carts as $row) {
                //AMBIL DATA PRODUK BERDASARKAN PRODUCT_ID
                $product = Product::find($row['product_id']);
                //SIMPAN DETAIL ORDER
                OrderDetail::create([
                    'order_id' => $order->id,
                    'product_id' => $row['product_id'],
                    'price' => $row['product_price'],
                    'qty' => $row['qty'],
                    'weight' => $product->weight
                ]);
            }

            //TIDAK TERJADI ERROR, MAKA COMMIT DATANYA UNTUK MENINFORMASIKAN BAHWA DATA SUDAH FIX UNTUK DISIMPAN
            DB::commit();

            $carts = [];
            //KOSONGKAN DATA KERANJANG DI COOKIE
            $cookie = cookie('dw-carts', json_encode($carts), 2880);
            //REDIRECT KE HALAMAN FINISH TRANSAKSI
            return redirect(route('front.finish_checkout', $order->invoice))->cookie($cookie);
        } catch (\Exception $e) {
            //JIKA TERJADI ERROR, MAKA ROLLBACK DATANYA
            DB::rollback();
            //DAN KEMBALI KE FORM TRANSAKSI SERTA MENAMPILKAN ERROR
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    public function checkoutFinish($invoice)
    {
        //AMBIL DATA PESANAN BERDASARKAN INVOICE
        $order = Order::with(['district.city'])->where('invoice', $invoice)->first();
        //LOAD VIEW checkout_finish.blade.php DAN PASSING DATA ORDER
        return view('ecommerce.checkout_finish', compact('order'));
    }
}
