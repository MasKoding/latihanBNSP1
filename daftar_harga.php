<div class="container">
    <div class="row mt-4">
        <div class="col-lg-8">
            <h4>Daftar Harga Tempat Wisata</h4>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Wisata</th>
                        <th scope="col">Gambar Wisata</th>
                        <th scope="col">Harga Tempat</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                         $result = $connect->query("SELECT * FROM wisata"); 
                         if($result->num_rows>0):
                            foreach ($result as $r) : 
                    ?>
                    <tr>
                        <th scope="row"><?=$r['id']?></th>
                        <td><?=$r['nama_wisata']?></td>
                        <td><img src="image/<?=$r['gambar_wisata']?>"
                        style="width:150px;height:150px;"></td>
                        <td><?=$r['harga_tempat']?></td>
                    </tr>
                   
                    <?php 
                        endforeach;
                     endif;
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>