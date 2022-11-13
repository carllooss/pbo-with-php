<?php
include_once __DIR__ . "/../config/Koneksi.php";
class mahasiswa
{
    public $nim;
    public $nama;
    public $prodi;
    public $alamat;
    public $jenis_kelamin;

    public static function getAll(): array
    {
        $query = "select * from mahasiswa";
        $conn = new Koneksi();
        $mq = mysqli_query($conn->koneksi, $query);
        $result = [];
        while ($mhsDB = mysqli_fetch_object($mq)) {
            $mhs = new Mahasiswa();
            $mhs->nim = $mhsDB->nim;
            $mhs->nama = $mhsDB->nama;
            $mhs->prodi = $mhsDB->prodi;
            $mhs->alamat = $mhsDB->alamat;
            $mhs->jenis_kelamin = $mhsDB->jenis_kelamin;
            $result[] = $mhs;
        }
        return $result;
    }

    public static function getByPrimaryKey($nim): ?object
    {
        $query = "select * from mahasiswa where nim = '$nim'";
        $conn = new Koneksi();
        $mq = mysqli_query($conn->koneksi, $query);
        $result = null;
        while ($mhsDB = mysqli_fetch_object($mq)) {
            $mhs = new Mahasiswa();
            $mhs->nim = $mhsDB->nim;
            $mhs->nama = $mhsDB->nama;
            $mhs->prodi = $mhsDB->prodi;
            $mhs->alamat = $mhsDB->alamat;
            $mhs->jenis_kelamin = $mhsDB->jenis_kelamin;
            $result = $mhs;
        }
        return $result;
    }

    public function insert()
    {
        $query = "insert into mahasiswa values ("
            . "'$this->nim',"
            . "'$this->nama',"
            . "'$this->prodi',"
            . "'$this->alamat',"
            . "'$this->jenis_kelamin'"
            . ")";
        $conn = new Koneksi();
        return mysqli_query($conn->koneksi, $query);
    }

    public function delete()
    {
        $query = "delete from mahasiswa where nim = '$this->nim'";
        $conn = new Koneksi();
        return mysqli_query($conn->koneksi, $query);
    }

    public function update()
    {
        $query = "update mahasiswa set "
            . "nama = '$this->nama',"
            . "prodi = '$this->prodi',"
            . "alamat = '$this->alamat',"
            . "jenis_kelamin = '$this->jenis_kelamin' "
            . "where nim = '$this->nim'";
            //var_dump($query);
            //exit;
        $conn = new Koneksi();
        return mysqli_query($conn->koneksi, $query);
    }

}
