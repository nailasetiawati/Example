<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //untuk menghubungkan model Eloquent ke pabrik model
    use HasFactory;


    //di jaga secara default jadi tidak perlu menentukan id saat sudah di jaga soalnya kita sudah memberi tau kepada laravel "sebenarnya jangan jaga semua"
    protected $guarded = [];
}
