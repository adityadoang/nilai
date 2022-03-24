<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Siswa</title>
    <link rel="shortcut icon" href="../gambar/PESAT.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <h1>
            <img src="../gambar/PESAT.png" alt="">    
            Edit Data Siswa
            </h1>
            <hr>
            <a href=""></a>
            </div>
        </div>
    </div>
<?php
        require_once("../config.php") ;
        $id =$_GET['id'];
        $sql  ="SELECT * FROM siswa WHERE id='$id'";
        $query=mysqli_query($config, $sql);
        while($r=mysqli_fetch_assoc($query))
?>
<div class="row">
        <form action="update.php" method="post">
            <div class="form-group">
                <label for="nis" class="form-label">NIS</label>
                <input type="number" class="form-control" value="<? echo $r['nis']; ?>" name="nis" autofocus required>
            </div>
            <div class="form-group">
                <label for="nama" class="form-label">Nama Siswa</label>
                <input type="text" class="form-control" name="nama" autofocus required>
            </div>
            <div class="form-group">
                <label for="tempat_lahir" class="form-label">Tempat lahir</label>
                <input type="text" class="form-control" name="tempat_lahir" autofocus required>
            </div>
            <div class="form-group">
                <label for="tanggal_lahir" class="form-label">Tanggal lahir</label>
                <input type="date" class="form-control" name="tanggal_lahir" autofocus required>
            </div>
            <div class="form-group">
                <label for="kelas_id" class="form-label">kelas</label>
                <select class="form-control" name="kelas_id" required>
                    <option value="">Pilih Kelas</option>
                    <?php
        $sql2  ="SELECT * FROM siswa WHERE id='$id'";
        $query2=mysqli_query($config, $sql2);
        while($row=mysqli_fetch_assoc($query2)){
           echo "<option value='" . $row['id'] . "'>" . $row['kelas'] . "</option>";
        }
                    ?>
                </select>

            </div>
            <div>
                <input type="hidden" name='id' value='<?= $r['id'];?>'>
                <input type="reset" class="btn btn-md btn-warning">
                <button type="submit" name="update" class="btn btn-md btn-primary">update</button>
            </div>
        </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>


