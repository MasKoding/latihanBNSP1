<?php 
        require_once 'config/connect.php';
        if (isset($_POST['submit'])) {
           $nama_lengkap = $_POST['nama_lengkap'];
           $nik = $_POST['nik'];
           $no_hp = $_POST['no_hp'];
           $tempat_wisata = $_POST['tempat_wisata'];
           /* convert string ke format date pakai
                date(format,strtotime(value));
           */
          // untuk convert string ke char menggunakan explode
           $date_string = explode('/',$_POST['tgl_kunjungan']);
           $format_date = $date_string[2].'-'.$date_string[1].'-'.$date_string[0];
           $tgl_kunjungan = $format_date;
           
           $jml_pengunjung = $_POST['jml_pengunjung'];
           $pengunjung_anak = $_POST['pengunjung_anak'];
           $total = $_POST['total'];
           $potongan_harga = $_POST['potongan_harga'];
           //query insert 
           $query = $connect->query("INSERT INTO pemesanan
            (nama_lengkap,nik,no_hp,tempat_wisata,tgl_kunjungan,
             jml_pengunjung,pengunjung_anak,potongan_harga,total_bayar)
             VALUES ('$nama_lengkap','$nik','$no_hp','$tempat_wisata',
             '$tgl_kunjungan','$jml_pengunjung','$pengunjung_anak',
             '$potongan_harga','$total')");
            if($query){
                echo "<script>
                    alert('Berhasil Submit');
                    window.location.href='index.php?page=home'
                </script>";
            }else{
                echo "<script>
                    alert('Gagal Submit');
                    </script>";
            }

        }

?>