<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TugasController extends Controller
{
    
    function tugas(){
        $tugas = array(
            [
                "name" => "matematika",
                "guru" => "agus"
            ],
            [
                "name" => "ipa",
                "guru" => "nuny"
            ],
            [
                "name" => "pjok",
                "guru" => "tantan"
            ],
        );
        // foreach($tugas as $t)
        // dd($t);
        return view('cobain', compact('tugas'));
    
    
    }
}