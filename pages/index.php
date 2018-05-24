<?php
include "header.php";
?>
 <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>DASHBOARD</h2>
            </div>

            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">playlist_add_check</i>
                        </div>
                        <div class="content">
                            <div class="text">DATA KAMAR</div>
                            <?php
                                $link = mysqli_connect('localhost', 'root', '', 'puskesmassragi');
                                $cari = mysqli_query($link, "select * from kamar");
                                $dcari = mysqli_num_rows($cari);
                            ?>
                            <div class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20"><?php echo $dcari; ?></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">help</i>
                        </div>
                        <div class="content">
                            <div class="text">NEW PASIEN</div>
                            <?php
                                $link = mysqli_connect('localhost', 'root', '', 'puskesmassragi');
                                $cari = mysqli_query($link, "select * from pasien");
                                $dcari = mysqli_num_rows($cari);
                            ?>
                            <div class="number count-to" data-from="0" data-to="257" data-speed="1000" data-fresh-interval="20"><?php echo $dcari; ?></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-green hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">forum</i>
                        </div>
                        <div class="content">
                            <div class="text">DATA OBAT</div>
                            <?php
                                $link = mysqli_connect('localhost', 'root', '', 'puskesmassragi');
                                $cari = mysqli_query($link, "select * from obat");
                                $dcari = mysqli_num_rows($cari);
                            ?>
                            <div class="number count-to" data-from="0" data-to="243" data-speed="1000" data-fresh-interval="20"><?php echo $dcari; ?></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-orange hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">person_add</i>
                        </div>
                        <div class="content">
                            <div class="text">DATA DOKTER</div>
                            <?php
                                $link = mysqli_connect('localhost', 'root', '', 'puskesmassragi');
                                $cari = mysqli_query($link, "select * from dokter");
                                $dcari = mysqli_num_rows($cari);
                            ?>
                            <div class="number count-to" data-from="0" data-to="1225" data-speed="1000" data-fresh-interval="20"><?php echo $dcari; ?></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Widgets -->
            <!-- CPU Usage -->
            
            <!-- #END# CPU Usage -->
          

            
        </div>
    </section>
<?php
include "footer.php";
?>