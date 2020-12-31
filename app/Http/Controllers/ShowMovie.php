<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShowMovie extends Controller
{
    public function index($id){
        $results =DB::select('select * from shop where id = :id', ['id' => $id]);
        return view('show' , ['results'=> $results]);
    }
}
