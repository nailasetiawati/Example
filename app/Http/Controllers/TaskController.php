<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    function index(){
        $data = User::whereId(2)->first();
        // dd($data);
        return view('user', compact('data'));
    }

    function tambah_siswi(){
        return view('tambah_user');
    }

    function input_siswi(Request $request){
        $user = new User();
        $user ->nama   = $request->nama;
        $user ->nis  = $request->nis;
        $user ->kelas    = $request->kelas;
        $user->save();
        return redirect('/tampil_siswi');
        //redirect mengarahkan pengunjung website ke alamat url

    }
    function tampil_siswi(){
        $data = User::all();
        return view('data_siswi', compact(['data']));
    }
    function hapus_siswi($id){
        // dd($id);
        $data = User::whereId($id)->delete();
        return redirect('/tampil_siswi');

    }
    function edit_siswi($id){
        $data = User::whereId($id)->first();
        return view('edit_siswi', compact(['data']));
    }
    function update_siswi($id,Request $request){
        $data = User::whereId($id)->first();
        $data->nama = $request->nama;
        $data->nis = $request->nis;
        $data->kelas = $request->kelas;
        $data->save();
        return redirect('/tampil_siswi');
    }
}
