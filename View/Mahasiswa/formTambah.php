<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form Tambah Mahasiswa</title>
</head>
<body>
    <h2>Tambah Mahasiswa</h2>
    <form method="POST" action="prosesTambah.php">

    <p>Nim <br> <input type="text" name="nim"></p>
    <p>Nama <br> <input type="text" name="nama"></p>
    <p>Prodi <br> 
    <select name="prodi" id="">
        <option value="Informatika">Informatika</option>
        <option value="Informatika">Teknik Sipil</option>
        <option value="Informatika">Manajemen</option>
        <option value="Informatika">Musik Gereja</option>
        <option value="Informatika">Informtika</option>
    </select>
    </p>
    <p>Alamat <br> <input type="text" name="alamat"></p>
    <p>Jenis Kelamin <br> 
        <input type="radio" name="jenis_kelamin" value="L">Laki-Laki
        <input type="radio" name="jenis_kelamin" value= "P">Perempuan
    </p>

    <button type="submit">Simpan</button>
    </form>
</body>
</html>