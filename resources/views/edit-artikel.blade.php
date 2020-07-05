@extends('layouts.master')

@section('title', 'Edit Artikel')

@section('content')
    <form action="/artikel/{{$article->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="penulis">Id Penulis</label>
            <input type="number" class="form-control" id="penulis" name="penulis" autocomplete="off" placeholder="Masukkan Id Penulis..." value="{{$article->id}}">
        </div>
        <div class="form-group">
            <label for="judul">Judul Artikel</label>
            <input type="text" class="form-control" id="judul" name="judul" autocomplete="off" placeholder="Masukkan Judul Artikel..." value="{{$article->judul}}">
        </div>
        <div class="form-group">
            <label for="isi">Isi Artikel</label>
            <textarea class="form-control" id="isi" name="isi">{{$article->isi}}</textarea>
        </div>
        <div class="form-group">
            <label for="slag">Slug</label>
            <input type="text" class="form-control" id="slag" name="slag" placeholder="Diisi dengan judul artikel dipisah dengan tanda '-' dengan ketentuan lowercase" value="{{$article->slag}}">
        </div>
        <div class="form-group">
            <label for="tag">Tag</label>
            <input type="text" class="form-control" id="tag" name="tag" placeholder="Masukkan Tag Terkait" value="{{$article->tag}}">
        </div>
        <button class="btn btn-primary" type="submit">Ubah Artikel</button>
    </form>
@endsection
