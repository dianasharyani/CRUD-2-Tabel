<html>
<head>
</head>
<body>
    <h1>Tambah</h1>
    <form action="proses_tambah.php" method="POST">
        <fieldset>
            <p>
                <label for="nama_guru">Nama Guru :</label>
                <input type="text" name="nama_guru" />
            </p>
            <p>
                <label for="alamat">Alamat :</label>
                <textarea name="alamat" row="5"></textarea>
            </p>
            <p>
                <label for="jenis_kelamin">Jenis Kelamin :</label>
                <input type="radio" name="jenis_kelamin" value="laki-laki"/>Laki-laki 
                <input type="radio" name="jenis_kelamin" value="perempuan"/>Perempuan
</select></br>
            </p>
            <p>
                <label for="nama_mapel">Nama Mapel :</label>
                <input type="text" name="nama_mapel" />
            </p>
            <p>
                <label for="ruangan">Ruangan :</label>
                <input type="number" name="ruangan" />
            </p>
            <p>
                <input type="submit" value="kirim" name="tambah" />
            </p>
        </fieldset>
</form>
</center>
</body>
</html>