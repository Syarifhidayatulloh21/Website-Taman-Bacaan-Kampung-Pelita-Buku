<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\visimisi;
use App\tujuan;
use App\program;
use App\kegiatan;
use App\jumlahkk;
use App\tingkatekonomi;
use App\galeri;
use App\kontakkami;

class BerandaController extends Controller
{
    public function index()
    {
        $visimisi = visimisi::all();
        $tujuan = tujuan::all();
        $program = program::all();
        $galeri = galeri::all();
        $kontakkami = kontakkami::all();

        return view('frontend.beranda', compact(
            'visimisi',
            'tujuan',
            'program',
            'galeri',
            'kontakkami',
        ));
    }

    public function visimisi()
    {
        $visimisi = visimisi::all();
        return view('frontend.visimisi',compact('visimisi'));
    }

    public function tujuan()
    {
        $tujuan = tujuan::all();
        return view('frontend.tujuan',compact('tujuan'));
    }

    public function kegiatan()
    {
        $kegiatan = kegiatan::all();
        return view('frontend.kegiatan',compact('kegiatan'));
    }

    public function program()
    {
        $program = program::all();
        return view('frontend.program',compact('program'));
    }

    public function jumlahkk()
    {
        $jumlahkk = jumlahkk::all();
        return view('frontend.jumlahkk',compact('jumlahkk'));
    }

    public function tingkatekonomi()
    {
        $tingkatekonomi = tingkatekonomi::all();
        return view('frontend.tingkatekonomi',compact('tingkatekonomi'));
    }

    public function galeri()
    {
        $galeri = galeri::all();
        return view('frontend.galeri',compact('galeri'));
    }

    public function kontakkami()
    {
        $kontakkami = kontakkami::all();
        return view('frontend.kontakkami',compact('kontakkami'));
    }
}
