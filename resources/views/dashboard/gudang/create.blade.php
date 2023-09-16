@extends('dashboard.layouts.main')
@section('container')

<!-- Greeting Login -->
<div class="container p-3 ">
    <h3>Tambah Barang</h3>
</div>
<!-- End Greeting Login -->

<!-- card section -->
<div class="container p-3">

    
    <form action="/gudang" method="post">
        @csrf
        
        <input type="text" class="form-control" name="personal_id" id="" value="1">
        <label for="">Kode Barang</label><br>
        <input type="text" class="form-control" name="kode_barang" id="">
        
        <label for="">Nama Barang</label><br>
        <input type="text" class="form-control" name="nama_barang" id="">
        
        <label for="">Stock</label><br>
        <input type="number" class="form-control" name="stock" id="">
        
        <label for="">Harga</label><br>
        <input type="text" class="form-control" name="harga" id="">
         
        <button type="submit" class="btn btn-dark">Tambah Barang</button>
    </form>
</div>
<!-- End Card Section -->

@endsection


