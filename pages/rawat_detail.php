<?php
  $id = $_GET['id'];
  $link = mysqli_connect('localhost', 'root', '', 'puskesmassragi');
  $cari = mysqli_query($link, "SELECT * FROM rawatinap WHERE No_Daftar = $id");
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
                                Tambah data Rawat Inap
                            </h2>
                            
                        </div>
                        <div class="body">
                            
							 <form method="post" action="editrawat.php" >
							<h2 class="card-inside-title">Masukan data rawat inap</h2>
								<div class="row clearfix">
                                <div class="col-sm-12">
								 
                                    <div class="form-group">
									<p>
                                        <b>No RM</b>
                                        </p>
									
                                        <div class="form-line">
                                            <input type="text" readonly class="form-control" placeholder="No RM" name="no_rm" value="<?php echo $dcari['No_RM']; ?>" />
                                        </div>
                                    </div>
                                    <div class="form-group">
									<p>
                                        <b>No Daftar</b>
                                        </p>
									
                                        <div class="form-line">
                                            <input type="text" readonly class="form-control" placeholder="No Daftar" name="no_daftar" value="<?php echo $dcari['No_Daftar']; ?>" />
                                        </div>
                                    </div>
                                    <div class="form-group">
									<p>
                                        <b>Tanggal Daftar</b>
                                        </p>
									
                                        <div class="form-line">
                                            <input type="text" readonly class="form-control" placeholder="Tanggal Daftar" name="tgl_daftar" value="<?php echo $dcari['Tanggal_Daftar']; ?>" />
                                        </div>
                                    </div>
                                    <div class="form-group">
									<p>
                                        <b>Tanggal Keluar</b>
                                        </p>
									
                                        <div class="form-line">
                                            <input type="text" readonly class="form-control" placeholder="Tanggal Keluar" name="tgl_keluar" value="<?php echo $dcari['Tanggal_Keluar']; ?>" />
                                        </div>
                                    </div>
                                    <div class="form-group">
									<p>
                                        <b>Kode Kamar</b>
                                        </p>
									
                                        <div class="form-line">
                                            <input type="text" readonly class="form-control" placeholder="Kode Kamar" name="kd_kamar" value="<?php echo $dcari['Kode_Kamar']; ?>" />
                                        </div>
                                    </div>
                                    <div class="form-group">
									<p>
                                        <b>Id Dokter</b>
                                        </p>
									
                                        <div class="form-line">
                                            <input type="text" readonly class="form-control" placeholder="Id Dokter" name="id_dokter" value="<?php echo $dcari['Id_Dokter']; ?>" />
                                        </div>
                                    </div>
                                    <div class="form-group">
									<p>
                                        <b>Status Pasien</b>
                                        </p>
									
                                        <div class="form-line">
                                            <input type="text" readonly class="form-control" placeholder="Status Pasien" name="status" value="<?php echo $dcari['Status_Pasien']; ?>" />
                                        </div>
                                    </div>
                                    
									<a href="rawatinap.php" class="btn btn-round btn-round btn-default"><i class="fa fa-undo fa-fw"></i>Kembali</a>
                            
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