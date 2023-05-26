@extends('latihan')

@section('coba')
<h1>Daftar tugas</h1>
@foreach ($tugas as $t)
<h3>Pelajaran : {{ $t['name'] }}</h3>
<h3>Guru : {{ $t['guru'] }}</h3>
    
@endforeach
@endsection