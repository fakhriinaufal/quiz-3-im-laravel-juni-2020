@extends('layouts.master')

@section('title', 'Buat Artikel')

@section('content')
    <form action="/artikel" method="POST">
        @csrf
        <div class="form-group">
            <label for="penulis">Id Penulis</label>
            <input required type="number" class="form-control" id="penulis" name="penulis" autocomplete="off" placeholder="Masukkan Id Penulis...">
        </div>
        <div class="form-group">
            <label for="judul">Judul Artikel</label>
            <input required type="text" class="form-control" id="judul" name="judul" autocomplete="off" placeholder="Masukkan Judul Artikel...">
        </div>
        <div class="form-group">
            <label for="isi">Isi Artikel</label>
            <textarea required class="form-control" id="isi" name="isi"></textarea>
        </div>
        <div class="form-group">
            <label for="slag">Slug</label>
            <input required type="text" class="form-control" id="slag" name="slag" placeholder="Diisi dengan judul artikel dipisah dengan tanda '-' dengan ketentuan lowercase">
        </div>
        <div class="form-group">
            <label for="tag">Tag</label>
            <input required type="text" class="form-control" id="tag" name="tag" placeholder="Masukkan Tag Terkait. Pisahkan dengan koma tanpa spasi">
        </div>
        <button class="btn btn-primary" type="submit">Tambahkan Artikel</button>
    </form>
@endsection
