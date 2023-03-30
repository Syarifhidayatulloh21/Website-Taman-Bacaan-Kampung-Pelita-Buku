<?php

namespace App\Http\Controllers;

use App\kontakkami;
use Illuminate\Http\Request;

class KontakkamiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kontakkami = kontakkami::get();

        return view('kontakkami.index',compact('kontakkami'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kontakkami.create');
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
            'alamat'=>'required',
            'notlp'=>'required',
            'instagram'=>'required',
            'email'=>'required'
        ]);

    kontakkami::create($request->all()
    );
    return redirect()->route('kontakkami.index')->with('Data ditambah','Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(kontakkami $kontakkami)
    {
        return view('kontakkami.show',compact('kontakkami'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(kontakkami $kontakkami)
    {
        return view('kontakkami.edit',compact('kontakkami'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, kontakkami $kontakkami)
    {
        $request->validate([
            'alamat'=>'required',
            'notlp'=>'required',
            'instagram'=>'required',
            'email'=>'required'
        ]);

        $kontakkami->update($request->all());

        return redirect()->route('kontakkami.index')->with('Data diedit','Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(kontakkami $kontakkami)
    {
        $kontakkami->delete();

        return redirect()->route('kontakkami.index')->with('Data dihapus','Data berhasil dihapus');
    }
}
