<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanController extends Controller
{
    function index(){

        $halaman = 1;
        return view('bebas', compact('halaman'));
    }

    function halaman2(){
        return view('halaman2');
    }function welcome(){
        $data=[
            ['judul'=> 'judul pertama', 'subject'=> 'halo'],
            ['judul'=> 'judul kedua', 'subject'=> 'hai'],
            ['judul'=> 'judul ketiga', 'subject'=> 'gararetek']
        ];


        return view('konten', compact(['data']));
    }
    

}
