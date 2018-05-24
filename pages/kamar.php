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
                               DATA KAMAR
                            </h2>
                            <div align="right">
                    <a href="kamar_tambah.php" type="button" class="btn btn-round btn-default"><i class="fa fa-angle-double-left fa-fw"></i>Tambah Data</a>
                    </div>
                        <div class="body">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
                                        <th>No</th>
										<th>Kode Kamar</th>
                                        <th>Nama Kamar</th>
                                        <th>Harga</th>
										<th>Aksi</th>
                                     </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode Kamar</th>
                                        <th>Nama Kamar</th>
                                        <th>Harga</th>
                                        <th>Aksi</th>
                                    </tr>
                                </tfoot>
                                <tbody>
								     <?php
                    $n = 1;	
                    
                    $link = mysqli_connect('localhost', 'root', '', 'puskesmassragi');
                    $sql=mysqli_query($link, "select * from kamar order By Kode_Kamar desc");
                    while($data=mysqli_fetch_array($sql)){  		
                    ?>
                                    <tr>
										<td><?php echo $n++; ?></td>
                                        <td><?php echo $data['Kode_Kamar']; ?></td>
                                        <td><?php echo $data['Nama_Kamar']; ?></td>
                                        <td><?php echo $data['Harga']; ?></td>
										<td>
										<a class="btn btn-info waves-effect" href="kamar_detail.php?id=<?php echo $data['Kode_Kamar'];?>">Detail</a>
										<a class="btn btn-warning waves-effect" href="kamar_edit.php?id=<?php echo $data['Kode_Kamar'];?>">Edit</a>
										 
										<a class="btn btn-danger waves-effect" onclick="validate(<?php echo $data['Kode_Kamar']; ?>)">Hapus</a>
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
        window.location.href='kamar_hapus.php?id='+id+'';
        return true;
    }
}

</script>
<?php
include "footer.php";
?>