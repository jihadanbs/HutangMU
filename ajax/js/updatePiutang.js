$(document).ready(function () {

    // nampilin data
    $(document).on('click', 'a[data-role=update]', function () {
        var id = $(this).data('id');
        var tanggal = $('#' + id).children('td[data-target=tanggal]').text();
        var pelanggan = $('#' + id).children('td[data-target=pelanggan]').text();
        var hp = $('#' + id).children('td[data-target=hp]').text();
        var keterangan = $('#' + id).children('td[data-target=keterangan]').text();
        var keperluan = $('#' + id).children('td[data-target=keperluan]').text();
        var jumlahKeluar = $('#' + id).children('td[data-target=jumlahKeluar]').text();

        $('#tanggal').val(tanggal);
        $('#pelanggan').val(pelanggan);
        $('#hp').val(hp);
        $('#keterangan').val(keterangan);
        $('#keperluan').val(keperluan);
        $('#jumlahKeluar').val(jumlahKeluar);
        $('#userId').val(id);
        $('#myModal2').modal('toggle');
    });

    // buat event untuk get data dan update ke database
    $('#save').click(function () {
        var filter = $('#filter').val();
        var username = $('#username').val();
        var id = $('#userId').val();
        var tanggal = $('#tanggal').val();
        var pelanggan = $('#pelanggan').val();
        var hp = $('#hp').val();
        var keterangan = $('#keterangan').val();
        var keperluan = $('#keperluan').val();
        var jumlahKeluar = $('#jumlahKeluar').val();

        $.ajax({
            url: 'function/updatePengeluaran.php',
            method: 'post',
            data: {
                tanggal: tanggal,
                pelanggan: pelanggan,
                hp: hp,
                keterangan: keterangan,
                keperluan: keperluan,
                jumlah: jumlahKeluar,
                id: id
            },
            success: function (response) {
                $('#' + id).children('td[data-target=tanggal]').text(tanggal);
                $('#' + id).children('td[data-target=pelanggan]').text(hp);
                $('#' + id).children('td[data-target=hp]').text(hp);
                $('#' + id).children('td[data-target=keterangan]').text(keterangan);
                $('#' + id).children('td[data-target=keperluan]').text(keperluan);
                $('#' + id).children('td[data-target=jumlahKeluar]').text(jumlahKeluar);
                $('#myModal2').modal('toggle');
                $(".tampil").load("ajax/tampilPengeluaran?filterSend=" + filter + '&username=' + username);

            }
        });
    });
});