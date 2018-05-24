<?php
  $id = $_GET['id'];
  $link = mysqli_connect('localhost', 'root', '', 'puskesmassragi');
  $cari = mysqli_query($link, "SELECT * FROM periksa WHERE No_Periksa = $id");
  $dcari = mysqli_fetch_array($cari);
?>
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
                                Tambah data Periksa
                            </h2>
                            
                        </div>
                        <div class="body">
                            
							 <form method="post" action="editperiksa.php" >
							<h2 class="card-inside-title">Masukan data periksa</h2>
								<div class="row clearfix">
                                <div class="col-sm-12">
								 
                                    <div class="form-group">
                                    <input type="hidden" name="no_periksa" value="<?php echo $id; ?>">
									<p>
                                        <b>No Periksa</b>
                                        </p>
                                        
                                        <div class="form-line">
                                            <input type="text" readonly class="form-control" placeholder="No Periksa" name="no_periksa" value="<?php echo $dcari['No_Periksa']; ?>" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                             <p><b>No Daftar</b></p>
                                            <?php
                                                echo "<select class='form-control show-tick' name='no_daftar' id='no_daftar'>";
                                                $link = mysqli_connect('localhost', 'root', '', 'puskesmassragi');
                            
                                            $query = mysqli_query($link, "SELECT * FROM rawatinap");
                                            while($row = mysqli_fetch_assoc($query)){
                                                echo "<option value='$row[No_Daftar]'>$row[No_Daftar]</option>";
                                            }
                                            echo "</select>";
                                            ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
									<p>
                                        <b>Tanggal Periksa</b>
                                        </p>
									
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Tanggal Periksa" name="tgl_periksa" value="<?php echo $dcari['Tanggal_Periksa']; ?>" />
                                        </div>
                                    </div>
                                    <div class="form-group">
									<p>
                                        <b>Jam Periksa</b>
                                        </p>
									
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Jam Periksa" name="jam_periksa" value="<?php echo $dcari['Jam_Periksa']; ?>" />
                                        </div>
                                    </div>
                                    <div class="form-group">
									<p>
                                        <b>Keluhan</b>
                                        </p>
									
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Keluhan" name="keluhan" value="<?php echo $dcari['Keluhan']; ?>" />
                                        </div>
                                    </div>
                                    <div class="form-group">
									<p>
                                        <b>Terapi</b>
                                        </p>
									
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Terapi" name="terapi" value="<?php echo $dcari['Terapi']; ?>" />
                                        </div>
                                    </div>
                                    <div class="form-group">
									<p>
                                        <b>Diagnosa</b>
                                        </p>
									
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Diagnosa" name="diagnosa" value="<?php echo $dcari['Diagnosa']; ?>" />
                                        </div>
                                    </div>
                                    <div class="form-group">
									<p>
                                        <b>Kesadaran</b>
                                        </p>
									
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Kesadaran" name="kesadaran" value="<?php echo $dcari['Kesadaran']; ?>" />
                                        </div>
                                    </div>
                                    <div class="form-group">
									<div class="form-group">
									<p>
                                        <b>Tinggi Badan</b>
                                        </p>
									
                                        <div class="form-line">
                                            <input type="text"  class="form-control" placeholder="Tinggi Badan" name="tinggi" value="<?php echo $dcari['Tinggi_Badan']; ?>" />
                                        </div>
                                    </div>
                                    <div class="form-group">
									<p>
                                        <b>Berat Badan</b>
                                        </p>
									
                                        <div class="form-line">
                                            <input type="text"  class="form-control" placeholder="Berat Badan" name="berat" value="<?php echo $dcari['Berat_Badan']; ?>" />
                                        </div>
                                    </div>
                                    <div class="form-group">
									<p>
                                        <b>Tekanan Darah</b>
                                        </p>
									
                                        <div class="form-line">
                                            <input type="text"  class="form-control" placeholder="Tekanan Darah" name="tekanan" value="<?php echo $dcari['Tekanan_Darah']; ?>" />
                                        </div>
                                    </div>
                                    <div class="form-group">
									<p>
                                        <b>Tindakan</b>
                                        </p>
									
                                        <div class="form-line">
                                            <input type="text"  class="form-control" placeholder="Tindakan" name="tindakan" value="<?php echo $dcari['Tindakan']; ?>" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                             <p><b>Kode Penyakit</b></p>
                                            <?php
                                                echo "<select class='form-control show-tick' name='kd_penyakit' id='kd_penyakit'>";
                                                $link = mysqli_connect('localhost', 'root', '', 'puskesmassragi');
                            
                                            $query = mysqli_query($link, "SELECT * FROM penyakit");
                                            while($row = mysqli_fetch_assoc($query)){
                                                echo "<option value='$row[Kode_Penyakit]'>$row[Kode_Penyakit]</option>";
                                            }
                                            echo "</select>";
                                            ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                             <p><b>Kode Obat</b></p>
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
                                    
                                    <button type="submit" name="upload" class="btn btn-round btn-success"><i class="fa fa-save fa-fw"></i>Simpan</button>
									<a href="rawatinap.php" class="btn btn-round btn-round btn-default"><i class="fa fa-undo fa-fw"></i>Batal</a>
                            
                                </div>
								
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