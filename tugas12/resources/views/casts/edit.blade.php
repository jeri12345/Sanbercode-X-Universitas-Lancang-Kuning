@extends('layout.master')
@section('title')
Halaman Tambah Casts
@endsection

@section('content')

<form method="POST" action="/casts/{{$casts->id}}">
    @csrf
    {{-- Validation --}}
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif


    {{-- form input --}}
    @csrf
    @method("put")
    <div class="form-group">
      <label >nama Cast</label>
      <input type="text" value="{{$casts->nama}}" class="form-control" name="nama">
    </div>
    <div class="form-group">
      <label >umur Cast</label>
      <input type="text" value="{{$casts->umur}}" class="form-control" name="umur">
    </div>
    <div class="form-group">
        <label >bio cast</label>
        <textarea name="bio"  class="form-control" cols="30" rows="5" >{{$casts->bio}}</textarea>
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@endsection