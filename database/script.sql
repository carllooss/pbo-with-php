create database crudPBO929;
use crudPBO929;

create table mahasiswa(
    nim varchar(10) not null primary key,
    nama varchar(100) not null,
    prodi enum('Informatika','Manajemen','Teknik Sipil','Musik Gereja') not null,
    alamat text not null,
    jenis_kelamin enum('L','P')
);

insert into mahasiswa values
('2142101929','Carlos','Informatika','Juwangen','L');