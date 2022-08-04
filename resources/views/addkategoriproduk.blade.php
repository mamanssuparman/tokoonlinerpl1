@extends('master.kerangka')
@section('container')
<div class="container">
    <form action="/kategoriproduk/" method="POST">
        @csrf
        <label for="Nama Categori">Nama Kategori</label>
        <input type="text" name="nama_categori" class="form form-control">
        <button name="simpan" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection