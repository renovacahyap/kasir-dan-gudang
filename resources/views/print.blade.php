<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>Document</title>
    <style>
        .dashed {
            border-bottom-style: dashed;
        }
    </style>
</head>

<body>
    
    <div class="w-25 border border-dark">
        <div class="dashed text-center">
            INV00000013
        </div>
        <div class="dashed">
            23.09.23
        </div>
        <div class="dashed w-100">
            <table class="table table-responsive table-bordered">
                @foreach ($data as $datas)
                    <tr>
                        <td>{{ $datas->nama_barang }}</td>
                        <td>{{ $datas->qty }}</td>
                        <td class="text-end">{{ number_format($datas->total_harga) }}</td>
                        <td class="text-end">{{ number_format($datas->subtotal) }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
        <div class="dashed">

            <div class="d-flex justify-content-end">
                <p>Total</p>
                <p class="ms-5">{{ number_format($total) }}</p>
            </div>
            <div class="d-flex justify-content-end">
                <p>Tunai</p>
                <p class="ms-5" id="tunai"></p>
            </div>
            <div class="d-flex justify-content-end">
                <p>Kembali</p>
                <p class="ms-5" id="kembali"></p>
            </div>

        </div>
        <div class="dashed text-center">
            TERIMA KASIH SEMOGA REJEKINYA LANCAR DAN SELALU DIBERKAHI
        </div>


    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>
        function number_format(number, decimals, decPoint, thousandsSep) {
            number = (number + '').replace(/[^0-9+\-Ee.]/g, '')
            var n = !isFinite(+number) ? 0 : +number
            var prec = !isFinite(+decimals) ? 0 : Math.abs(decimals)
            var sep = (typeof thousandsSep === 'undefined') ? ',' : thousandsSep
            var dec = (typeof decPoint === 'undefined') ? '.' : decPoint
            var s = ''

            var toFixedFix = function(n, prec) {
                var k = Math.pow(10, prec)
                return '' + (Math.round(n * k) / k)
                    .toFixed(prec)
            }

            // @todo: for IE parseFloat(0.55).toFixed(0) = 0;
            s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.')
            if (s[0].length > 3) {
                s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep)
            }
            if ((s[1] || '').length < prec) {
                s[1] = s[1] || ''
                s[1] += new Array(prec - s[1].length + 1).join('0')
            }

            return s.join(dec)
        }
    </script>
    <script>
        $(document).ready(function() {
            let tunai = prompt("Total Bayar : " + number_format({{ $total }}));

            if (tunai == null || tunai == "") {
                $('#tunai').html(0);
                // alert(tunai=0);
            } else {
                // alert({{ $total }});
                const harga = $('#tunai').html(number_format(tunai));

                let kembalian = tunai - {{ $total }};
                // alert(kembalian);
                $('#kembali').html(number_format(kembalian));
                window.print();


            }
        });
    </script>
</body>

</html>
