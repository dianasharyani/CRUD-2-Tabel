<?php
include("koneksi.php");
$kode = $_GET['id_guru'];

$sql= "DELETE FROM tb_mapel where kode_mapel=$kode";
$query = mysqli_query($koneksi, $sql);

$sql= "DELETE FROM tb_guru where id_guru=$kode";
$query = mysqli_query($koneksi, $sql);

if($query){
    header("location:data.php?status=sukses");
}else{
    die("akses dilarang");  
}
?>