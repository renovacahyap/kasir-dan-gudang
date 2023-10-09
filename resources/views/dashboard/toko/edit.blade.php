@extends('dashboard.layouts.main')
@section('container')

<!-- Greeting Login -->
<div class="container p-3 mt-5">
    <h3>Edit Toko</h3>
</div>
<!-- End Greeting Login -->

<!-- card section -->
<div class="container p-3">

    {{-- <a class="btn btn-dark mb-3" href="/personal/create" role="button">Tambah Personal</a> <br> --}}
    
    <form action="/toko/{{ $toko->id }}" method="post">
        @method('put')
        @csrf
        <label for="">Nama Toko</label><br>
        <input type="text" class="form-control my-3" name="nama_toko" id="" value="{{ $toko->nama_toko }}">
        
        <label for="">Alamat</label><br>
        <div class="form-floating">
            <textarea class="form-control my-3" name="alamat" placeholder="Alamat" id="floatingTextarea2" style="height: 100px">{{ $toko->alamat }}</textarea>
            <label for="floatingTextarea2" >Alamat</label>
        </div>

        <input type="text" name="user_id" id="" value="{{ $toko->user_id }}" hidden required><br>

        <button type="submit" class="btn btn-warning">Edit Toko</button>
    </form>
</div>
<!-- End Card Section -->

@endsection


