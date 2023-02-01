<?php
include("koneksi.php");
if(!isset($_GET['id_guru'])){
    header("location:data.php?");
}
$kode=$_GET['id_guru'];
$sql=("SELECT * FROM tb_guru INNER JOIN tb_mapel ON tb_guru.kode_mapel = tb_mapel.kode_mapel  where tb_guru.id_guru='$kode'");
$query = mysqli_query($koneksi,$sql);
$data = mysqli_fetch_assoc($query);

?>
<html>
    <head>
</head>
<body>
    <h1>Form Edit</h1>
    <a href="data.php"><input type="button" value="kembali"></a>
    <form action="proses_edit.php" method="POST">
    <fieldset>
        <input type="hidden" name="id_guru" value="<?php echo $data['id_guru']?>" />
            <p>
                <label for="nama_guru">Nama Guru :</label>
                <input type="text" name="nama_guru"  value="<?php echo $data['nama_guru']?>" />
            </p>

            <p>
                <label for="alamat">Alamat :</label>
                <input type="text" name="alamat"  value="<?php echo $data['alamat']?>" />
            </p>
            <p>
                <label for="jenis_kelamin">Jenis Kelamin :</label>
                <input type="radio" name="jenis_kelamin" value="laki-laki" value="<?php echo $data['jenis_kelamin']?>"/>Laki-laki 
                <input type="radio" name="jenis_kelamin" value="perempuan" value="<?php echo $data['jenis_kelamin']?>"/>Perempuan 
</select></br>
            </p>
            <p>
                <label for="nama_mapel">Nama Mapel :</label>
                <input type="text" name="nama_mapel"  value="<?php echo $data['nama_mapel']?>" />
            </p>
            <p>
                <label for="ruangan">Ruangan :</label>
                <input type="text" name="ruangan"  value="<?php echo $data['ruangan']?>" />
            </p>
            <p>
                <input type="submit" value="kirim" name="edit" />
            </p>
        </fieldset>
</form>
</body>
</html>