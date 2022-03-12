<?php
if(isset($_POST['save'])){
    require_once("../config.php");
    $kelas = $_POST['kelas'];
    $kapasitas = $_POST['kapasitas'];
    $terisi = $_POST['terisi'];
//aditya x ipa 4
    $sql = "INSERT INTO kelas VALUES(NULL,'$kelas','$kapasitas','$terisi'";
    $query= mysqli_query($config,$sql);
    if($query){
        header('location: index.php');
       // header('var_dump($sql);');
    }else{
        echo "Data gagal disimpan";
    }
}