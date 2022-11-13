<?php
class koneksi
{
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $port = "3306";
    private $dbName = "crudPBO929";
    public $koneksi;

    public function __construct()
    {
        $this->koneksi = mysqli_connect(
            $this->host,
            $this->username,
            $this->password,
            $this->dbName,
            $this->port
        );
    }
}