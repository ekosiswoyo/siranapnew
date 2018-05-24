<?php
  $id = $_GET['id'];
  $link = mysqli_connect('localhost', 'root', '', 'puskesmassragi');
  $cari = mysqli_query($link, "SELECT * FROM obat WHERE Kode_Obat = $id");
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
                                Tambah data Obat
                            </h2>
                            
                        </div>
                        <div class="body">
                            
							 <form method="post" action="editobat.php" >
							<h2 class="card-inside-title">Masukan data Obat</h2>
								<div class="row clearfix">
                                <div class="col-sm-12">
								 
                                    <div class="form-group">
									<p>
                                        <b>Nama Obat</b>
                                        </p>
									
                                        <div class="form-line">
                                            <input type="text" readonly class="form-control" placeholder="Nama Obat" name="nama" value="<?php echo $dcari['Nama_Obat']; ?>" />
                                        </div>
                                    </div> <div class="form-group">
									<p>
                                        <b>Harga</b>
                                        </p>
									
                                        <div class="form-line">
                                            <input type="text" readonly class="form-control" placeholder="Dosis" name="dosis" value="<?php echo $dcari['Dosis']; ?>" />
                                        </div>
                                    </div>
                                    
									<a href="obat.php" class="btn btn-round btn-round btn-default"><i class="fa fa-undo fa-fw"></i>Kembali</a>
                            
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