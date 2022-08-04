@extends('master.kerangka')
@section('container')
<div class="container">
    <form action="/kategoriproduk/{{ $datakategori->id }}" method="POST">
        @csrf
        @method('PUT')
        <label for="Nama Categori">Nama Kategori</label>
        <input type="text" name="nama_categori" class="form form-control" value="{{ $datakategori->nama_category }}">
        <button name="simpan" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection