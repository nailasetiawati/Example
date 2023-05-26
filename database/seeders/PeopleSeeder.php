<?php

namespace Database\Seeders;

use App\Models\peoples;
use Illuminate\Database\Seeder;

class PeopleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        peoples::insert([
            'nama'=>"nai",
            'alamat'=>"cbdyt",
            'umur'=>12,
            'statusPekerjaan'=>"pelajar",
        ]);
        peoples::insert([
            'nama'=>"Ica",
            'alamat'=>"cimahi",
            'umur'=>15,
            'statusPekerjaan'=>"pelajar",
        ]);
        peoples::insert([
            'nama'=>"Yanto",
            'alamat'=>"cirangrang",
            'umur'=>19,
            'statusPekerjaan'=>"mahasiswa",
        ]);
        peoples::insert([
            'nama'=>"Rifaz",
            'alamat'=>"cembul",
            'umur'=>20,
            'statusPekerjaan'=>"mahasiswa",
        ]);
        peoples::insert([
            'nama'=>"Resa",
            'alamat'=>"cupu",
            'umur'=>18,
            'statusPekerjaan'=>"pelajar",
        ]);

    }
}
