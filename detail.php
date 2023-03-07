<?php 
//  untuk mengambil value id
        $id = $_GET['id'];
        $wisataById = $connect->query("SELECT * FROM wisata
        WHERE id='$id'");
        // untuk mengambil single data
        $row = mysqli_fetch_assoc($wisataById);
?>
<div class="container">
    <div class="row mt-4 d-flex justify-content-center">
        
        <div class="col-lg-8">
                <h3><?=$row['nama_wisata']?></h3>
                <img src="image/<?=$row['gambar_wisata']?>" 
                     class="img-thumbnail"
                >
        </div>
        <div class="col-lg-8">
             <p><?=$row['deskripsi']?></p>
        </div>
        <div class="col-lg-8">
             <?=$row['link_youtube']?>
        </div>

    </div>
</div>