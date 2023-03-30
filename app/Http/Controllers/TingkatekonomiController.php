<?php

namespace App\Http\Controllers;

use App\tingkatekonomi;
use Illuminate\Http\Request;

class TingkatekonomiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tingkatekonomi = tingkatekonomi::get();

        return view('tingkatekonomi.index',compact('tingkatekonomi'));

            
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tingkatekonomi.create');
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
            'jumlah'=>'required',
            'keterangan'=>'required'
        ]);

    tingkatekonomi::create($request->all()
    );
    return redirect()->route('tingkatekonomi.index')->with('Data ditambah','Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(tingkatekonomi $tingkatekonomi)
    {
        return view('tingkatekonomi.show',compact('tingkatekonomi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(tingkatekonomi $tingkatekonomi)
    {
        return view('tingkatekonomi.edit',compact('tingkatekonomi'));
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tingkatekonomi $tingkatekonomi)
    {
        $request->validate([
            'jumlah' => 'required',
            'keterangan' => 'required',
        ]);

        $tingkatekonomi->update($request->all());

        return redirect()->route('tingkatekonomi.index')->with('Data diedit','Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(tingkatekonomi $tingkatekonomi)
    {
        $tingkatekonomi->delete();

        return redirect()->route('tingkatekonomi.index')->with('Data dihapus','Data berhasil dihapus');
    }
}
