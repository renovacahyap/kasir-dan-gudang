@extends('dashboard.layouts.main')
@section('container')

<!-- Greeting Login -->
<div class="container p-3 mt-5">
    <h3>Tambah Toko</h3>
</div>
<!-- End Greeting Login -->

<!-- card section -->
<div class="container p-3">

    
    <form action="/toko" method="post">
        @csrf

        <label for="">Nama Toko</label><br>
        <input type="text" class="form-control" name="nama_toko" id="" value="{{ old('nama_toko') }}">
        
        <label for="">Alamat</label><br>
        <div class="form-floating">
            <textarea class="form-control" name="alamat" placeholder="Alamat" id="floatingTextarea2" style="height: 100px">{{ old('username') }}</textarea>
            <label for="floatingTextarea2">Alamat</label>
        </div>
        <input type="text" name="user_id" id="" value="{{ $saya }}" hidden><br>

        <button type="submit" class="btn btn-dark">Tambah Toko</button>
    </form>
</div>
<!-- End Card Section -->

@endsection


