<?php
  $id = $_GET['id'];
  $link = mysqli_connect('localhost', 'root', '', 'puskesmassragi');
  $cari = mysqli_query($link, "select * from obat  where Kode_Obat ='$id'");
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
                                Edit Data Obat
                               
                            </h2>
                            
                        </div>
                        <div class="body">
                            	
							 <form method="post" action="editobat.php" >
							
								<div class="row clearfix">
                                <div class="col-sm-6">
								<h2 class="card-inside-title">Masukan data obat</h2>
                                    <div class="form-group">
									<input type="hidden" name="kd_obat" value="<?php echo $id; ?>">
                                        <div class="form-line">
										 <p>
                                        <b>Nama Obat</b>
										</p>
                                            <input type="text" class="form-control" placeholder="Nama Obat" name="nama" value="<?php echo $dcari['Nama_Obat']; ?>"/>
                                        </div>
                                    </div>
                                   
									<div class="form-group">
                                        <div class="form-line">
										<p>
                                        <b>Dosis</b>
                                        </p>
                                            <input type="text" class="form-control" placeholder="Dosis" name="dosis" value="<?php echo $dcari['Dosis']; ?>" />
                                        </div>
                                    </div>
									
								</div>
								
                                
								
							</div>
							<button type="submit" name="upload" class="btn btn-round btn-success"><i class="fa fa-save fa-fw"></i>Simpan</button>
                                <a href="obat.php" class="btn btn-round btn-round btn-default"><i class="fa fa-undo fa-fw"></i>Batal</a>
                            
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