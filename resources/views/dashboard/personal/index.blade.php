@extends('dashboard.layouts.main')
@section('container')

<!-- Greeting Login -->
<div class="container p-3 ">
    <h3>Personalia</h3>
</div>
<!-- End Greeting Login -->

<!-- card section -->
<div class="container p-3">

    <a class="btn btn-dark" href="/personal/create" role="button">Tambah Personal</a>
    <table class="table table-striped table-dark my-3">
        <thead>
          <tr>
            <th>#</th>
            <th>Nama</th>
            <th>Toko</th>
            <th>Posisi</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($data as $datas)
          <tr>
            <th>{{ $loop->iteration }}</th>
            <td>{{ $datas->user->name }}</td>
            <td>{{ $datas->toko->nama_toko }}</td>
            <td>{{ $datas->position->nama_posisi }}</td>
            <td>
              <a class="btn btn-warning" href="/personal/{{ $datas->id }}/edit" role="button"><i class="bi bi-pencil-square"></i></a>
              <a class="btn btn-danger ms-1" href="#" role="button"><i class="bi bi-trash"></i></a></td>
          </tr>
          @endforeach
          
        </tbody>
      </table>
</div>
<!-- End Card Section -->

@endsection


