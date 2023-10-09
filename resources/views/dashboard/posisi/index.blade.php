@extends('dashboard.layouts.main')
@section('container')
    <!-- Greeting Login -->
    <div class="container p-3 mt-5">
        <h3>Posisi</h3>
    </div>
    <!-- End Greeting Login -->

    <!-- card section -->
    <div class="container p-3">
        @if (session()->has('success'))
            <div class="alert alert-{{ session('warna') }}" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <a class="btn btn-dark mb-4" href="/position/create" role="button">Tambah Posisi</a>
        <table class="table table-striped table-dark my-3" id="example">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Posisi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $datas)
                    <tr>
                        <th>{{ $loop->iteration }}</th>
                        <td>{{ $datas->nama_posisi }}</td>
                        <td>
                            <div class="d-flex">


                                <a class="btn btn-warning" href="/position/{{ $datas->id }}/edit" role="button"><i
                                        class="bi bi-pencil-square"></i></a>


                                <form action="/position/{{ $datas->id }}" method="post">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-danger ms-1"
                                        onclick="return confirm('Are you sure?')"><i class="bi bi-trash"></i></button>
                                </form>

                            </div>
                            {{-- <a class="btn btn-danger ms-1" href="#" role="button"><i class="bi bi-trash"></i></a> --}}
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- End Card Section -->
@endsection
