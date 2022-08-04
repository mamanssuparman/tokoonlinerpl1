<?php

namespace App\Http\Controllers;

use App\Models\Category_product;
use Illuminate\Http\Request;

class CategoryProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('kategoriproduk', [
            'categoryproduct'   => Category_product::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addkategoriproduk');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $isidatanya = [
            'nama_category'    => $request->nama_categori
        ];
        Category_product::create($isidatanya);
        return redirect('/kategoriproduk');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('editkategoriproduk', [
            'datakategori'      => Category_product::where('id', $id)->first()
        ]);
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
        $isiubahdata = [
            'nama_category'     => $request->nama_categori
        ];
        Category_product::where('id', $id)->update($isiubahdata);
        return redirect('/kategoriproduk')->with('success', 'Data Kategori berhasi di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Category_product::where('id', $id)->delete();
        return redirect('/kategoriproduk')->with('success', 'Data berhasil di hapus.!');
    }
}
