<?php

namespace App\Http\Controllers;

use App\Artikel;
use App\Berita;
use Illuminate\Http\Request;
use App\Pengumuman;
class BabDuaController extends Controller
{
    //Soal4
//Tampilkan berita yang dibuat oleh user yang membuat pengumuman, artikel, galeri dan kategori_artikel
    public function a4(){
        $berita=Berita::whereHas('user',function ($q){
            $q->has('pengumumans')->has('artikels')->has('galeris')->has('kategoriArtikels');
        })->get();

        return $berita;
    }

    //Soal5
    //Tampilkan artikel yang dibuat oleh user yang membuat galeri dengan nama kategori galeri yang di akhiri dengan et.
    public function a5(){
        $pengumumans=Artikel::whereHas('user',function ($query){
            $query->whereHas('galeris',function($query){
                $query->whereHas('kategoriGaleri',function ($query){
                    $query->where('nama','like','%et.');
                });
            });
        })->get();

        return $pengumumans;
    }


}
