@extends('dashboard.layouts.main')
@section('container')

<!-- Greeting Login -->
<div class="container p-3 mt-5">
    <h3>Tambah Barang</h3>
</div>
<!-- End Greeting Login -->

<!-- card section -->
<div class="container p-3">

    
    <form action="/gudang" method="post">
        @csrf
        
        <input type="text" class="form-control" name="personal_id" id="" value="{{ $aku->id }}" hidden>
        <input type="text" name="toko_id" value="{{ $aku->toko_id }}" hidden>

        <label for="">Kode Barang</label><br>
        <input type="text" class="form-control" name="kode_barang" id="" value="{{ old('kode_barang') }}" oninput="this.value = this.value.toUpperCase()">
        
        <label for="">Nama Barang</label><br>
        <input type="text" class="form-control" name="nama_barang" id="" value="{{ old('nama_barang') }}" oninput="this.value = this.value.toUpperCase()">
        
        <label for="">Stock</label><br>
        <input type="number" class="form-control" name="stock" id="" value="{{ old('stock') }}">
        
        <label for="">Harga</label><br>
        <input type="text" class="form-control" name="harga" id="" value="{{ old('harga') }}"><br>
         
        <button type="submit" class="btn btn-dark">Tambah Barang</button>
    </form>
</div>
<!-- End Card Section -->

@endsection


