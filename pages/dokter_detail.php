<?php
  $id = $_GET['id'];
  $link = mysqli_connect('localhost', 'root', '', 'puskesmassragi');
  $cari = mysqli_query($link, "SELECT * FROM dokter WHERE Id_Dokter = $id");
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
                                Tambah data Dokter
                            </h2>
                            
                        </div>
                        <div class="body">
                            
							 <form method="post" action="editdokter.php" >
							<h2 class="card-inside-title">Masukan data dokter</h2>
								<div class="row clearfix">
                                <div class="col-sm-12">
								 
                                    <div class="form-group">
									<p>
                                        <b>Nama Dokter</b>
                                        </p>
									
                                        <div class="form-line">
                                            <input type="text" readonly class="form-control" placeholder="Nama Dokter" name="nama" value="<?php echo $dcari['Nama_Dokter']; ?>" />
                                        </div>
                                    </div>
                                    <div class="form-group">
									<p>
                                        <b>Jenis Kelamin</b>
                                        </p>
									
                                        <div class="form-line">
                                            <input type="text" readonly class="form-control" placeholder="Jenis Kelamin" name="gender" value="<?php echo $dcari['Jenis_Kelamin']; ?>" />
                                        </div>
                                    </div>
                                    <div class="form-group">
									<p>
                                        <b>Tanggal Lahir</b>
                                        </p>
									
                                        <div class="form-line">
                                            <input type="text" readonly class="form-control" placeholder="Tanggal Lahir" name="tgl" value="<?php echo $dcari['Tanggal_Lahir']; ?>" />
                                        </div>
                                    </div>
                                    <div class="form-group">
									<p>
                                        <b>Alamat</b>
                                        </p>
									
                                        <div class="form-line">
                                            <input type="text" readonly class="form-control" placeholder="Alamat" name="alamat" value="<?php echo $dcari['Alamat']; ?>" />
                                        </div>
                                    </div>
                                    <div class="form-group">
									<p>
                                        <b>Agama</b>
                                        </p>
									
                                        <div class="form-line">
                                            <input type="text" readonly class="form-control" placeholder="Agama" name="agama" value="<?php echo $dcari['Agama']; ?>" />
                                        </div>
                                    </div>
                                    <div class="form-group">
									<p>
                                        <b>No Telepon</b>
                                        </p>
									
                                        <div class="form-line">
                                            <input type="text" readonly class="form-control" placeholder="Telp" name="telp" value="<?php echo $dcari['No_Telpon']; ?>" />
                                        </div>
                                    </div>
                                    
									<a href="dokter.php" class="btn btn-round btn-round btn-default"><i class="fa fa-undo fa-fw"></i>Kembali</a>
                            
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