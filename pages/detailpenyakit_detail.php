<?php
  $id = $_GET['id'];
  $link = mysqli_connect('localhost', 'root', '', 'puskesmassragi');
  $cari = mysqli_query($link, "SELECT * FROM detailpenyakit WHERE Kode_Detailpenyakit = $id");
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
                                Tambah data Detail Penyakit
                            </h2>
                            
                        </div>
                        <div class="body">
                            
							 <form method="post" action="" >
							<h2 class="card-inside-title">Masukan data detail penyakit</h2>
								<div class="row clearfix">
                                <div class="col-sm-12">
								 
                                    <div class="form-group">
									<p>
                                        <b>Kode Penyakit</b>
                                        </p>
									
                                        <div class="form-line">
                                            <input type="text" readonly class="form-control" placeholder="Kode Penyakit" name="kd_penyakit" value="<?php echo $dcari['Kode_Penyakit']; ?>" />
                                        </div>
                                    </div>
                                    <div class="form-group">
									<p>
                                        <b>No Periksa</b>
                                        </p>
									
                                        <div class="form-line">
                                            <input type="text" readonly class="form-control" placeholder="No Periksa" name="no_periksa" value="<?php echo $dcari['No_Periksa']; ?>" />
                                        </div>
                                    </div>
                                    
                                    
									<a href="detailpenyakit.php" class="btn btn-round btn-round btn-default"><i class="fa fa-undo fa-fw"></i>Kembali</a>
                            
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