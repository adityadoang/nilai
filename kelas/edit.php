<!DOCTYPE html>
<!--aditya x ipa 4-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Anggota</title>
</head>
<body>
    <h1>Modul Edit Anggota</h1>
<?php
$id=$_GET['id'];
include "../config.php";
$sql="SELECT * FROM siswa WHERE id='$id'";
$query=mysqli_query($config,$sql);
$r=mysqli_fetch_assoc($query);
?>
    <form action="save.php">
        <div>
            <label for="kelas">kelas</label>
            <input type="text" name="kelas" required autofocus>
        </div>
        <div>
            <label for="">kapasitas</label>
            <input type="number" name="kapasitas" >
        </div>
        <div>
            <label for="">terisi</label>
            <input type="number" name="terisi" required autofocus>
        </div>
        <div>
            <input type="reset">
            <button type="submit" name="simpan">simpan</button>
        </div>
    </form>
</body>
</html>