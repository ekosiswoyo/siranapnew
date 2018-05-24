<?php
include "header.php";
?>
<section class="content">
        <div class="container-fluid">

            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               DATA Dokter
                            </h2>
                            <div align="right">
                    <a href="dokter_tambah.php" type="button" class="btn btn-round btn-default"><i class="fa fa-angle-double-left fa-fw"></i>Tambah Data</a>
                    </div>
                        <div class="body">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
                                        <th>No</th>
										<th>ID Dokter</th>
                                        <th>Nama Dokter</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Tanggal Lahir</th>
										<th>Alamat</th>
                                        <th>Agama</th>
                                        <th>No Telepon</th>
										<th>Aksi</th>
                                     </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                    <th>No</th>
										<th>ID Dokter</th>
                                        <th>Nama Dokter</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Tanggal Lahir</th>
										<th>Alamat</th>
                                        <th>Agama</th>
                                        <th>No Telepon</th>
										<th>Aksi</th>
                                    </tr>
                                </tfoot>
                                <tbody>
								     <?php
                    $n = 1;	
                    
                    $link = mysqli_connect('localhost', 'root', '', 'puskesmassragi');
                    $sql=mysqli_query($link, "select * from dokter order By Id_Dokter desc");
                    while($data=mysqli_fetch_array($sql)){  		
                    ?>
                                    <tr>
										<td><?php echo $n++; ?></td>
                                        <td><?php echo $data['Id_Dokter']; ?></td>
                                        <td><?php echo $data['Nama_Dokter']; ?></td>
                                        <td><?php echo $data['Jenis_Kelamin']; ?></td>
                                        <td><?php echo $data['Tanggal_Lahir']; ?></td>
                                        <td><?php echo $data['Alamat']; ?></td>
                                        <td><?php echo $data['Agama']; ?></td>
                                        <td><?php echo $data['No_Telpon']; ?></td>
										<td>
										<a class="btn btn-info waves-effect" href="dokter_detail.php?id=<?php echo $data['Id_Dokter'];?>">Detail</a>
										<a class="btn btn-warning waves-effect" href="dokter_edit.php?id=<?php echo $data['Id_Dokter'];?>">Edit</a>
										 
										<a class="btn btn-danger waves-effect" onclick="validate(<?php echo $data['Id_Dokter']; ?>)">Hapus</a>
										</td>
									</tr>
                                     <?php
                    }
                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Exportable Table -->
        </div>
    </section>
    <script language='JavaScript'>

function validate(id)
{
	if(confirm("Apakah anda yakin!")){
        window.location.href='dokter_hapus.php?id='+id+'';
        return true;
    }
}

</script>
<?php
include "footer.php";
?>