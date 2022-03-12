<!DOCTYPE html>
<html lang="en">
    <!--aditya x ipa 4-->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Kelas</title>
</head>
<body>
    <h1>Tambah Data Kelas</h1>
<div class="row">
        <form action="save.php" method="post">
            <div class="form-group">
                <label for="kelas">kelas</label>
                <input type="text" class="form-control" name="kelas" autofocus required>
            </div>
            <div class="form-group">
                <label for="kapasitas">Kapasitas</label>
                <input type="number" class="form-control" name="kapasitas" autofocus required>
            </div>
            <div class="form-group">
                <label for="terisi">terisi</label>
                <input type="number" class="form-control" name="terisi" autofocus required>
            </div>
            <div class="form-group">
                <input type="reset" class="btn btn-md btn-warning">
                <input type="submit" value="Save" nama="save" class="btn btn-md btn-primary">
            </div>
        </form>
</div>
</body>

</html>


