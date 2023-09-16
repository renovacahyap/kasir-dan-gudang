@extends('dashboard.layouts.main')
@section('container')

<!-- Greeting Login -->
<div class="container p-3 ">
    <h3>Edit Posisi</h3>
</div>
<!-- End Greeting Login -->

<!-- card section -->
<div class="container p-3">

   
    <form action="/position/{{ $data->id }}" method="post">
        @method('put')
        @csrf
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" name="nama_posisi" value="{{ $data->nama_posisi }}">
            <label for="floatingInput">Nama Posisi</label>
        </div>

        <button type="submit" class="btn btn-dark">Edit Posisi</button>
    </form>
</div>
<!-- End Card Section -->

@endsection


