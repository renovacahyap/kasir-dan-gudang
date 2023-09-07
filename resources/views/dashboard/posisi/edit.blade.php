@extends('dashboard.layouts.main')
@section('container')

<!-- Greeting Login -->
<div class="container p-3 ">
    <h3>Tambah Personalia</h3>
</div>
<!-- End Greeting Login -->

<!-- card section -->
<div class="container p-3">

    <a class="btn btn-dark mb-3" href="/personal/create" role="button">Tambah Personal</a> <br>
    
    <form action="" method="post">
        @csrf
        <label for="">Nama</label><br>
        <select name="" id="">
            <option value="">jonson</option>
        </select><br>

        <label for="">Toko</label><br>
        <select name="" id="">
            <option value=""></option>
        </select><br>

        <label for="">Nama</label><br>
        <select name="" id="">
            <option value=""></option>
        </select>
    </form>
</div>
<!-- End Card Section -->

@endsection


