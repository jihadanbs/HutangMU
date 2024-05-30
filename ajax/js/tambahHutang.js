// tambah data penghutang
$(document).ready(function () {
    $(".tambahin").click(function () {
        var tanggal = $('#tanggalTambah').val();
        var pelanggan = $('#pTambah').val();
        var hp = $('#hTambah').val();
        var keterangan = $('#keteranganTambah').val();
        var sumber = $('#sumberTambah').val();
        var jumlah = $('#jumlahTambah').val();
        var username = $('#username').val();

        if (keterangan == "") {
            swal({
                title: 'Peringatan!',
                type: 'error',
                text: 'Keterangan tidak boleh kosong!',
                confirmButtonColor: '#d9534f'
            });
        } else if (jumlah == "") {
            swal({
                title: 'Peringatan!',
                type: 'error',
                text: 'Jumlah harus diisi!',
                confirmButtonColor: '#d9534f'
            });
        } else {
            $.ajax({
                type: 'POST',
                url: "function/tambahPemasukkan.php",
                data: {
                    tanggal: tanggal,
                    pelanggan: pelanggan,
                    hp: hp,
                    keterangan: keterangan,
                    sumber: sumber,
                    jumlah: jumlah,
                    username: username
                },
                success: function () {
                    $('.tambahin').attr('data-dismiss', '');
                    $(".tampil").load("ajax/tampilPemasukkanAdd?username=" + username);
                    $('#pTambah').val("");
                    $('#hTambah').val("");
                    $('#keteranganTambah').val("");
                    $('#sumberTambah').val("ATM");
                    $('#jumlahTambah').val("");
                    console.log('OKE');
                }
            });
            $('.tambahin').attr('data-dismiss', 'modal');
        }
    });
});