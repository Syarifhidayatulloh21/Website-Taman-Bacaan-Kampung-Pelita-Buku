<?php

namespace App\Http\Controllers;

use App\program;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $program = program::get();

        return view('program.index',compact('program'));
           
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('program.create');
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

    program::create($request->all()
    );
    return redirect()->route('program.index')->with('Data ditambah','Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(program $program)
    {
        return view('program.show',compact('program'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit( program $program)
    {
        return view('program.edit',compact('program'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, program $program)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required|min:10',
        ]);

        $program->update($request->all());

        return redirect()->route('program.index')->with('Data diedit','Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(program $program)
    {
        $program->delete();

        return redirect()->route('program.index')->with('Data dihapus','Data berhasil dihapus');
    }
}
