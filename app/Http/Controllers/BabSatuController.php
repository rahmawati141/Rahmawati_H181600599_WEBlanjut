<?php

namespace App\Http\Controllers;

use App\KategoriBerita;
use Illuminate\Http\Request;
use App\Artikel;
use App\Pengumuman;
class BabSatuController extends Controller
{

    //Soal1
    //Tampilkan kategori berita dengan id=40 dan dibuat oleh orang dengan email ntarihoran@siregar.org
    public function a1(){
        $kategoriBerita=KategoriBerita::where('id',40)->whereHas('user',function ($q){
            $q->where('email','ntarihoran@siregar.org');
        })->get();

        return $kategoriBerita;
    }

    //Soal2
    //Tampilkan Kategori Berita dari berita yang ditulis oleh orang dengan email yang diakhiri @wulandari.in
    public function a2(){
        $data=KategoriBerita::whereHas('beritas',function ($q){
            $q->whereHas('user',function ($q){
                $q->where('email','like','%@wulandari.in');
            });
        })->get();
        return $data;
    }

    //Soal3
//Tampilkan Pengumuman yang ditulis oleh orang yang membuat kategori artikel id = 5 atau membuat kategori artikel id = 20 , sertakan user pembuat pengumumannya
    public function a3(){
        $data=Pengumuman::whereHas('user',function ($query){
            $query->whereHas('kategoriArtikels',function ($query){
                $query->where('id',5)->orWhere('id',20);
            });
        })->with('user')->get();

        return $data;
    }


}
