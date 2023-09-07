@extends('dashboard.layouts.main')
@section('container')

<!-- Greeting Login -->
<div class="container p-3 mt-5">
    <h3>Edit Akun</h3>
</div>
<!-- End Greeting Login -->

<div class="container p-3">
    <form action="/user/{{ $user->id }}" method="post">
        @method('put')
        @csrf
        <label for="">Nama</label><br>
        <input type="text" class="form-control" name="name" id="" value="{{ $user->name }}"><br>

        <label for="">Username</label><br>
        <input type="text" class="form-control" name="username" id="" value="{{ $user->username }}"><br>

        <label for="">Password</label><br>
        <input type="text" class="form-control" name="password" id=""><br>

        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
</div>


@endsection


