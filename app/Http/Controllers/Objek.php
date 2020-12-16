<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class Objek extends Controller
{
   public function Data(){
    $arrays =array(
        [   'id' => 1,
            'name' => 'flandy',
            'usia' => 17
        ]   
        ,
        [
            'id' => 2,
            'name' => 'aldy',
            'usia' => 16]
        ,
        [
            'id' => 3,
            'name' => 'aldy',
            'usia' => 16]
    );
    // $sort = array_values(Arr::sort($array,function($value){
    //     return $value['usia'];
    // }));    
    return view('produk', ['arrays' => $arrays]);
   }
   public function DataJson(){
       //sumber API dari the movie database
       $sumber = 'https://api.themoviedb.org/3/movie/popular?api_key=e5644539adb29bfb3ab8a660b76269fa&language=en-US&page=1';
       // menambil API dan diubah menjadi array
       $kontent = file_get_contents($sumber);
       //merubahnya menjadi JSON
       $data = json_decode($kontent,true);
       //array asosiatif agar hasil dari results tidak baca
       $data = $data["results"];
       //mengirim API ke VIEW produk ubah menjadi sebiah variableData 
       return view('produk', ['data' => $data]);
   }
}
