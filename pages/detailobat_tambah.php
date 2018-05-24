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
                                Tambah Data Detail Obat
                               
                            </h2>
                            
                        </div>
                        <div class="body">
                            
							
							 <form method="post" action="tambahdetailobat.php" >
							
							
								<div class="row clearfix">
                                <div class="col-sm-6">
								<h2 class="card-inside-title">Masukan data detail obat</h2>
								<div class="form-group">
								<!-- Penulisan untuk id_admin otomatis -->
								 <?php 
                                 // membaca id_admin terbesar
                                 $link = mysqli_connect('localhost', 'root', '', 'puskesmassragi');
                    
									$query = mysqli_query($link, "SELECT max(Kode_Detailobat) as maxKode FROM detailobat");
									
									$data  = mysqli_fetch_array($query);
                                    $kd_detail = $data['maxKode']+1;
                                    

								
									
								 ?>
                                  <div class="form-group">
										<div class="form-line">
                                        <p><b>Kode Detail Obat</b></p>
                                            <input type="text" class="form-control" placeholder="Kode Detail Obat" name="kd_detail" value="<?php echo $kd_detail; ?>" readonly />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                             <p><b>Kode obat</b></p>
                                            <?php
                                                echo "<select class='form-control show-tick' name='kd_obat' id='kd_obat'>";
                                                $link = mysqli_connect('localhost', 'root', '', 'puskesmassragi');
                            
                                            $query = mysqli_query($link, "SELECT * FROM obat");
                                            while($row = mysqli_fetch_assoc($query)){
                                                echo "<option value='$row[Kode_Obat]'>$row[Kode_Obat]</option>";
                                            }
                                            echo "</select>";
                                            ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                             <p><b>No Periksa</b></p>
                                            <?php
                                                echo "<select class='form-control show-tick' name='no_periksa' id='no_periksa'>";
                                                $link = mysqli_connect('localhost', 'root', '', 'puskesmassragi');
                            
                                            $query = mysqli_query($link, "SELECT * FROM periksa");
                                            while($row = mysqli_fetch_assoc($query)){
                                                echo "<option value='$row[No_Periksa]'>$row[No_Periksa]</option>";
                                            }
                                            echo "</select>";
                                            ?>
                                        </div>
                                    </div>
                                    
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="datepicker form-control" name="jml" placeholder="Jumlah Obat">
                                        </div>
                                    </div>
                                    
												
								<div class="col-sm-12">
								<button type="submit" name="upload" class="btn btn-round btn-success"><i class="fa fa-save fa-fw"></i>Simpan</button>
                                <a href="detailobat .php" class="btn btn-round btn-round btn-default"><i class="fa fa-undo fa-fw"></i>Batal</a>
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