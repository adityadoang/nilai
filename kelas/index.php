<!DOCTYPE html>
<!--aditya x ipa 4-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Kelas</title>
</head>
<body>
    <a href="..">Home</a> | <a href="../siswa">siswa</a>
    <h1>Modul Kelas</h1>
    <a href="add.php">Tambah Data</a>
    <table border="1" cellspacing="0" cellpadding="5">
        <tr>
            <th>No</th>
            <th>Kelas</th>
            <th>kapasitas</th>
            <th>terisi</th>
            <th>Pilihan</th>
        </tr>
        <?php
        require_once("../config.php");
        $sql  ="SELECT * FROM kelas";
        $query=mysqli_query($config, $sql);
        if(mysqli_num_rows($query)==0){
            echo "<td colspan=7>Data Masih Kosong</td>";
        }else{
            $no=1;
            while($r=mysqli_fetch_assoc($query)){
                echo "<tr>";
                    echo "<td>$no</td>";
                    echo "<td>" . $r['kelas'] . "</td>";
                    echo "<td>" . $r['kapasitas'] . "</td>";
                    echo "<td>" . $r['terisi'] . "</td>";
                    echo '<td>
                    <a href="edit.php?id='.$r['id'].'">Edit</a> |
                    <a href="hapus.php?id='.$r['id'].'" onclick="return confirm(\'Yakin Akan Dihapus?\')">Hapus</a>
                    </td>';
                echo "</tr>";
                $no++;
            }
        }
        ?>
    </table>
</body>
</html>