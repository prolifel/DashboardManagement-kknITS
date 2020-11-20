@extends('layouts.app')

@section('content')
    @include('marketplace.header', [
        'title' => __('Checkout'),
        'description' => __('Silakan isi detail pengiriman anda'),
        'class' => 'col'
    ])

    <div class="container-fluid mt--7">
        <div class="card">
            <div class="card-body">
                <form class="row contact_form" action="{{ route('marketplace.store_checkout') }}" method="POST" novalidate="novalidate">
                    @csrf
                    <div class="col-md-12 form-group p_star">
                        <label for="">Nama Lengkap</label>
                        <input type="text" class="form-control" id="first" name="customer_name" required>

                        <!-- UNTUK MENAMPILKAN JIKA TERDAPAT ERROR VALIDASI -->
                        <p class="text-danger">{{ $errors->first('customer_name') }}</p>
                    </div>
                    <div class="col-md-6 form-group p_star">
                        <label for="">No Telp</label>
                        <input type="text" class="form-control" id="number" name="customer_phone" required>
                        <p class="text-danger">{{ $errors->first('customer_phone') }}</p>
                    </div>
                    <div class="col-md-6 form-group p_star">
                        <label for="">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                        <p class="text-danger">{{ $errors->first('email') }}</p>
                    </div>
                    <div class="col-md-12 form-group p_star">
                        <label for="">Alamat Lengkap</label>
                        <input type="text" class="form-control" id="add1" name="customer_address" required>
                        <p class="text-danger">{{ $errors->first('customer_address') }}</p>
                    </div>
                    <div class="col-md-12 form-group p_star">
                        <label for="">Propinsi</label>
                        <select class="form-control" name="province_id" id="province_id" required>
                            <option value="">Pilih Propinsi</option>
                            <!-- LOOPING DATA PROVINCE UNTUK DIPILIH OLEH CUSTOMER -->
                            @foreach ($provinces as $row)
                            <option value="{{ $row->id }}">{{ $row->name }}</option>
                            @endforeach
                        </select>
                        <p class="text-danger">{{ $errors->first('province_id') }}</p>
                    </div>

                    <!-- ADAPUN DATA KOTA DAN KECAMATAN AKAN DI RENDER SETELAH PROVINSI DIPILIH -->
                    <div class="col-md-12 form-group p_star">
                        <label for="">Kabupaten / Kota</label>
                        <select class="form-control" name="city_id" id="city_id" required>
                            <option value="">Pilih Kabupaten/Kota</option>
                        </select>
                        <p class="text-danger">{{ $errors->first('city_id') }}</p>
                    </div>
                    <div class="col-md-12 form-group p_star">
                        <label for="">Kecamatan</label>
                        <select class="form-control" name="district_id" id="district_id" required>
                            <option value="">Pilih Kecamatan</option>
                        </select>
                        <p class="text-danger">{{ $errors->first('district_id') }}</p>
                    </div>
                    <!-- ADAPUN DATA KOTA DAN KECAMATAN AKAN DI RENDER SETELAH PROVINSI DIPILIH -->

                    <div class="col-lg-4">
                        <div class="order_box">
                            <h2>Ringkasan Pesanan</h2>
                            <ul class="list">
                                <li>
                                    <a href="#">Product
                                        <span>Total</span>
                                    </a>
                                </li>
                            @foreach ($carts as $cart)
                                <li>
                                    <a href="#">{{ \Str::limit($cart['product_name'], 10) }}
                                    <span class="middle">x {{ $cart['qty'] }}</span>
                                    <span class="last">Rp {{ number_format($cart['product_price']) }}</span>
                                    </a>
                                </li>
                            @endforeach
                            </ul>
                            <ul class="list list_2">
                                <li>
                                    <a href="#">Subtotal
                                        <span>Rp {{ number_format($subtotal) }}</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">Pengiriman
                                        <span>Rp 0</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">Total
                                        <span>Rp {{ number_format($subtotal) }}</span>
                                    </a>
                                </li>
                            </ul>
                    <button class="btn btn-primary" type="submit">Bayar Pesanan</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        //KETIKA SELECT BOX DENGAN ID province_id DIPILIH
        $('#province_id').on('change', function() {
            //MAKA AKAN MELAKUKAN REQUEST KE URL /API/CITY
            //DAN MENGIRIMKAN DATA PROVINCE_ID
            $.ajax({
                url: "{{ url('/api/city') }}",
                type: "GET",
                data: { province_id: $(this).val() },
                success: function(html){
                    //SETELAH DATA DITERIMA, SELEBOX DENGAN ID CITY_ID DI KOSONGKAN
                    $('#city_id').empty()
                    //KEMUDIAN APPEND DATA BARU YANG DIDAPATKAN DARI HASIL REQUEST VIA AJAX
                    //UNTUK MENAMPILKAN DATA KABUPATEN / KOTA
                    $('#city_id').append('<option value="">Pilih Kabupaten/Kota</option>')
                    $.each(html.data, function(key, item) {
                        $('#city_id').append('<option value="'+item.id+'">'+item.name+'</option>')
                    })
                }
            });
        })

        //LOGICNYA SAMA DENGAN CODE DIATAS HANYA BERBEDA OBJEKNYA SAJA
        $('#city_id').on('change', function() {
            $.ajax({
                url: "{{ url('/api/district') }}",
                type: "GET",
                data: { city_id: $(this).val() },
                success: function(html){
                    $('#district_id').empty()
                    $('#district_id').append('<option value="">Pilih Kecamatan</option>')
                    $.each(html.data, function(key, item) {
                        $('#district_id').append('<option value="'+item.id+'">'+item.name+'</option>')
                    })
                }
            });
        })
    </script>
@endpush
