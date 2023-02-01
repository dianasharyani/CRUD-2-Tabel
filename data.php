<?php
include("koneksi.php");
?>

<html>
<head>
</head>
<body>
    <h1>Data Mapel</h1>
    <h4> <a href=index.php>Ke Halaman Utama</a></h4>
    <table border="1">
        <tr>
            <th>Id Guru</th>
            <th>Nama Guru</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Nama Mapel</th>
            <th>Ruangan</th>
            <th>aksi</th>
        </tr>

        <?php
        include("koneksi.php");
        $query = mysqli_query($koneksi, "SELECT * FROM tb_guru INNER JOIN
        tb_mapel ON tb_guru.kode_mapel = tb_mapel.kode_mapel");
         while($data=mysqli_fetch_array($query)){
    echo "<tr>";
            echo "<td>".$data['id_guru']."</td>";
            echo "<td>".$data['nama_guru']."</td>";
            echo "<td>".$data['alamat']."</td>";
            echo "<td>".$data['jenis_kelamin']."</td>";
            echo "<td>".$data['nama_mapel']."</td>";
            echo "<td>".$data['ruangan']."</td>";
            echo "<td>";
            echo "<a href='edit.php?id_guru=".$data['id_guru']."'>Edit</a> |";
            echo "<a href='hapus.php?id_guru=".$data['id_guru']."'>Hapus</a>";
            Echo "</td>";
    echo "</tr>";  

    }

    ?>
    </table>
</body>
</html>