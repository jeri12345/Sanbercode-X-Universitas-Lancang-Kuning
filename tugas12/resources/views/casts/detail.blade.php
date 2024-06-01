@extends('layout.master')

@section('title')
Halaman Detail 
@endsection

@section('content')
    <h1>{{$casts->no}}</h1>
    <h1>{{$casts->nama}}</h1>
    <p>{{$casts->umur}}</p>
    <p>{{$casts->bio}}</p>

    <a href="/cast" class="btn btn-secondary btn-sm">Back</a>
@endsection