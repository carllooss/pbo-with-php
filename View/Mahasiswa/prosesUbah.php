<?php
include_once __DIR__ . '/../../model/mahasiswa.php';    
$nim = $_REQUEST['nim'];
$mhs = mahasiswa::getByPrimaryKey($nim);

if ($mhs === null) {
    echo "<h2>Data Mahasiswa Tidak Di Temukan</h2>";
    echo "<a href='index.php'>Klik Link Ini Untuk Kembali</a>";
    die();
} else {
    #function untuk proses hapus
    $nama = $_REQUEST['nama'];
    $alamat = $_REQUEST['alamat'];
    $prodi = $_REQUEST['prodi'];
    $jenis_kelamin = $_REQUEST['jenis_kelamin'];

    #2. set semua fieldnya
    $mhs->nama = $nama;
    $mhs->alamat = $alamat;
    $mhs->prodi = $prodi;
    $mhs->jenis_kelamin = $jenis_kelamin;

    #3. Panggil fungsi update
    $mhs->update();
    
    #redirect ke halaman index
    header('Location: index.php');
}
