<?php
  $id = $_GET['id'];
  $link = mysqli_connect('localhost', 'root', '', 'puskesmassragi');
  $cari = mysqli_query($link, "select * from dokter  where Id_Dokter ='$id'");
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
                                Edit Data Dokter
                               
                            </h2>
                            
                        </div>
                        <div class="body">
                            	
							 <form method="post" action="editdokter.php" >
							
								<div class="row clearfix">
                                <div class="col-sm-6">
								<h2 class="card-inside-title">Masukan data dokter</h2>
                                    <div class="form-group">
									<input type="hidden" name="id_dokter" value="<?php echo $id; ?>">
                                        <div class="form-line">
										 <p>
                                        <b>Nama Dokter</b>
										</p>
                                            <input type="text" class="form-control" placeholder="Nama Dokter" name="nama" value="<?php echo $dcari['Nama_Dokter']; ?>"/>
                                        </div>
                                    </div>
                                   
									<div class="form-group">
                                        <div class="form-line">
										<p>
                                        <b>Jenis Kelamin</b>
                                        </p>
                                            <input type="text" class="form-control" placeholder="Jenis Kelamin" name="gender" value="<?php echo $dcari['Jenis_Kelamin']; ?>" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
										<p>
                                        <b>Tanggal Lahir</b>
                                        </p>
                                            <input type="text" class="form-control" placeholder="Tanggal Lahir" name="tgl" value="<?php echo $dcari['Tanggal_Lahir']; ?>" />
                                        </div>
                                    </div>
									<div class="form-group">
                                        <div class="form-line">
										<p>
                                        <b>Alamat</b>
                                        </p>
                                            <input type="text" class="form-control" placeholder="Alamat" name="alamat" value="<?php echo $dcari['Alamat']; ?>" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
										<p>
                                        <b>Agama</b>
                                        </p>
                                            <input type="text" class="form-control" placeholder="Agama" name="agama" value="<?php echo $dcari['Agama']; ?>" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
										<p>
                                        <b>No Telepon</b>
                                        </p>
                                            <input type="text" class="form-control" placeholder="No Telepon" name="telp" value="<?php echo $dcari['No_Telpon']; ?>" />
                                        </div>
                                    </div>
								</div>
								
                                
								
							</div>
							<button type="submit" name="upload" class="btn btn-round btn-success"><i class="fa fa-save fa-fw"></i>Simpan</button>
                                <a href="dokter.php" class="btn btn-round btn-round btn-default"><i class="fa fa-undo fa-fw"></i>Batal</a>
                            
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