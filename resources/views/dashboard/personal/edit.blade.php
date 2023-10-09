@extends('dashboard.layouts.main')
@section('container')

<!-- Greeting Login -->
<div class="container p-3 mt-5">
    <h3>Edit Personalia</h3>
</div>
<!-- End Greeting Login -->

<!-- card section -->
<div class="container p-3">

    {{-- <a class="btn btn-dark mb-3" href="/personal/create" role="button">Tambah Personal</a> <br>
     --}}
    <form action="/personal/{{ $data->id }}" method="post">
        @method('put')
        @csrf
        <label for="">Nama</label><br>
        <select name="user_id" class="form-select">
            @foreach ($user as $users)
                <option value="{{ $users->id }}" @if ($users->id == $data->user_id){{ 'selected' }}@endif>{{ $users->name }}</option>
            @endforeach
        </select><br>

        <label for="">Toko</label><br>
        <select name="toko_id" id="" class="form-select">
            @foreach ($toko as $tks)
            <option value="{{ $tks->id }}"@if ($tks->id == $data->toko_id){{ 'selected' }}@endif>{{ $tks->nama_toko }}</option>
            @endforeach
        </select><br>

        <label for="">Posisi</label><br>
        <select name="position_id" id="" class="form-select">
            @foreach ($posisi as $pss)
                
            <option value="{{ $pss->id }}" @if ($pss->id == $data->position_id){{ 'selected' }}@endif>{{ $pss->nama_posisi }}</option>
            @endforeach
        </select><br>
        
        <button type="submit" class="btn btn-warning">Edit Personalia</button>
    </form>
</div>
<!-- End Card Section -->

@endsection


