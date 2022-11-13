<?php
include_once __DIR__ . '/../../model/mahasiswa.php';

$nim = $_REQUEST['nim'];
$nama = $_REQUEST['nama'];
$alamat = $_REQUEST['alamat'];
$prodi = $_REQUEST['prodi'];
$jenis_kelamin = $_REQUEST['jenis_kelamin'];

#1. Buat objek dari mahasiswa
$mhs = new mahasiswa();

#2. set semua fieldnya
$mhs->nim = $nim;
$mhs->nama = $nama;
$mhs->alamat = $alamat;
$mhs->prodi = $prodi;
$mhs->jenis_kelamin = $jenis_kelamin;

#3. Panggil fungsi insert
$mhs->insert();

header('Location: index.php');
die();