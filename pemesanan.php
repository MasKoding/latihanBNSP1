<div class="container">
    <div class="row mt-4 d-flex justify-content-center">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Form Pemesanan</h4>
                    <!--  ambil dari bootstrap forms layout horizontal -->
                    <form action="action_submit.php" method="post">
                      <!-- form nama  -->
                    <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Nama Lengkap</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nama_lengkap" 
                                id="nama_lengkap" required="true">
                            </div>
                        </div>
                        <!-- form nik -->
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Nomor Identitas</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nik" id="nik"
                                 required="true">
                            </div>
                        </div>
                        <!-- form no.HP -->
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">No.Hp</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="no_hp" id="no_hp"
                                  required="true"
                                >
                            </div>
                        </div>
                        <!-- form tempat wisata -->
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Tempat Wisata</label>
                            <div class="col-sm-10">
                                <select class="form-select" name="tempat_wisata" id="tempat_wisata"
                                required="true">
                                    <option value="-" selected>Pilih</option>
                                    <?php 
                                         $result = $connect->query("SELECT * FROM wisata"); 
                                         foreach ($result as $r) :
                                            ?>
                                    <option value="<?=$r['nama_wisata']?>"><?=$r['nama_wisata']?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <!-- form tanggal kunjungan -->
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Tanggal Kunjungan</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" 
                                name="tgl_kunjungan" id="datepicker" required="true">
                            </div>
                        </div>
                        <!-- form jumlah pengunjung -->
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Jumlah Pengunjung</label>
                            <div class="col-sm-10">
                            <select class="form-select" name="jml_pengunjung"
                             id="jml_pengunjung" required="true">
                                    <option value="-" selected>Pilih</option>
                                      <?php for($i=1;$i<=10;$i++):  ?>
                                         <option value="<?=$i?>"><?=$i?> orang</option>
                                        <?php endfor; ?>
                                </select>
                            </div>
                        </div>
                       <!-- form pengunjung anak -->
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">
                                Pengunjung Anak-Anak <br> <p style="font-size: 12px;">Usia di bawah 12 tahun</p>
                            </label>
                            <div class="col-sm-10">
                            <select class="form-select" name="pengunjung_anak"
                             id="pengunjung_anak" required="true">
                                    <option value="-" selected>Pilih</option>
                                      <?php for($i=1;$i<=10;$i++):  ?>
                                         <option value="<?=$i?>"><?=$i?> orang</option>
                                        <?php endfor; ?>
                                </select>
                            </div>
                        </div>
                        <!-- form total bayar -->
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Total Bayar</label>
                            <div class="col-sm-10">
                                <label id="total_bayar">Rp. 000,000</label>
                                <input type="hidden" name="total" id="total">
                                <input type="hidden" name="potongan_harga" 
                                id="potongan_harga">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-sm-12">
                                <div class="form-check">
                                    <input class="form-check-input ms-2" type="checkbox" id="acc"
                                    required="true">
                                    <label class="form-check-label ms-4" for="gridCheck1">
                                        Saya dan / atau rombongan menyetujui, memahami dan membaca
                                        persyaratan yang berlaku
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-4">
                                <button type="button" class="btn btn-dark" id="hitung_total">
                                    Hitung Total Bayar</button>
                            </div>
                            <div class="col-md-4">
                                <button type="submit" name="submit" class="btn btn-dark" id="submit">Submit</button>
                            </div>
                            <div class="col-md-4">
                                <button type="button" class="btn btn-dark" id="cancel">Cancel</button>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


