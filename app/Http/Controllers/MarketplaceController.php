<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class MarketplaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::paginate(10);
        return view('marketplace.index', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('marketplace.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'description' => 'required|max:255',
            'price' => 'required|numeric',
            'weight' => 'required|numeric',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        if ($files = $request->file('image'))
        {
            $destinationPath = 'public/image/'; // upload path
            $productImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $productImage);
            $insert['image'] = "$productImage";
        }

        $insert['name'] = $request->get('name');
        $insert['description'] = $request->get('description');
        $insert['price'] = $request->get('price');
        $insert['weight'] = $request->get('weight');
        Product::insert($insert);

        return redirect(route('marketplace.index'))->withSuccess(__('Product successfully added.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        return view('marketplace.show', ['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view('marketplace.edit', ['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:255',
            'description' => 'required|max:255',
            'price' => 'required|numeric',
            'weight' => 'required|numeric',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        if ($files = $request->file('image'))
        {
            $destinationPath = 'public/image/'; // upload path
            $productImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $productImage);
            $update['image'] = "$productImage";
        }

        $update['name'] = $request->get('name');
        $update['description'] = $request->get('description');
        $update['price'] = $request->get('price');
        $update['weight'] = $request->get('weight');

        Product::find($id)->update($update);

        return redirect(route('marketplace.index'))->withSuccess(__('Product successfully updated.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        Product::find($id)->delete();

        return redirect(route('marketplace.index'))->withSuccess(__('Product successfully deleted.'));
    }
}
