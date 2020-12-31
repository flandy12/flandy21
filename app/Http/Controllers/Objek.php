<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class Objek extends Controller
{
   public function Data(){
    return view('gmail');
    // $sort = array_values(Arr::sort($array,function($value){
    //     return $value['usia'];
    // }));    
   }
   public function DataJson(){
       //sumber API dari the movie database
       $sumber = 'https://api.themoviedb.org/3/movie/popular?api_key=e5644539adb29bfb3ab8a660b76269fa&language=en-US&page=1';
       // menambil API dan diubah menjadi array
       $kontent = file_get_contents($sumber);
       //merubahnya menjadi JSON
       $datafilm = json_decode($kontent,true);
       //array asosiatif agar hasil dari results tidak baca
       $datafilm = $datafilm["results"];
       //mengirim API ke VIEW produk ubah menjadi sebiah variableData
       return view('movie')->
              with(['datafilm' => $datafilm]);
   }
}
