<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
class ActionController extends Controller{   
    //halaman awal web
    // public function Index(){

    //     //mengambil data dari database dan menampilkanya di index
    //     $users2 = DB::table('shop')->get();

    //     //sumber API dari the movie database
    //     $sumber = 'https://api.themoviedb.org/3/movie/popular?api_key=e5644539adb29bfb3ab8a660b76269fa&language=en-US&page=1';

    //     // menambil API dan diubah menjadi array
    //     $kontent = file_get_contents($sumber);

    //     //merubahnya menjadi JSON
    //     $datafilm = json_decode($kontent,true);

    //     //array asosiatif agar hasil dari results tidak baca
    //     $datafilm = $datafilm["results"];

    //     //mengirim API ke VIEW produk ubah menjadi sebiah variableData
       
    //     //fungsi with berfungsi mengirim data !
    // }
    //halaman add data
    public function Add(){
        return view('add');
    }
    // method untuk insert data ke table admin
    public function AddData(Request $request)
    {
    //validasi untuk file yang harus diisi
    $validatedData = $request->validate([
            'Nama' => 'required',
            'file_' => 'required',
    ]);
    //mengambil request file yang di upload
    $file = $request->file('file_');

    // //mengambil nama file apa yang diupload
    $fileName = $file->getClientOriginalName();

    //menaruhnya di folder storage/app/public
    //gunakan perintah php artisan storage:link 
    //fungsinya untuk saling terhubung ke dalam folder public
    $storage= $file->storeAs('/public',$fileName);
    
    // insert data ke table shop pada databse local
    //untuk tau latak databasenya berada pada folder env
	$db = DB::table('shop')->insert([
        'nama' => $request->Nama,
        'email' => $request->Email,
        'file'=> $fileName
    ]);

    //mengalihkan kehalaman awal
    return redirect('/');
   }

   //bila ada yang mau mengakses admin mengalihkan ke halaman error
   public function error(){
    return abort(403,'Halaman Tidak Dapat Diakses');
   }
}
