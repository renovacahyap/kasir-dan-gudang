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
          </tr>
        </thead>
        <tbody>
          <tr>
            <th>1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <th>2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
          </tr>
          <tr>
            <th>3</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
          </tr>
        </tbody>
      </table>
</div>
<!-- End Card Section -->

@endsection


