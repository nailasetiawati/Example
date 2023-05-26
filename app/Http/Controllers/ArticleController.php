<?php

namespace App\Http\Controllers;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ArticleController extends Controller
{
    // public function index()
    // {
    //     $data = 1;
    //    return view('home', compact(['data']));
    // }

    public function show($slug)
    {
        die($slug);
       return view('single', ['title' => $slug]);
    }

    function index(){
        $data = User::whereId(2)->first();
        // dd($data);
        return view('user', compact('data'));
    }

    function tambah_data(){
        return view('tambah_user');
    }

    function input_data(Request $request){
        $user = new User();
        $user ->nama   = $request->nama;
        $user ->nis  = $request->kelas;
        $user ->kelas    = $request->nis;
        $user->save();
        return redirect('/tampil_data');
    }
    function tampil_data(){
        $data = User::all();
        return view('data_siswa', compact(['data']));
    }
    function hapus_data($id){
        // dd($id);
        $data = User::whereId($id)->delete();
        return redirect('/tampil_data');

    }
    function edit_data($id){
        $data = User::whereId($id)->first();
        return view('edit_data', compact(['data']));
    }
    function update_data($id,Request $request){
        $data = User::whereId($id)->first();
        $data->nama = $request->nama;
        $data->nis = $request->nis;
        $data->kelas = $request->kelas;
        $data->save();
        return redirect('/tampil_data');
    }

    // public function createUsers()
    // {


    }



    

