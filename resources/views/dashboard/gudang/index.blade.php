@extends('dashboard.layouts.main')
@section('container')

<!-- Greeting Login -->
<div class="container p-3 ">
    <h3>Gudang</h3>
</div>
<!-- End Greeting Login -->

<!-- card section -->
<div class="container p-3">

    <a class="btn btn-dark" href="/gudang/create" role="button">Tambah Barang</a>
    <table class="table table-striped table-dark my-3">
        <thead>
          <tr>
            <th>#</th>
            <th>Kode Barang</th>
            <th>Nama Barang</th>
            <th>Stock</th>
            <th>Harga Jual</th>
            <th>User</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($data as $datas)
            <tr>
              <th>{{ $loop->iteration }}</th>
              <td>{{ $datas->kode_barang }}</td>
              <td>{{ $datas->nama_barang }}</td>
              <td>{{ $datas->stock }}</td>
              <td>{{ $datas->harga }}</td>
              <td>{{ $datas->personal->user->name }}</td>
              <td>
                <div class="d-flex">

                    <a class="btn btn-warning" href="/gudang/{{ $datas->id }}/edit" role="button"><i class="bi bi-pencil-square"></i></a>
                    <form action="/gudang/{{ $datas->id }}" method="post">
                        @method('delete')
                        @csrf   
                      <button type="submit" class="btn btn-danger ms-1" onclick="return confirm('Are you sure?')"><i class="bi bi-trash"></i></button>
                  </form> 
                </div>
                </td>
            </tr>
              
          @endforeach
         
        </tbody>
      </table>
</div>
<!-- End Card Section -->

@endsection


