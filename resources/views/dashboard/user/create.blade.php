@extends('dashboard.layouts.main')
@section('container')

<!-- Greeting Login -->
<div class="container p-3 mt-5">
    <h3>Tambah Akun</h3>
</div>
<!-- End Greeting Login -->

<div class="container p-3">
    <form action="/user" method="post">
        @csrf
        <label for="">Nama</label><br>
        <input type="text" class="form-control" name="name" id=""><br>

        <label for="">Username</label><br>
        <input type="text" class="form-control" name="username" id=""><br>

        <label for="">Password</label><br>
        <input type="text" class="form-control" name="password" id=""><br>

        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
</div>


@endsection


