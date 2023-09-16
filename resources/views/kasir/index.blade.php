<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href=" {{ asset('/css/kasir/style.css') }} ">
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css"> --}}
    <title>Kasir</title>
</head>
<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="d-flex flex-column justify-content-between  h-100">

                        <h1 class="inter">logo</h1>
    
                        <div class="group-cari">
                            <label class="lb-kdbrg" for="">Invoice</label><br>
                           
                            <div class="d-flex">

                                <input type="text" class="form-control w-50" name="kode_barang" id="kode_barang" value="{{ $inv }}" disabled>
                                <button class="btn btn-success ms-2" data-bs-toggle="modal" data-bs-target="#exampleModal"  id="tbh">+</button>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="d-flex flex-column justify-content-between h-100 p-2">

                        <div class="indicator d-flex  justify-content-end">
                            <p class="me-5">11 Agustus 2023</p>
                            <p>Toko 1 - Angela</p>
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
        <div class="container">
            <div class="row">
                <div class="col-9">
                    <table class="table table-striped">
                        <thead>
                            <th>No</th>
                            <th>Kode Barang</th>
                            <th>Nama Barang</th>
                            <th>Qty</th>
                            <th>Harga</th>
                            <th>Subtotal</th>
                        </thead>
                        <tbody>
                            @foreach ($data as $datas)
                                
                           
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $datas->kode_barang }}</td>
                                <td>{{ $datas->kode_barang }}</td>
                                <td>{{ $datas->qty }}</td>
                                <td>{{ $datas->total_harga }}</td>
                                <td>{{ $datas->total_harga }}</td>
                            </tr>

                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="col-3">

                </div>
            </div>
        </div>
    </main>
    <footer>
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center">
                
                <div class="col">
                    <form action="/inv" method="post">
                    @csrf
                    <input type="text" class="text-dark" name="invoice" id="" value="{{ $inv }}">
                    <div class="">
                        <label for="" class="text-dark inter-24">Total Custom</label><br>
                        <input type="text" class="text-dark" name="total_bayar" id="tc" value="{{ $total }}">
                    </div>
                </div>
                <div class="col">
                    <div class=" ">
                        <p class="text-dark inter-24 p-0 m-0">Total</p>
                        <div class="text-dark inter-64 p-0 m-0" id="tb">100.000</div>
                    </div>
                </div>
                <div class="col  d-flex justify-content-center">
                  
                        <Button type="submit" class="btn-bayar">Bayar</Button>
                    </form>
                </div>
            </div>
        </div>
    </footer>


    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5 text-dark" id="exampleModalLabel">Modal title</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <input type="text" id="rego" class="text-dark">

                <form action="" method="post">
                    @csrf

                    <input type="text" class="text-dark" name="invoice_id" id="" value="1">


                    <label for="" class="text-dark">Nama Barang</label>
                    <select  name="gudang_id" id="select" class="text-dark form-select">
                        @foreach ($barang as $brg)
                        
                        <option class="text-dark" data-harga="{{ $brg->harga }}" value="{{ $brg->id }}">{{ Str::title($brg->nama_barang)  }}</option>
                            
                        @endforeach
                        
                    </select><br>

                    <label for="" class="text-dark">Qty</label><br>
                    <input type="number" class="text-dark" name="qty" id="qty"><br>

                    <label for=""  class="text-dark">Total Harga</label><br>
                    <input type="text" class="text-dark" name="total_harga" id="total_harga"><br>

            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Tambah</button>
              
            </form>
            </div>
          </div>
        </div>
      </div>


      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="{{ asset('/js/kasir/script.js') }}"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script> --}}

</body>
</html>