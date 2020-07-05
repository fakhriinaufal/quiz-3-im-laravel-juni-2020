@extends('layouts.master')

@section('title', 'Show Artikel')

@section('content')
    <div class="card p-3">
        <h3>Judul: {{$article->judul}}</h3>
        <h5>slug: {{$article->slag}}</h5>
        <p>{{$article->isi}}</p>
        @php
            $tags = explode(",", $article->tag);
        @endphp
        <div class="row m-0">
        @foreach ($tags as $tag)
        <button type="button" class="mr-2 btn btn-danger bts-sm" style="width: 5rem">{{$tag}}</button>
            {{-- <h2>{{$tag}}</h2> --}}
        @endforeach
        </div>
    </div>
@endsection
