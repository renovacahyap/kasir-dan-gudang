@extends('dashboard.layouts.main')
@section('container')
    <!-- Greeting Login -->
    <div class="profile my-5">
        <div class="container px-3">
            <div class="d-flex justify-content-center justify-content-md-start align-items-center">
                <div class="picture rounded-circle"></div>
                <div class="login-greet mx-3 mx-lg-5">
                    <h3>{{ $sapa }} {{ Str::title($user) }}!</h3>
                    {{-- <p>{{ $position->nama_posisi }}</p> --}}
                </div>
            </div>
        </div>
    </div>
    <!-- End Greeting Login -->

    @can('admin')
        <!-- card section -->
       
        <div class="highlight-card">
            <div class="container mb-5">
                <div class="row row-cols-md-2 row-cols-sm-1 row-cols-1 row-cols-lg-4 g-1">
                    <div class="col">
                        <div class="card-pending-order bg-success p-4 d-flex justify-content-between align-items-center">
                            <div class="description-card text-white">
                                <p class="text-uppercase">Pendapatan ({{ date('F') }})</p>
                                <h3>{{"Rp. " .  number_format($pbulan->TotalSales)}}</h3>
                            </div>
                            <div class="logo"></div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card-pending-order bg-danger p-4 d-flex justify-content-between align-items-center">
                            <div class="description-card text-white">
                                <p class="text-uppercase">Pendapatan ({{ date('Y') }})</p>
                                <h3>{{"Rp. " .  number_format( $ptahun->TotalSales) }}</h3>
                            </div>
                            <div class="logo"></div>
                        </div>
                    </div>
                    {{-- <div class="col">
                        <div class="card-pending-order bg-primary p-4 d-flex justify-content-between align-items-center">
                            <div class="description-card text-white">
                                <p class="text-uppercase">Task</p>
                                <h3>50%</h3>
                            </div>
                            <div class="logo"></div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card-pending-order bg-warning p-4 d-flex justify-content-between align-items-center">
                            <div class="description-card text-white">
                                <p class="text-uppercase">Pending Requests</p>
                                <h3>18</h3>
                            </div>
                            <div class="logo"></div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
        <!-- End Card Section -->


        <!-- Chart Section -->

        <form action="">
            {{-- toko --}}
            <select name="search" id="toko">
                @foreach ($tokos as $toko)
                    <option value="{{ $toko->id }}">{{ Str::title($toko->nama_toko) }}</option>
                @endforeach
            </select>

            {{-- Per Tahun --}}
            {{-- <select name="tahun" id="th">
            <option value="2023">2023</option>
        </select> --}}

            <button id="find" type="submit">Graph</button>
        </form>





        <div class="chart-section container" style="margin-bottom: 100px">
            <div class="chart-container">
                <canvas id="myChart"></canvas>
            </div>
        </div>
    @endcan

    @can('gudang')
        <div class="highlight-card">
            <div class="container mb-5">
                <div class="row row-cols-md-2 row-cols-sm-1 row-cols-1 row-cols-lg-4 g-1">
                    <div class="col">
                        <div class="card-pending-order bg-success p-4 d-flex justify-content-between align-items-center">
                            <div class="description-card text-white">
                                <p class="text-uppercase">Total Barang (Oktober)</p>
                                <h3>{{ $tbarang }} Barang</h3>
                            </div>
                            <div class="logo"></div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card-pending-order bg-danger p-4 d-flex justify-content-between align-items-center">
                            <div class="description-card text-white">
                                <p class="text-uppercase">Stock Menipis</p>
                                <h3>{{ $stockm }} Barang</h3>
                            </div>
                            <div class="logo"></div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card-pending-order bg-primary p-4 d-flex justify-content-between align-items-center">
                            <div class="description-card text-white">
                                <p class="text-uppercase">Barang Masuk ( Hari Ini )</p>
                                <h3>{{ $barangin }} Barang</h3>
                            </div>
                            <div class="logo"></div>
                        </div>
                    </div>
                    {{-- <div class="col">
                    <div class="card-pending-order bg-warning p-4 d-flex justify-content-between align-items-center">
                        <div class="description-card text-white">
                            <p class="text-uppercase">Pending Requests</p>
                            <h3>18</h3>
                        </div>
                        <div class="logo"></div>
                    </div>
                </div> --}}
                </div>
            </div>
        </div>
    @endcan









    
    <!-- End Chart Section -->
@endsection

@section('wkwk')
    {{-- <script>
        $(document).ready(function() {
            const ctx = document.getElementById("myChart");
            const myChart = new Chart(ctx, {
                type: "line",
                data: {
                    labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
                    datasets: [{
                        label: "Pendapatan tahun ",
                        data: [12, 19, 3, 5, 2, 3],
                        backgroundColor: [
                            "rgba(255, 99, 132, 0.2)",
                            "rgba(54, 162, 235, 0.2)",
                            "rgba(255, 206, 86, 0.2)",
                            "rgba(75, 192, 192, 0.2)",
                            "rgba(153, 102, 255, 0.2)",
                            "rgba(255, 159, 64, 0.2)",
                        ],
                        borderColor: [
                            "rgba(255, 99, 132, 1)",
                            "rgba(54, 162, 235, 1)",
                            "rgba(255, 206, 86, 1)",
                            "rgba(75, 192, 192, 1)",
                            "rgba(153, 102, 255, 1)",
                            "rgba(255, 159, 64, 1)",
                        ],
                        borderWidth: 1,
                        borderRadius: Number.MAX_VALUE,
                        borderSkipped: false,
                    }, ],
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true,
                        },
                    },
                },
            });


            $('#find').click(function (e) { 
                e.preventDefault();
                const toko = $('#toko').find(":selected").val();
                const th = $('#th').find(":selected").val();

                $.ajax({
                    type: "post",
                    url: "url",
                    data: "data",
                    success: function (response) {
                        
                    }
                });
            });
           

        });
    </script> --}}


    <script>
        // function dataset(){ 



        const kon = {!! $coba !!};
        let getdata = [];
        let gettotal = [];

        $.each(kon, function(key, val) {
            // console.log(val['earnMonth']);
            // getdata +="'"+ val['earnMonth'] + "'" + ":" + val['TotalSales'] +",";
            getdata.push(val['earnMonth']);
            gettotal.push(val['TotalSales']);
            // console.log(Object.assign(getdata,gettotal));
            // gettotal.push(val['TotalSales']);
        });

        console.log(gettotal);
        let key = getdata;
        let v = gettotal;
        const obj = {};

        key.forEach((element, index) => {
            obj["'" + element + "'"] = v[index];
        });

        // const res = ard.reduce((ard,hh)=> (hh[ard]=ard,hh),{});
        // const res =  Object.assign({}, ["a","b","c"].map(key,) => ({[key]: })));
        console.log(obj);
        // console.log(JSON.stringify( {!! $coba !!} ));
        return obj;
        // // return getdata.slice(0, -1);


        // };
    </script>
    <script>
        const labels = [
            'January',
            'February',
            'March',
            'April',
            'May',
            'June',
            'July',
            'August',
            'September',
            'October',
            'November',
            'December'
        ];

        function datagraph() {


            const kon = {!! $coba !!};
            let getdata = [];
            let gettotal = [];

            $.each(kon, function(key, val) {

                getdata.push(val['earnMonth']);
                gettotal.push(parseInt(val['TotalSales']));

            });

            console.log(gettotal);
            let key = getdata;
            let v = gettotal;
            const obj = {};

            key.forEach((element, index) => {
                obj[element] = v[index];
            });

            // console.log(obj);

            return obj;
        };

        function getYear() {
            const d = new Date();
            let year = d.getFullYear();

            return year;
        }


        const data = {
            labels: labels,
            datasets: [{
                label: getYear(),
                backgroundColor: 'rgb(255, 99, 132)',
                borderColor: 'rgb(255, 99, 132)',
                data: datagraph()
            }]
        };


        //   const data = {
        //     labels: labels,
        //     datasets: [{
        //       label: 'My First dataset',
        //       backgroundColor: 'rgb(255, 99, 132)',
        //       borderColor: 'rgb(255, 99, 132)',
        //       data: {
        //                 'January': 20, 
        //                 'June' : 10, 
        //                 'September': 30},
        //     }]
        //   };







        const config = {
            type: 'line',
            data: data,
            options: {}
        };
    </script>
    <script>
        const myChart = new Chart(
            document.getElementById('myChart'),
            config
        );
    </script>
@endsection
