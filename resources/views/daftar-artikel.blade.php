@extends('layouts.master')

@section('title', 'Daftar Artikel')

@section('content')
    <a href="/artikel/create" class="btn btn-primary">Tambah Artikel</a>
    @if (isset($articles))
        <table class="table mt-4">
            <thead class="thead-dark">
                <tr>
                    <th>No</th>
                    <th>Id Penulis</th>
                    <th>Judul Artikel</th>
                    <th style="width: 15rem">Actions</th>
                </tr>
            </thead>
            <tbody>
                @php $angka = 1; @endphp
                @foreach ($articles as $item => $key)
                    <tr>
                        <td>{{$angka++}}</td>
                        <td>{{$key->penulis}}</td>
                        <td>{{$key->judul}}</td>
                        <td>
                            <div class="row m-0 d-flex justify-content-between">
                                <a href="/artikel/{{$key->id}}" class="btn btn-success">Baca</a>
                                <a href="/artikel/{{$key->id}}/edit" class="btn btn-info">Ubah</a>
                                <form style="inline" action="/artikel/{{$key->id}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit">Hapus</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <h4 class="mt-2 text-center">Belum Ada Artikel</h4>
    @endif
@endsection

@push('scripts')
<script>
    Swal.fire({
        title: 'Berhasil!',
        text: 'Memasangkan script sweet alert',
        icon: 'success',
        confirmButtonText: 'Cool'
    })
</script>
@endpush
