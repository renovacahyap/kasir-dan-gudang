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
        <input type="text" class="form-control" name="name" id="" value="{{ old('name') }}" required><br>

        <label for="">Username</label><br>
        <input type="text" class="form-control" name="username" id="" value="{{ old('username') }}" required><br>

        <label for="">Password</label><br>
        <input type="password" class="form-control" name="password" id="" required><br>

        <label for="">Position</label><br>
        <select name="status" id="" class="form-select" required>
            @foreach ($pt as $pp)
                <option value="{{ $pp->id }}">{{ $pp->nama_posisi }}</option>
            @endforeach
        </select><br>

        <button type="submit" class="btn btn-dark">Tambah</button>
    </form>
</div>


@endsection


