<?php

namespace App\Http\Controllers;

use App\galeri;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galeri = galeri::get();
       return view('galeri.index', compact('galeri'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('galeri.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, galeri $galeri)
    {
        $request->validate([
            'namafoto' => 'required',
            'keterangan' => 'required',
            'image' => 'required'
        ]);

        $image = $request->file('image');

        $new_name = rand(). '.' .$image->getClientOriginalExtension();
        $image->move(public_path('image'), $new_name);
        $form_data = array(
            'namafoto' => $request->namafoto,
            'keterangan' => $request->keterangan,
            'image' => $new_name
        );

        galeri::create($form_data);

        return redirect('galeri')->with('success', 'Data Added successfully')->with('Data ditambah','Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(galeri $galeri)
    {
        return view('galeri.show',compact('galeri'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(galeri $galeri)
    {
        return view('galeri.edit',compact('galeri'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, galeri $galeri)
    {
        $image_name = $request->hidden_image;
        $image = $request->file('image');
        if($image != '')
        {
            $request->validate([
                'namafoto'    =>  'required',
                'keterangan'     =>  'required',
                'image'         =>  'required'
            ]);

            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('image'), $image_name);
        }
        else
        {
            $request->validate([
                'namafoto'    =>  'required',
                'keterangan'     =>  'required',
                'image' => 'required'
            ]);
        }

        $form_data = array(
            'namafoto'       =>   $request->namafoto,
            'keterangan'        =>   $request->keterangan,
            'image'            =>   $image_name
        );
        
        galeri::whereId($galeri->id)->update($form_data);

        return redirect()->route('galeri.index')->with('Data dihapus','Data berhasil dihapus');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(galeri $galeri)
    {
        $galeri->delete();

        return redirect()->route('galeri.index')->with('Data dihapus','Data berhasil dihapus');
    }
}
