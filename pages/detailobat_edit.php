<?php
  $id = $_GET['id'];
  $link = mysqli_connect('localhost', 'root', '', 'puskesmassragi');
  $cari = mysqli_query($link, "SELECT * FROM detailobat WHERE Kode_Detailobat = $id");
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
                                Tambah data Detail Obat
                            </h2>
                            
                        </div>
                        <div class="body">
                            
							 <form method="post" action="editdetailobat.php" >
							<h2 class="card-inside-title">Masukan data detail obat</h2>
								<div class="row clearfix">
                                <div class="col-sm-12">
								 
                                <div class="form-group">
                                <input type="hidden" name="kd_detail" value="<?php echo $id; ?>">
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
                                    <div class="form-group">
									<p>
                                        <b>Jumlah Obat</b>
                                        </p>
									
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Jumlah Obat" name="jml" value="<?php echo $dcari['Jumlah_Obat']; ?>" />
                                        </div>
                                    </div>
                                    
                                    <button type="submit" name="upload" class="btn btn-round btn-success"><i class="fa fa-save fa-fw"></i>Simpan</button>
							
									<a href="detailobat.php" class="btn btn-round btn-round btn-default"><i class="fa fa-undo fa-fw"></i>Kembali</a>
                            
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