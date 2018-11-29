<?php
	include '../../conf.php';
	include '../../conn.php';
	$judul = post('judul');
	$penulis = post('penulis');
	$konten = post('konten');
	
	$simpan = $koneksi->prepare("INSERT INTO artikel (`judul`,`penulis`,`konten`) VALUES ('".$judul."','".$penulis."','".$konten."')");
	$simpan->execute();
	header("location:../../index.php?p=blog");
?>