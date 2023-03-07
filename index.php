<?php 

  // mengambil parameter page
    $page = $_GET['page'];
   
    require_once 'header.php';
    require_once 'config/connect.php';
    
    switch ($page) {
        case 'home':
            // require_once untuk memanggil file php
            require_once 'home.php';
            break;
        case 'daftar_harga':
            // require_once untuk memanggil file php
            require_once 'daftar_harga.php';
            break;
        case 'pemesanan':
            // require_once untuk memanggil file php
            require_once 'pemesanan.php';
            break;   
        case 'detail':
            // require_once untuk memanggil file php
            require_once 'detail.php';
            break;   
        default:
        require_once '404.php';
        break;
    }

    require_once "footer.php";

?>