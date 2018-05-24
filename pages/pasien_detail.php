<?php
  $id = $_GET['id'];
  $link = mysqli_connect('localhost', 'root', '', 'puskesmassragi');
  $cari = mysqli_query($link, "SELECT * FROM pasien WHERE No_RM = $id");
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
                                Tambah data Pasien
                            </h2>
                            
                        </div>
                        <div class="body">
                            
							 <form method="post" action="editpasien.php" >
							<h2 class="card-inside-title">Masukan data Pasien</h2>
								<div class="row clearfix">
                                <div class="col-sm-12">
								 
                                    <div class="form-group">
									<p>
                                        <b>Jenis Pasien</b>
                                        </p>
									
                                        <div class="form-line">
                                            <input type="text" readonly class="form-control" placeholder="Jenis Pasien" name="jns" value="<?php echo $dcari['Jenis_Pasien']; ?>" />
                                        </div>
                                    </div> <div class="form-group">
									<div class="form-group">
									
                                        <div class="form-line">
										 <p>
                                        <b>Nama Pasien</b>
										</p>
                                            <input type="text" readonly class="form-control" placeholder="Nama Pasien" name="nama" value="<?php echo $dcari['Nama_Pasien']; ?>"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
										<p>
                                        <b>Tanggal Lahir</b>
                                        </p>
                                            <input type="text" readonly class="form-control" placeholder="Tanggal Lahir" name="tgl" value="<?php echo $dcari['Tanggal_Lahir']; ?>" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
										<p>
                                        <b>Jenis Kelamin</b>
                                        </p>
                                            <input type="text" readonly class="form-control" placeholder="Jenis Kelamin" name="gender" value="<?php echo $dcari['Jenis_Kelamin']; ?>" />
                                        </div>
                                    </div>  
                                    <div class="form-group">
                                        <div class="form-line">
										<p>
                                        <b>Pekerjaan</b>
                                        </p>
                                            <input type="text" readonly class="form-control" placeholder="Pekerjaan" name="pekerjaan" value="<?php echo $dcari['Pekerjaan']; ?>" />
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
                                        <b>Penanggung Jawab</b>
                                        </p>
                                            <input type="text" readonly class="form-control" placeholder="Penanggung Jawab" name="jawab" value="<?php echo $dcari['Penanggung_Jawab']; ?>" />
                                        </div>
                                    </div>
                                   
									<div class="form-group">
                                        <div class="form-line">
										<p>
                                        <b>No Telepon</b>
                                        </p>
                                            <input type="text" readonly class="form-control" placeholder="No Telepon" name="telp" value="<?php echo $dcari['No_Telpon']; ?>" />
                                        </div>
                                    </div>
									
									<a href="pasien.php" class="btn btn-round btn-round btn-default"><i class="fa fa-undo fa-fw"></i>Kembali</a>
                            
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