<?php
	require 'functions.php';

    if (empty($_POST['tanggal']) || empty($_POST['pelanggan']) || empty($_POST['hp']) || empty($_POST['keterangan']) || empty($_POST['sumber']) || empty($_POST['jumlah']) || empty($_POST['id'])) {
        echo '{"status" : "Error", "Message" : "tanggal, pelanggan, hp, keterangan, sumber, jumlah, and ID is required!"}';
        exit();
	}
	
	if(isset($_POST['id'])){
		$tanggal = $_POST['tanggal'];
		$pelanggan = $_POST['pelanggan'];
		$hp = $_POST['hp'];
		$keterangan = $_POST['keterangan'];
		$sumber = $_POST['sumber'];
		$jumlah = $_POST['jumlah'];
		$id = $_POST['id'];

		//  query update data 
		$result  = mysqli_query($koneksi , "UPDATE pemasukkan SET tanggal='$tanggal' , pelanggan='$pelanggan' , hp='$hp' , keterangan='$keterangan' , sumber = '$sumber', jumlah='$jumlah' WHERE id='$id'");
		if($result){
			echo '{"Status" : "Succes", "Message" : "Data berhasil diupdate!"}';
		} else {
			echo '{"Status" : "Error", "Message" : '.mysqli_error($koneksi).'}';
		}
	}
?>