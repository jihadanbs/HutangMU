<?php 
    require 'functions.php';
    
    if (empty($_POST['tanggal']) || empty($_POST['pelanggan']) || empty($_POST['hp']) || empty($_POST['keterangan']) || empty($_POST['keperluan']) || empty($_POST['jumlah']) || empty($_POST['username'])) {
        echo '{"status" : "Error", "Message" : "tanggal, pelanggan, hp, keterangan, keperluan, jumlah, and username is required!"}';
        exit();
    }

    // tambah data
    $tanggal = htmlspecialchars($_POST["tanggal"]);
    $pelanggan = htmlspecialchars($_POST["pelanggan"]);
    $hp = htmlspecialchars($_POST["hp"]);
    $keterangan = htmlspecialchars($_POST["keterangan"]);
    $keperluan = htmlspecialchars($_POST["keperluan"]);
    $jumlah = htmlspecialchars($_POST["jumlah"]);
    $username = $_POST['username'];

    // query insert data
    $query = "INSERT INTO pengeluaran VALUES ('', '$tanggal', '$pelanggan', '$hp', '$keterangan', '$keperluan', '$jumlah', '$username')";
    
    if (mysqli_query($koneksi, $query)) {
        echo '{"Status" : "Succes", "Message" : "Data berhasil ditambahkan!"}';
    } else {
        echo '{"Status" : "Error", "Message" : '.mysqli_error($koneksi).'}';
    }
?>