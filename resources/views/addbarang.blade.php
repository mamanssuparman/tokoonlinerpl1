@extends('master.kerangka')

@section('container')
    <div class="contaier">
        <div class="row">
            <div class="col-md-12">
                <form action="/barang" method="POST">
                    @csrf
                    <label for="namabarang">Nama Barang</label>
                    <input type="text" name="namabarang" class="form form-control">
                    <label for="hargabarang">Harga Barang</label>
                    <input type="text" name="harga" class="form form-control">
                    <label for="deskripsi">Deskripsi</label>
                    <input type="text" name="deskripsi" class="form form-control">
                    <label for="stock">Stock</label>
                    <input type="text" name="stock" class="form form-control">
                    <label for="categor_id">Categori</label>
                    <select name="categori_id" id="" class="form form-control">
                        @foreach ($datacategory as $categori)
                            <option value="{{ $categori->id }}">{{ $categori->nama_category }}</option>
                        @endforeach
                    </select>
                    <button class="btn btn-primary btn-sm mt-2">Simpan</button>
                    <a href="/barang" class="btn btn-warning btn-sm mt-2">Back to Barang</a>
                </form>
            </div>
        </div>
    </div>
@endsection
