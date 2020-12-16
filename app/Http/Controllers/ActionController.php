<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ActionController extends Controller{   
    //halaman awal web
    public function Index(){
        //mengambil data dari database dan menampilkanya di index
        $users2 = DB::table('shop')->get();
        return view('index', ['users2' => $users2]);
        // return view('index');
    }
    //halaman add data
    public function Add(){
        return view('add');
    }
    //menampikan data
    // public function MenampilkanData(){
    //     $users = DB::table('')->get();
    //     return view('admin', ['users' => $users]);
    // 

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
        $email = 'email' => $request->Email,
        'file'=> $fileName
    ]);
    //mengalihkan kehalaman awal
    return redirect('/');
   }
   public function error(){
    return abort(403,'Halaman Tidak Dapat Diakses');
   }
}
