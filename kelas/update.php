<?php
if(isset($_POST['simpan'])){
    require_once("../config.php");
    $kelas = $_POST['kelas'];
    $kapasitas = $_POST['kapasitas'];
    $terisi = $_POST['terisi'];
//aditya x ipa 4
    $sql = "UPDATE kelas SET kelas='$kelas','$kapasitas',terisi='$terisi'WHERE id=$id";
    $query= mysqli_query($config,$sql);
    if($query){
        header('location: index.php');
    }else{
        echo "Data gagal diupdate";
        // var_dump($sql);
    }
}