@extends('master.kerangka')

@section('container')

    @if (session()->has('informasi'))
        <div class="alert alert-primary">
            {{ session('informasi') }}
        </div>
    @endif
    <a href="/barang/create"><button class="btn btn-primary btn-md">Tambah Data barang</button></a>
    <table class="table table-responsive table-hover">
        <tr>
            <td>No</td>
            <td>Nama Barang</td>
            <td>Harga</td>
            <td>Deskripsi</td>
            <td>Stock</td>
            <td>Category</td>
            <td>Aksi</td>
        </tr>
        @foreach ($databarangs as $barang)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $barang->namabarang }}</td>
                <td>{{ $barang->harga }}</td>
                <td>{{ $barang->deskripsi }}</td>
                <td>{{ $barang->stock }}</td>
                <td>{{ $barang->category_product->nama_category }}</td>
                <td><button class="btn btn-primary btn-sm"></button></td>
            </tr>
        @endforeach
    </table>
@endsection
