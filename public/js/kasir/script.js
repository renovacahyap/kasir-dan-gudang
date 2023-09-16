$(document).ready(function () {
    let data = [];


    function formatRupiah(angka, prefix) {
        var number_string = angka.replace(/[^,\d]/g, '').toString(),
            split = number_string.split(','),
            sisa = split[0].length % 3,
            rupiah = split[0].substr(0, sisa),
            ribuan = split[0].substr(sisa).match(/\d{3}/gi);

        // tambahkan titik jika yang di input sudah menjadi angka ribuan
        if (ribuan) {
            separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }

        rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
        return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
    }


    // console.log(data);
    // console.log("abracadabra"+data);
    $('#select').change(function () {


        const harga = $(this).find(':selected').attr('data-harga');
        // alert(harga);
        $('#rego').val(harga);

    });


    $('#qty').change(function (e) {
        e.preventDefault();
        const qty = $(this).val();
        const harga = $('#rego').val();
        const total = qty * harga;
        $('#total_harga').val(total);
    });


    $('#tc').keyup(function (e) {
        let tcv = $('#tc').val();
        console.log(tcv);
        $('#tb').html(formatRupiah(tcv, 'Rp. '));
        $('#tot').html(formatRupiah(tcv, 'Rp. '));
    });



    // console.log(daftar());

    // $('#tbh').click(function (e) {
    //     // e.preventDefault();
    //     let inputKode = $('#kode_barang').val();
    //     data.push(inputKode);


    //     // $.ajax({
    //     //     type: "GET",
    //     //     url: "/daftar?id=" + data,
    //     //     success: function (response) {

    //     //     }
    //     // });


    //     function daftar() {
    //         // console.log(data);
    //         $.ajax({
    //             type: "GET",
    //             url: "/daftar?id=" + data,
    //             success: function (hasil) {
    //                 // let tai = JSON.stringify(hasil);
    //                 //PARSE
    //                 let tai = JSON.parse(hasil);
    //                 console.log(tai[0].id);
    //             }
    //         });
    //     }




    //     // daftar();
    //     // console.log(daftar());

    // });
});