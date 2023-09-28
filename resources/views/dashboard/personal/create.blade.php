@extends('dashboard.layouts.main')
@section('container')

<!-- Greeting Login -->
<div class="container p-3 mt-5">
    <h3>Tambah Personalia</h3>
</div>
<!-- End Greeting Login -->

<!-- card section -->
<div class="container p-3">

    {{-- <a class="btn btn-dark mb-3" href="/personal/create" role="button">Tambah Personal</a> <br>
     --}}
    <form action="/personal" method="post">
        @csrf
        <label for="">Nama</label><br>
        <select name="user_id" class="form-select">
            @foreach ($user as $users)
                <option value="{{ $users->id }}">{{ $users->name }}</option>
            @endforeach
        </select><br>

        <label for="">Toko</label><br>
        <select name="toko_id" id="" class="form-select">
            @foreach ($toko as $tks)
            <option value="{{ $tks->id }}">{{ $tks->nama_toko }}</option>
            @endforeach
        </select><br>

        <label for="">Posisi</label><br>
        <select name="position_id" id="" class="form-select">
            @foreach ($posisi as $pss)
                
            <option value="{{ $pss->id }}">{{ $pss->nama_posisi }}</option>
            @endforeach
        </select><br>
        
        <button type="submit" class="btn btn-dark">Tambah Personalia</button>
    </form>
</div>
<!-- End Card Section -->

@endsection


