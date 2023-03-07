<?php 
//  untuk keluar dari direktori gunakan simbol ..
    require_once '../config/connect.php';
//   $_POST untuk mengambil data yang dikirim dalam object data
    $data = $_POST;
    $nama_wisata = $data['tempat_wisata'];
//  untuk mengambil data berdasarkan kondisi nama wisata
    $result = $connect->query("SELECT * FROM wisata WHERE 
    nama_wisata='$nama_wisata'");
//  ambil single data yang terpilih
    $row = mysqli_fetch_assoc($result);

// kalkulasi total biaya
    $harga = $row['harga_tempat'];
    $jml_pengunjung = $data['jml_pengunjung'];
    $pengunjung_anak = $data['pengunjung_anak'];
   
    //definisikan $jml_pengunjung menjadi nilai 0
    if($jml_pengunjung =='-'){
        $jml_pengunjung = 0;
    }
   
    if($pengunjung_anak =='-'){
        $pengunjung_anak = 0;
    }
    
    if($jml_pengunjung == 0){
        $data['message'] ='data jumlah pengunjung & 
        pengunjung anak wajib di isi';
        echo json_encode($data);
    }else{

        if($jml_pengunjung == $pengunjung_anak){
            $data['message'] ='Maaf anda tidak boleh masuk';
            echo json_encode($data);
        }
        elseif($jml_pengunjung<$pengunjung_anak){
            $data['message'] ='Maaf jumlah pengunjung tidak sesuai';
            echo json_encode($data);
        }
        else{
            $data['potongan_harga'] = $pengunjung_anak * $harga;
            $total = ($jml_pengunjung * $harga) - $data['potongan_harga'];
            // membuat format koma (,) dengan decimal 2 pada uang
            $data['total_format'] = 'Rp.'.number_format($total,2,',');
            $data['total'] = (int) $total;

            //   convert data ke dalam json
            echo json_encode($data);
        }
    }




?>