<?php

namespace App\Http\Controllers;

use App\tujuan;
use Illuminate\Http\Request;

class TujuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tujuan = tujuan::get();

        return view('tujuan.index',compact('tujuan'));
            
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tujuan.create');
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
            'judul'=>'required',
            'isi'=>'required|min:10'
        ]);

    tujuan::create($request->all()
    );
    return redirect()->route('tujuan.index')->with('Data ditambah','Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(tujuan $tujuan)
    {
        return view('tujuan.show',compact('tujuan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit( tujuan $tujuan)
    {
        return view('tujuan.edit',compact('tujuan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tujuan $tujuan)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required|min:10',
        ]);

        $tujuan->update($request->all());

        return redirect()->route('tujuan.index')->with('Data diedit','Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(tujuan $tujuan)
    {
        $tujuan->delete();

        return redirect()->route('tujuan.index')->with('Data dihapus','Data berhasil dihapus');
    }
}
