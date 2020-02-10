<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengumuman;
class BabDuaController extends Controller
{
    //Soal5
//Tampilkan pengumuman yang dibuat oleh user yang membuat galeri dengan dengan nama kategori galeri yang diawali dengan Aut
    public function a5(){
        $pengumumans=Pengumuman::whereHas('user',function ($query){
            $query->whereHas('galeris',function($query){
                $query->whereHas('kategoriGaleri',function ($query){
                    $query->where('nama','like','Aut%');
                });
            });
        })->with('user.galeris.kategoriGaleri')->get();

        return $pengumumans;
    }

    //Soal6
//Tampilkan pengumuman yang dibuat oleh user yang membuat galeri dan juga membuat berita
    public function a6(){
        $pengumumans=Pengumuman::whereHas('user',function ($q){
            $q->has('galeris')->orHas('beritas');
        })->count();

        return $pengumumans;
    }

}
