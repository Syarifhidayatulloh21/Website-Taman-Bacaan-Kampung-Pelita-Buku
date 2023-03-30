<?php

namespace App\Http\Controllers;

use App\kegiatan;
use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kegiatan = kegiatan::get();

        return view('kegiatan.index',compact('kegiatan'));
           
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kegiatan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dah coba okee banggg
        //copy codingan boleh cuman di liat2 lagi ini sharescreen nya di matiin apa gimana bang? di coba dulu aja klo udah bisa baru matin owhhh baik banggg
        $this->validate($request,[
            'kegiatan'=>'required',
            'pelaksanaan'=>'required',
            'keterangan'=>'required'
        ]);

    kegiatan::create($request->all()
    );
    return redirect()->route('kegiatan.index')->with('Data ditambah','Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(kegiatan $kegiatan)
    {
        return view('kegiatan.show',compact('kegiatan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(kegiatan $kegiatan)
    {
        return view('kegiatan.edit',compact('kegiatan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, kegiatan $kegiatan)
    {
        $request->validate([
            'kegiatan' => 'required',
            'pelaksanaan' => 'required',
            'keterangan' => 'required',
        ]);

        $kegiatan->update($request->all());

        return redirect()->route('kegiatan.index')->with('Data diedit','Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(kegiatan $kegiatan)
    {
        $kegiatan->delete();

        return redirect()->route('kegiatan.index')->with('Data dihapus','Data berhasil dihapus');
    }
}
