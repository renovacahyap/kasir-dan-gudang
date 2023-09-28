@extends('dashboard.layouts.main')
@section('container')
    <!-- Greeting Login -->
    <div class="container p-3 mt-5">
        <h3>Akun</h3>
    </div>
    <!-- End Greeting Login -->

    <!-- card section -->
    <div class="container p-3">

        @if (session()->has('success'))
            <div class="alert alert-{{ session('warna') }}" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <a class="btn btn-dark mb-4" href="/user/create" role="button">Tambah Akun</a>
        <table class="table table-striped table-dark my-3" id="example">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $datas)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $datas->name }}</td>
                        <td>{{ $datas->username }}</td>
                        <td>
                            <a class="btn btn-warning" href="/user/{{ $datas->id }}/edit" role="button"><i
                                    class="bi bi-pencil-square"></i></a>
                            <a class="btn btn-danger ms-1" href="#" role="button"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- End Card Section -->
@endsection
