<?php
  $id = $_GET['id'];
  $link = mysqli_connect('localhost', 'root', '', 'puskesmassragi');
  $cari = mysqli_query($link, "select * from pasien  where No_RM ='$id'");
  $dcari = mysqli_fetch_array($cari);
?>
<?php
include "header.php";
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Basic Form Elements | Bootstrap Based Admin Template - Material Design</title>
    <!-- Favicon-->
    <link rel="icon" href="../favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="../plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="../plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="../plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Bootstrap Material Datetime Picker Css -->
    <link href="../plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet" />

    <!-- Wait Me Css -->
    <link href="../plugins/waitme/waitMe.css" rel="stylesheet" />

    <!-- Bootstrap Select Css -->
    <link href="../plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="../css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="../css/themes/all-themes.css" rel="stylesheet" />
</head>


<body class="theme-light-blue">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="../index.html">SIRANAP - PUSKESMAS</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Call Search -->
                    <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
                    <!-- #END# Call Search -->
                    <!-- Notifications -->
                    
                    <!-- #END# Notifications -->
                    <!-- Tasks -->
                    
                    <!-- #END# Tasks -->
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="../images/user.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?=$_SESSION['username'];?></div>
                    
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="user_edit.php"><i class="material-icons">person</i>Profile</a></li>
                            <li role="seperator" class="divider"></li>
                            <li><a href="./../logout.php"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="active">
                        <a href="index.php">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="kamar.php">
                            <i class="material-icons">account_balance</i>
                            <span>Kamar</span>
                        </a>
                    </li>
                    <li>
                        <a href="obat.php">
                            <i class="material-icons">store</i>
                            <span>Obat</span>
                        </a>
                    </li>
                    <li>
                        <a href="dokter.php">
                            <i class="material-icons">assignment_ind</i>
                            <span>Dokter</span>
                        </a>
                    </li>
                    <li>
                        <a href="pasien.php">
                            <i class="material-icons">accessibility</i>
                            <span>Pasien</span>
                        </a>
                    </li>
                    
                    <li>
                        <a href="penyakit.php">
                            <i class="material-icons">card_travel</i>
                            <span>Penyakit</span>
                        </a>
                    </li>
                    <li>
                        <a href="rawatinap.php">
                            <i class="material-icons">description</i>
                            <span>Rawat Inap</span>
                        </a>
                    </li>
                    <li>
                        <a href="periksa.php">
                            <i class="material-icons">record_voice_over</i>
                            <span>Periksa</span>
                        </a>
                    </li>
                    <li>
                        <a href="detailpenyakit.php">
                            <i class="material-icons">view_headline</i>
                            <span>Detail Penyakit</span>
                        </a>
                    </li>
                    <li>
                        <a href="detailobat.php">
                            <i class="material-icons">poll</i>
                            <span>Detail Obat</span>
                        </a>
                    </li>
                    <li>
                        <a href="user.php">
                            <i class="material-icons">card_travel</i>
                            <span>User</span>
                        </a>
                    </li>
                   
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2018 <a href="javascript:void(0);">SIRANAP</a>.
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
       
        <!-- #END# Right Sidebar -->
    </section>
<section class="content">
        <div class="container-fluid">
           
            <!-- Input -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Edit Data Pasien
                               
                            </h2>
                            
                        </div>
                        <div class="body">
                            	
							 <form method="post" action="editpasien.php" >
							
								<div class="row clearfix">
                                <div class="col-sm-6">
								<h2 class="card-inside-title">Masukan data pasien</h2>
                                <div class="form-group">
                                <input type="hidden" name="no_rm" value="<?php echo $id; ?>">
                                        <div class="form-line">
										<p>
                                        <b>Jenis Pasien</b>
                                        </p>
                                            <input type="text" class="form-control" placeholder="Jenis Pasien" name="jns" value="<?php echo $dcari['Jenis_Pasien']; ?>" />
                                        </div>
                                    </div>
                                    <div class="form-group">
									
                                        <div class="form-line">
										 <p>
                                        <b>Nama Pasien</b>
										</p>
                                            <input type="text" class="form-control" placeholder="Nama Pasien" name="nama" value="<?php echo $dcari['Nama_Pasien']; ?>"/>
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
                                        <b>Jenis Kelamin</b>
                                        </p>
                                            <input type="text" class="form-control" placeholder="Jenis Kelamin" name="gender" value="<?php echo $dcari['Jenis_Kelamin']; ?>" />
                                        </div>
                                    </div>  
                                    <div class="form-group">
                                        <div class="form-line">
										<p>
                                        <b>Pekerjaan</b>
                                        </p>
                                            <input type="text" class="form-control" placeholder="Pekerjaan" name="pekerjaan" value="<?php echo $dcari['Pekerjaan']; ?>" />
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
                                            <input type="text" class="form-control" placeholder="Penanggung Jawab" name="jawab" value="<?php echo $dcari['Penanggung_Jawab']; ?>" />
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
                                <a href="pasien.php" class="btn btn-round btn-round btn-default"><i class="fa fa-undo fa-fw"></i>Batal</a>
                            
							</form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Input -->
         
</body>
        </div>
    </section>
   
    <!-- Jquery Core Js -->
    <script src="../plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="../plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="../plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="../plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../plugins/node-waves/waves.js"></script>

    <!-- Autosize Plugin Js -->
    <script src="../plugins/autosize/autosize.js"></script>

    <!-- Moment Plugin Js -->
    <script src="../plugins/momentjs/moment.js"></script>

    <!-- Bootstrap Material Datetime Picker Plugin Js -->
    <script src="../plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>

    <!-- Custom Js -->
    <script src="../js/admin.js"></script>
    <script src="../js/pages/forms/basic-form-elements.js"></script>

    <!-- Demo Js -->
    <script src="../js/demo.js"></script>
</body>
</html>