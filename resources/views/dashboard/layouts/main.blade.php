<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/dashboard/dashboard.css') }}" />
    {{-- <link href="https://cdn.datatables.net/v/bs5/dt-1.13.6/datatables.min.css" rel="stylesheet"> --}}
    {{-- CSS DataTable --}}

    <link rel="stylesheet" href="//cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <style>
        .page-item.active .page-link {
            background-color: #343a40 !important;
            border: 1px solid #f8f9fa;
        }

        .page-link {
            color: black !important;
        }

        .bg-hover{
            background-color: #e7e7e7;
        }
    </style>
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css"> --}}
    {{-- <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css"> --}}


    <title>Dasboard</title>
</head>

<body>
    <!-- navbar -->

    <div class="d-flex justify-content-center">
        @include('dashboard.layouts.sidebar')
        <main>
            @include('dashboard.layouts.navbar')

            @yield('container')

        </main>
    </div>

    <!-- bottom navigator -->
    @include('dashboard.layouts.buttom')
    <!-- end bottom navigator -->

    {{-- asset js --}}
    @include('dashboard.layouts.script')

    <script>
        function sidebar() {
            $('#sidebar-box').css({
                'width': '15em'
            });
        };
    </script>

    <script>
        $(document).ready(function() {
            new DataTable('#example');
        });
    </script>
    @yield('wkwk')
</body>

</html>
