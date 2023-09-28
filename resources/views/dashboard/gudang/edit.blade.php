@extends('dashboard.layouts.main')
@section('container')

<!-- Greeting Login -->
<div class="container p-3 mt-5">
    <h3>Update Barang</h3>
</div>
<!-- End Greeting Login -->

<!-- card section -->
<div class="container p-3">

    
    <form action="/gudang/{{ $data->id }}" method="post">
        @method('put')
        @csrf

        <input type="text" class="form-control" name="personal_id" value="{{ $data->personal_id }}" hidden>
       
        <label for="">Kode Barang</label><br>
        <input type="text" class="form-control" name="kode_barang" value="{{ $data->kode_barang }}" readonly>
        
        <label for="">Nama Barang</label><br>
        <input type="text" class="form-control" name="nama_barang" value="{{ $data->nama_barang }}"  oninput="this.value = this.value.toUpperCase()">
        
        <label for="">Stock</label><br>
        <input type="number" class="form-control" name="stock" value="{{ $data->stock }}">
        
        <label for="">Harga</label><br>
        <input type="text" class="form-control" name="harga" value="{{ $data->harga }}">
         
        <button type="submit" class="btn btn-dark">Update Barang</button>
    </form>
</div>
<!-- End Card Section -->

@endsection


