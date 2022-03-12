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
            Tambah Data Siswa
            </h1>
            <hr>
            <a href=""></a>
            </div>
        </div>
    </div>

<div class="row">
        <form action="save.php" method="post">
            <div class="form-group">
                <label for="nis" class="form-label">NIS</label>
                <input type="number" class="form-control" name="nis" autofocus required>
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
        require_once("../config.php") ;
        $sql  ="SELECT * FROM siswa JOIN kelas ON siswa.kelas_id= kelas.id";
        $query=mysqli_query($config, $sql);
        while($r=mysqli_fetch_assoc($query)){
            echo "<option value='" . $r['id'] . "'>" . $r['kelas'] . "</option>";
        }
                    ?>
                </select>

            </div>
            <div>
                <input type="reset" class="btn btn-md btn-warning">
                <button type="submit" name="simpan" class="btn btn-md btn-primary">Simpan</button>
            </div>
        </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>


