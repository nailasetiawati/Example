@extends('layout')

@section('content')
<br>
    @foreach ($data as $data)
    {{$data['judul']}}
    {{$data['subject']}}<br>

    @endforeach

@endsection