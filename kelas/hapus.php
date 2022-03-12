<?php
//aditya x ipa 4
if(isset($_GET['id'])){
	include "../config.php";
	$id=$_GET['id'];
	$sql   = "DELETE FROM kelas WHERE id='$id'";
	$hapus = mysqli_query($config,$sql);
	if($hapus){
		header("Location: index.php");
	}else{
		echo 'Data Kelas GAGAL di Hapus';
		echo '<a href="index.php">Kembali</a>';
	}
}else{
	echo "Jangan Akses langsung kemari, cek name pada submit <a href='index.php'>Kembali</a>";
}
?>