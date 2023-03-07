<div class="container">
    <?php 
        $result = $connect->query("SELECT * FROM wisata");    
    ?>
   <div class="row">
        <?php 
         if($result->num_rows>0):
            foreach ($result as $r) :
        ?>
        <div class="col-lg-6 mt-4">
            <div class="card">
                <img src="image/<?=$r['gambar_wisata']?>"
                 class="card-img-top" style="height:390px;">
                 <h5 class="card-title p-4"><?=$r['nama_wisata']?></h5>
                 <p class="card-text p-4"><?=$r['deskripsi']?></p>
                 <a href="index.php?page=detail&id=<?=$r['id']?>" 
                 class="btn btn-success">Detail</a>
            </div>
        </div>
        <?php 
              endforeach;
            endif;
        ?>
    </div>
</div>