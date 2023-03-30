<?php

namespace App\Http\Controllers;

use App\visimisi;
use Illuminate\Http\Request;

class VisimisiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $visimisi = visimisi::get();
        $visimisiCount = $visimisi->count();
        return view('visimisi.index',compact('visimisi','visimisiCount'));
            
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('visimisi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'visi'=>'required',
            'misi'=>'required'
        ]);

    visimisi::create($request->all()
    );
    return redirect()->route('visimisi.index')->with('Data ditambah','Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(visimisi $visimisi)
    {
        return view('visimisi.show',compact('visimisi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(visimisi $visimisi)
    {
        
        return view('visimisi.edit',compact('visimisi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, visimisi $visimisi)
    {
        $request->validate([
            'visi' => 'required',
            'misi' => 'required',
        ]);

        $visimisi->update($request->all());

        return redirect()->route('visimisi.index')->with('Data diedit','Data berhasil diedit');
                        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(visimisi $visimisi)
    {
        $visimisi->delete();

        return redirect()->route('visimisi.index')->with('Data dihapus','Data berhasil dihapus');
                        
    }
}