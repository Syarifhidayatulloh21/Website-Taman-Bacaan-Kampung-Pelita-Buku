<?php

namespace App\Http\Controllers;

use App\jumlahkk;
use Illuminate\Http\Request;

class JumlahkkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $jumlahkk = jumlahkk::get();

        return view('jumlahkk.index',compact('jumlahkk'));
            
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jumlahkk.create');
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
            'rt'=>'required',
            'kk'=>'required'
        ]);

    jumlahkk::create($request->all()
    );
    return redirect()->route('jumlahkk.index')->with('Data ditambah','Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(jumlahkk $jumlahkk)
    {
        return view('jumlahkk.show',compact('jumlahkk'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(jumlahkk $jumlahkk)
    {
        return view('jumlahkk.edit',compact('jumlahkk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, jumlahkk $jumlahkk)
    {
        $request->validate([
            'rt' => 'required',
            'kk' => 'required',
        ]);

        $jumlahkk->update($request->all());

        return redirect()->route('jumlahkk.index')->with('Data diedit','Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(jumlahkk $jumlahkk)
    {
        $jumlahkk->delete();

        return redirect()->route('jumlahkk.index')->with('Data dihapus','Data berhasil dihapus');
    }
}
