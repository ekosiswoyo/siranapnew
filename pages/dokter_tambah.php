<?php
    include "header.php";
    ?>
<section class="content">
        <div class="container-fluid">
           
            <!-- Input -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Tambah data Dokter
                               
                            </h2>
                            
                        </div>
                        <div class="body">
                            
							
							 <form method="post" action="tambahdokter.php" >
							
							
								<div class="row clearfix">
                                <div class="col-sm-6">
								<h2 class="card-inside-title">Masukan data dokter</h2>
								<div class="form-group">
								<!-- Penulisan untuk id_admin otomatis -->
								 <?php 
                                 // membaca id_admin terbesar
                                 $link = mysqli_connect('localhost', 'root', '', 'puskesmassragi');
                    
									$query = mysqli_query($link, "SELECT max(Id_Dokter) as maxKode FROM dokter");
									
									$data  = mysqli_fetch_array($query);
									$id_dokter = $data['maxKode']+1;

								
									
								 ?>
                                    <div class="form-group">
										<div class="form-line">
                                            <input type="text" class="form-control" placeholder="Id Dokter" name="id_dokter"   value="<?php echo $id_dokter; ?>" readonly />
                                        </div>
                                    </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Nama Dokter" name="nama" required />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    <p>
                                        <b>Jenis Kelamin</b><br>
                                    <input type="radio" name="gender" value="Laki-laki" id="male" class="with-gap">
                                    <label for="male">Laki-laki</label>

                                    <input type="radio" name="gender" id="female" value="Perempuan" class="with-gap">
                                    <label for="female" class="m-l-20">Perempuan</label>
                                </div>
                                <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="datepicker form-control" name="tgl" placeholder="Tanggal Lahir">
                                        </div>
                                </div>
                                <div class="form-group">
                                        <div class="form-line">
                                            <textarea rows="4" class="form-control no-resize" name="alamat" placeholder="Alamat"></textarea>
                                        </div>
                                </div>
                                <div class="form-group">
                                    <p>
                                        <b>Agama</b><br>
                                    <input type="radio" name="agama" id="islam" value="islam" class="with-gap">
                                    <label for="islam">Islam</label>

                                    <input type="radio" name="agama" id="kristen" value="kristen" class="with-gap">
                                    <label for="kristen" class="m-l-20">Kristen</label>
                                    <input type="radio" name="agama" id="katholik" value="katholik" class="with-gap">
                                    <label for="katholik">Katholik</label>

                                    <input type="radio" name="agama" id="budha" value="budha" class="with-gap">
                                    <label for="budha" class="m-l-20">Budha</label>
                                    <input type="radio" name="agama" id="hindu" value="hindu" class="with-gap">
                                    <label for="hindu">Hindu</label>
                                </div>
                                <div class="input-group">
                                            
                                            <div class="form-line">
                                                <input type="text" name="telp" class="form-control mobile-phone-number" placeholder="Ex: +00 (000) 000-00-00">
                                            </div>
                                      </div>
								</div>
												
								<div class="col-sm-12">
								<button type="submit" name="upload" class="btn btn-round btn-success"><i class="fa fa-save fa-fw"></i>Simpan</button>
                                <a href="dokter .php" class="btn btn-round btn-round btn-default"><i class="fa fa-undo fa-fw"></i>Batal</a>
                                </div>
                                </div>
                            
							
							</form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Input -->
         
</body>
        </div>
    </section>
    <?php
    include "footer.php";
    ?>