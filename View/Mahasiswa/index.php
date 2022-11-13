<?php
include_once __DIR__ . '/../../model/mahasiswa.php';
$listMahasiswa = mahasiswa::getAll();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>

<body>
    <h3>List Data Mahasiswa</h3>
    <a href="formTambah.php">Tambah Mahasiswa</a>
    <table width='100%' border='1'>
        <thead>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Prodi</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomer = 1;
            foreach ($listMahasiswa as $mhs) {
            ?>
                <tr>
                    <td><?= $nomer++ ?></td>
                    <td><?= $mhs->nim ?></td>
                    <td><?= $mhs->nama ?></td>
                    <td><?= $mhs->prodi ?></td>
                    <td><?= $mhs->jenis_kelamin ?></td>
                    <td><?= $mhs->alamat ?></td>
                    <td>
                        <a href="formUbah.php?nim=<?= $mhs->nim ?>">Edit</a> |
                        <a href="konfirmasiHapus.php?nim=<?= $mhs->nim ?>">Delete</a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</body>

</html>
