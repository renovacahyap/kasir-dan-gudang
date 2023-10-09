@extends('dashboard.layouts.main')
@section('container')

<!-- Greeting Login -->
<div class="container p-3 mt-5">
    <h3>Edit Posisi</h3>
</div>
<!-- End Greeting Login -->

<!-- card section -->
<div class="container p-3">

   
    <form action="/position/{{ $data->id }}" method="post">
        @method('put')
        @csrf
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" name="nama_posisi" value="{{ $data->nama_posisi }}" required>
            <label for="floatingInput">Nama Posisi</label>
        </div>

        <input type="text" name="user_id" id="" value="{{ $data->user_id }}" hidden required><br>

        <button type="submit" class="btn btn-warning">Edit Posisi</button>
    </form>
</div>
<!-- End Card Section -->

@endsection


