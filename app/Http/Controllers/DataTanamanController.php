<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Plant;

class DataTanamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $Plants = Plant::orderBy('created_at', 'DESC')->paginate(10);
        $plants = Plant::paginate(10);
        return view('data_tanaman.index', ['plants' => $plants]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('data_tanaman.create');
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
            'scientific_name' => 'required|max:255',
            'family' => 'required',
            'chemical_content' => 'required',
            'usability' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        if ($files = $request->file('image'))
        {
            $destinationPath = 'public/image/'; // upload path
            $plantImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $plantImage);
            $insert['image'] = "$plantImage";
        }

        $insert['name'] = $request->get('name');
        $insert['scientific_name'] = $request->get('scientific_name');
        $insert['family'] = $request->get('family');
        $insert['chemical_content'] = $request->get('chemical_content');
        $insert['usability'] = $request->get('usability');
        Plant::insert($insert);

        return redirect(route('data_tanaman.index'))->withSuccess(__('Plant successfully added.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $plant = Plant::find($id);
        return view('data_tanaman.show', ['plant' => $plant]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $plant = Plant::find($id);
        return view('data_tanaman.edit', ['plant' => $plant]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:255',
            'scientific_name' => 'required|max:255',
            'family' => 'required',
            'chemical_content' => 'required',
            'usability' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        if ($files = $request->file('image'))
        {
            $destinationPath = 'public/image/'; // upload path
            $plantImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $plantImage);
            $update['image'] = "$plantImage";
        }

        $update['name'] = $request->get('name');
        $update['scientific_name'] = $request->get('scientific_name');
        $update['family'] = $request->get('family');
        $update['chemical_content'] = $request->get('chemical_content');
        $update['usability'] = $request->get('usability');

        Plant::find($id)->update($update);

        return redirect(route('data_tanaman.index'))->withSuccess(__('Plant successfully updated.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        Plant::find($id)->delete();

        return redirect(route('data_tanaman.index'))->withSuccess(__('Plant successfully deleted.'));
    }
}
