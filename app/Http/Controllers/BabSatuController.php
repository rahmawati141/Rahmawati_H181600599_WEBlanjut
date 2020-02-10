<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;
use App\Pengumuman;
class BabSatuController extends Controller
{

    //Soal1
    //Tampilkan artikel dengan id =17 dan users_id=160
    public function a1(){
        $artikels=Artikel::where('id',17)->where('users_id',160)->get();

        return $artikels;
    }

    //Soal2
    //Tampilkan Artikel dengan id = 2 atau id =5
    public function a2(){
        $artikels=Artikel::where('id',2)->orWhere('id',5)->latest()->get();
        return $artikels;
    }

    //Soal3
//Tampilkan artikel dengan id =32 dan user dengan nama =Aslijan Megantara , sertakan usernya
    public function a3(){
        $artikels=Artikel::where('id',32)->whereHas('user',function ($query){
            $query->where('name','Aslijan Megantara');
        })->with('user')->get();

        return $artikels;
    }

    //Soal4
//Tampilkan pengumuman yang dibuat oleh user yang membuat galeri dengan galeri id=269, sertakan galerinya
    public function a4(){
        $pengumumans=Pengumuman::whereHas('user',function ($query){
            $query->whereHas('galeris',function ($query){
                $query->where('id',269);
            });
        })->with('user.galeris')->get();

        return $pengumumans;
    }


}
