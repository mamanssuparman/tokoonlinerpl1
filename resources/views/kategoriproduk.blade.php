@extends('master.kerangka')
@section('container')
    <a href="/kategoriproduk/create"><button class="btn btn-primary btn-md">Tambah Data Kategori Product</button></a>
    <table class="table table-responsive table-hover">
        <tr>
            <td>No</td>
            <td>Nama Kategori</td>
            <td>Aksi</td>
        </tr>
        @foreach ($categoryproduct as $categorinya)
            <tr>
                <td>{{ $categorinya->id }}</td>
                <td>{{ $categorinya->nama_category }}</td>
                <td>
                    <a href="/kategoriproduk/{{ $categorinya->id }}/edit" class="btn btn-primary btn-xs">Edit</a >
                    <form action="/kategoriproduk/{{ $categorinya->id }}" method="POST" class="d-inline">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger btn-xs" onclick="return confirm('Apakah kamu yakin akan menghapus data tersebut.?')">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
