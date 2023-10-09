<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href=" {{ asset('/css/kasir/style.css') }} ">
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css"> --}}
    <style>

    </style>
    <title>Kasir</title>
</head>

<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="d-flex flex-column justify-content-between h-100">

                        <h1 class="inter">UD. LUTHFI</h1>
                        <div class="group-cari">
                            <label class="lb-kdbrg" for="">Invoice</label><br>
                            <div class="d-flex mb-3">
                                <input type="text" class="form-control w-50" name="kode_barang" id="kode_barang"
                                    value="{{ $inv }}" disabled>
                                <button class="btn btn-success ms-2" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal" id="tbh">+</button>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="d-flex flex-column justify-content-between h-100 p-2">

                        <div class="indicator d-flex  justify-content-end">
                            <p class="btn text-white rounded-pill">{{ $today }}</p>
                            <form action="/logout" method="POST"  id="logout">
                                @csrf
                                <a class="btn btn-danger rounded-pill" href="javascript:$('#logout').submit()"
                                    class="d-block">{{ Str::title($toko->nama_toko) }} -
                                    {{ Str::title($user) }}</a>
                            </form>

                        </div>
                        <div class="total-bayar d-flex flex-column align-items-end">
                            <h3>Total Bayar</h3>
                            <p class="inter-harga m-0 p-0 " id="tot">Rp {{ $total }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="container ">
            <div class="row">
                <div class="col-9">
                    <div class="table-responsive py-3 mt-1" style="height: 47vh;">
                        <table class="table table-striped">
                            <thead>
                                <th>No</th>
                                <th>Kode Barang</th>
                                <th>Nama Barang</th>
                                <th>Qty</th>
                                <th>Harga</th>
                                <th>Subtotal</th>
                                <th>Aksi</th>
                            </thead>
                            <tbody>
                                @foreach ($data as $datas)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $datas->kode_barang }}</td>
                                        <td>{{ $datas->nama_barang }}</td>
                                        <td>{{ $datas->qty }}</td>
                                        <td>{{ $datas->harga }}</td>
                                        <td>{{ $datas->subtotal }}</td>
                                        <td>
                                            <form action="/pembelian/{{ $datas->id }}" method="post">
                                                @method('delete')
                                                @csrf
                                                <input class="text-dark" type="text" value="{{ $datas->id_gudang }}" name="id_gudang" hidden>
                                                <input class="text-dark" type="text" name="stocki" value="{{ $datas->qty }}" hidden>
                                                <button type="submit" class="btn btn-danger ms-1"><i
                                                        class="bi bi-trash-fill"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-3">

                </div>
            </div>
        </div>
    </main>
    <footer>
        <div class="container ">
            <div class="row d-flex justify-content-center align-items-center">

                <div class="col">
                    <form action="/inv" method="post">
                        @csrf
                        <input type="text" class="text-dark" name="id" id=""
                            value="{{ $inv }}" hidden>
                        <input type="text" class="text-dark" name="user_id" value="{{ $iduser }}" hidden>
                        <input type="text" class="text-dark" name="toko_id" value="{{ $toko->idtoko }}" hidden>
                        <div class="">
                            <label for="" class="text-dark inter-24">Total Custom</label><br>
                            <input type="text" class=" w-50 text-dark" name="total_harga" id="tc"
                                value="{{ $total }}" required>
                        </div>
                </div>
                <div class="col">
                    <div class=" ">
                        <p class="text-dark inter-24 p-0 m-0">Total</p>
                        <div class="text-dark inter-64 p-0 m-0" id="tb">100.000</div>
                    </div>
                </div>
                <div class="col  d-flex justify-content-center">
                    <Button type="submit" class="btn-bayar" id="tbayar">Bayar</Button>
                    </form>
                </div>
            </div>
        </div>
    </footer>


    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 text-dark" id="exampleModalLabel">Pilih Produk</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <input type="text" id="rego" class="text-dark" hidden>

                    <form action="" method="post">
                        @csrf

                        <input type="text" class="text-dark" name="invoice_id" id=""
                            value="{{ $inv }}" hidden><br>
                        <input type="text" name="user_id" id="" value="{{ $iduser }}" hidden>


                        <label for="" class="text-dark">Nama Barang</label>
                        <select name="gudang_id" id="select" class="text-dark form-select">
                            <option value="">Pilih Barang</option>
                            @foreach ($barang as $brg)
                                <option class="text-dark" data-harga="{{ $brg->harga }}"
                                    value="{{ $brg->id }}">{{ Str::title($brg->nama_barang) }}</option>
                            @endforeach

                        </select><br>

                        <label for="" class="text-dark">Qty</label><br>

                        <input type="number" class="text-dark d-inline form-control w-25 mb-3" name="qty"
                            id="qty"><span class="ms-3 text-dark" id="stock"></span><br>


                        <label for="" class="text-dark">Total Harga</label><br>
                        <input type="text" class="text-dark form-control" name="total_harga"
                            id="total_harga"><br>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Tambah</button>

                    </form>
                </div>
            </div>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>



    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <script src="{{ asset('/js/kasir/script.js') }}"></script>

    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script> --}}

    @if (session()->has('tai'))
        <script>
            document.addEventListener("DOMContentLoaded", () => {
                const url = "{{ session('tai') }}";
                // alert(url);
                if (confirm("Cetak Struk ?") == true) {
                    window.open(url, '_blank');
                } else {
                    return false;
                }

            });

            // document.addEventListener("DOMContentLoaded", () => {
            // function(url) {
            //     // if (confirm("Cetak Struk") == true) {
            //     //     window.open(url, '_blank');
            //     // } else {
            //     //     return false;
            //     // }
            //         alert(url);

            // }
        </script>
    @endif


</body>

</html>
