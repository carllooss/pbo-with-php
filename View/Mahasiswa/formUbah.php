<?php
include_once __DIR__ . '/../../model/mahasiswa.php';
$nim = $_REQUEST['nim'];
$mhs = mahasiswa::getByPrimaryKey($nim);

if($mhs === null) {
    echo "<h2>Data Mahasiswa Tidak Di Temukan</h2>";
    echo "<a href='index.php'>Klik Link Ini Untuk Kembali</a>";
    die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ubah Mahasiswa</title>
</head>
<body>
<h2>Ubah Mahasiswa</h2>
    <form method="POST" action="prosesUbah.php">

    <p>Nim <br> <input readonly required value="<?= $mhs->nim ?>" type="text" name="nim"></p>
    <p>Nama <br> <input required value="<?= $mhs->nama ?>" type="text" name="nama"></p>
    <p>Prodi <br> 
    <select name="prodi" id="">
        <option value="Informatika">Informatika</option>
        <option value="Teknik Sipil">Teknik Sipil</option>
        <option value="Manajemen">Manajemen</option>
        <option value="Musik Gereja">Musik Gereja</option>
    </select>
    </p>
    <p>Alamat <br> <input required value="<?= $mhs->alamat ?>" type="text" name="alamat"></p>
    <p>Jenis Kelamin <br> 
        <input required <?= "$mhs->jenis_kelamin == 'L'?'checked':"?> type="radio" name="jenis_kelamin" value="L">Laki-Laki
        <input required <?= "$mhs->jenis_kelamin == 'P'?'checked':"?> type="radio" name="jenis_kelamin" value= "P">Perempuan
    </p>

    <button type="submit">Simpan</button>
    </form>
</body>
</html>