<?php
  $id = $_GET['id'];
  $link = mysqli_connect('localhost', 'root', '', 'puskesmassragi');
  $cari = mysqli_query($link, "select * from penyakit  where Kode_Penyakit ='$id'");
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
                                Edit Data Penyakit
                               
                            </h2>
                            
                        </div>
                        <div class="body">
                            	
							 <form method="post" action="editpenyakit.php" >
							
								<div class="row clearfix">
                                <div class="col-sm-6">
								<h2 class="card-inside-title">Masukan data penyakit</h2>
                                    <div class="form-group">
									<input type="hidden" name="kode_penyakit" value="<?php echo $id; ?>">
                                        <div class="form-line">
										 <p>
                                        <b>Nama penyakit</b>
										</p>
                                            <input type="text" class="form-control" placeholder="Nama penyakit" name="nama" value="<?php echo $dcari['Nama_Penyakit']; ?>"/>
                                        </div>
                                    </div>
                                   
									
								</div>
								
                                
								
							</div>
							<button type="submit" name="upload" class="btn btn-round btn-success"><i class="fa fa-save fa-fw"></i>Simpan</button>
                                <a href="penyakit.php" class="btn btn-round btn-round btn-default"><i class="fa fa-undo fa-fw"></i>Batal</a>
                            
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