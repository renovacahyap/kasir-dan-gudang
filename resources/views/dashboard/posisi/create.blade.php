@extends('dashboard.layouts.main')
@section('container')

<!-- Greeting Login -->
<div class="container p-3 mt-5">
    <h3>Tambah Posisi</h3>
</div>
<!-- End Greeting Login -->

<!-- card section -->
<div class="container p-3">

    {{-- <a class="btn btn-dark mb-3" href="/posisi/create" role="button">Tambah Personal</a> <br> --}}
    
    <form action="/position" method="post">
        @csrf
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" name="nama_posisi" value="{{ old('nama_posisi') }}">
            <label for="floatingInput">Nama Posisi</label>
        </div>

        <input type="text" name="user_id" id="" value="{{ $saya }}" hidden><br>

        <button type="submit" class="btn btn-dark">Tambah Posisi</button>
    </form>
</div>
<!-- End Card Section -->

@endsection


