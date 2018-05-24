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
                                Tambah data Obat
                               
                            </h2>
                            
                        </div>
                        <div class="body">
                            
							
							 <form method="post" action="tambahobat.php">
							
							
								<div class="row clearfix">
                                <div class="col-sm-6">
								<h2 class="card-inside-title">Masukan data obat</h2>
								<div class="form-group">
								<!-- Penulisan untuk id_admin otomatis -->
								 <?php 
                                 // membaca id_admin terbesar
                                 $link = mysqli_connect('localhost', 'root', '', 'puskesmassragi');
                    
									$query = mysqli_query($link, "SELECT max(Kode_Obat) as maxKode FROM obat");
									
									$data  = mysqli_fetch_array($query);
									$id_obat = $data['maxKode']+1;

								
									
								 ?>
                                    <div class="form-group">
										<div class="form-line">
                                            <input type="text" class="form-control" placeholder="Kode Obat" name="kode_obat"   value="<?php echo $id_obat; ?>" readonly />
                                        </div>
                                    </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Nama Obat" name="nama" required />
                                        </div>
                                    </div>
                                
									<div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Dosis" name="dosis" />
                                        </div>
                                    </div>
								</div>
												
								<div class="col-sm-12">
								<button type="submit" name="upload" class="btn btn-round btn-success"><i class="fa fa-save fa-fw"></i>Simpan</button>
                                <a href="obat.php" class="btn btn-round btn-round btn-default"><i class="fa fa-undo fa-fw"></i>Batal</a>
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