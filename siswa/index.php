<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Siswac Pesat</title>
    <link rel="shortcut icon" href="../gambar/PESAT.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <!--aditya-->
    <h1>
     <img src="../gambar/PESAT.png" height="100 px" alt="">   
    DAFTAR SISWA PESAT</h1>
    <a href="add.php">Tambah Data</a>
    <table class="table table-hover table-striped table-bordered">
        <thead class="table-dark">
            <tr>
                <th>NO</th>
                <th>NIS</th>
                <th>Nama</th>
                <th>Tempat lahir</th>
                <th>Tanggal lahir</th>
                <th>Kelas</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php
        require_once("../config.php") ;
        $sql  ="SELECT * FROM siswa JOIN kelas ON siswa.kelas_id= kelas.id";
        $query=mysqli_query($config, $sql);
        if(mysqli_num_rows($query)==0){
            echo "<td colspan=7>Data Masih Kosong</td>";
        }else{
            $no=1;
            while($r=mysqli_fetch_assoc($query)){
                echo "<tr>";
                    echo "<td>$no</td>";
                    echo "<td>" . $r['nis'] . "</td>";
                    echo "<td>" . $r['nama'] . "</td>";
                    echo "<td>" . $r['tempat_lahir'] . "</td>";
                    echo "<td>" . $r['tanggal_lahir'] . "</td>";
                    echo "<td>" . $r['kelas'] . "</td>";
                    echo '<td>
                    <a href="edit.php?id='.$r['id'].'"class="btn btn-md btn-primary">Edit</a> 
                    <a href="hapus.php?id='.$r['id'].'" onclick="return confirm(\'Yakin Akan Dihapus?\')"class="btn btn-md btn-danger">Hapus</a>
                    </td>';
                echo "</tr>";
                $no++;
            }
        }
        ?>
            <tr>

            </tr>
        </tbody>
        <tfoot class="table-dark">
            <th>NO</th>
            <th>NIS</th>
            <th>Nama</th>
            <th>Tempat lahir</th>
            <th>Tanggal lahir</th>
            <th>Kelas</th>
            <th>Aksi</th>
        </tfoot>
    </table>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
</body>
</html>