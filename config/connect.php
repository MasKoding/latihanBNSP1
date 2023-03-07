<?php 
    // initialize variable for config database localhost
    $host = 'localhost';
    $user = 'root';
    $pass = 'root';
    $port=3306;
    $socket='/Applications/MAMP/tmp/mysql/mysql.sock';
    $dbName = 'latihan_bnsp1';
    // buat koneksi ke database dengan variabel connect 
    $connect = new mysqli($host,$user,$pass,$dbName,$port,$socket);
    // untuk menampilkan pesan error jika ada error
    if($connect->error){
        echo "Error connection: {$connect->error}";
    }
?>