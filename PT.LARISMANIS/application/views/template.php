<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Typography | Bootstrap Based Admin Template - Material Design</title>

    <!-- Favicon-->
    <link rel="icon" href="../favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="<?php echo base_url();?>assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="<?php echo base_url();?>assets/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="<?php echo base_url();?>assets/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="<?php echo base_url();?>assets/css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-red">
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
                <a class="navbar-brand" href="widgets/../../index.html">ADMINBSB - MATERIAL DESIGN</a>
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
               
                
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    
                    <li class="active">
                        <a href="<?php echo base_url('index.php/dash'); ?>">
                            <i class="material-icons">text_fields</i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    
                   <li>
                        <a href="#" class="menu-toggle">
                            <i class="material-icons">swap_calls</i>
                            <span>Master</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="#" class="menu-toggle">Barang</a>
                                <ul class="ml-menu">
                            <li>
                                <a href="<?php echo base_url('index.php/barang/tambah');?>" >
                                    <span>Tambah Barang</span>
                                </a>
                                <a href="<?php echo base_url('index.php/barang/');?>" >
                                    <span>Data Barang</span>
                                </a>
                                <a href="#" >
                                    <span>Stok Barang</span>
                                </a>
                            </li>
                           
                        
                        </ul>
                            </li>
                            <li>
                                <a href="#" class="menu-toggle">Pegawai</a>
                                <ul class="ml-menu">
                            <li>
                                <a href="<?php echo base_url('index.php/pegawai/tambah');?>" >
                                    <span>Tambah Pegawai</span>
                                </a>
                                <a href="<?php echo base_url('index.php/pegawai/');?>" >
                                    <span>Data Pegawai</span>
                                </a>
                            </li>
                        </ul>   
                            </li>

                             <li>
                                <a href="#" class="menu-toggle">Customer</a>
                                <ul class="ml-menu">
                            <li>
                                <a href="<?php echo base_url('index.php/customer/tambah');?>" >
                                    <span>Tambah Customer</span>
                                </a>
                                <a href="<?php echo base_url('index.php/customer/');?>" >
                                    <span>Data Customer</span>
                                </a>
                            </li>
                        </ul>   
                            </li>
                             <li>
                                <a href="#" class="menu-toggle">Suplier</a>
                                <ul class="ml-menu">
                            <li>
                                <a href="#" >
                                    <span>Tambah Suplier</span>
                                </a>
                                <a href="#" >
                                    <span>Data Suplier</span>
                                </a>
                            </li>
                        </ul>   
                            </li>
                           <li>
                                <a href="#" class="menu-toggle">Sales</a>
                                <ul class="ml-menu">
                            <li>
                                <a href="#" >
                                    <span>Tambah Sales</span>
                                </a>
                                <a href="#" >
                                    <span>Data Sales</span>
                                </a>
                            </li>
                        </ul>   
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="menu-toggle">
                            <i class="material-icons">swap_calls</i>
                            <span>Transaksi</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="#" class="menu-toggle">Penjualan</a>
                                <ul class="ml-menu">
                            <li>
                            <a href="#" >
                                    <span>Tambah Penjualan</span>
                                </a>
                                <a href="#" >
                                    <span>Detail Penjualan</span>
                                </a>
                               
                            </li>
                           
                        
                        </ul>
                            </li>
                            <li>
                                <a href="#" class="menu-toggle">Pembelian</a>
                                <ul class="ml-menu">
                            <li>
                            <a href="#" >
                                    <span>Tambah Pembelian</span>
                                </a>
                                <a href="#" >
                                    <span>Detail Pembelian</span>
                                </a>
                               
                            </li>
                           
                        
                        </ul>   
                            </li>

                            <li>
                                <a href="#" class="menu-toggle">Distribusi</a>
                                <ul class="ml-menu">
                            <li>
                                <a href="#" >
                                    <span>Tambah Distribusi</span>
                                </a>
                               <a href="#" >
                                    <span>Data Distribusi</span>
                                </a>
                               
                               
                            </li>
                           
                        
                        </ul>   
                            </li>
                           
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">assignment</i>
                            <span>Laporan</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="../pages/forms/basic-form-elements.html">Penjualan</a>
                            </li>
                            <li>
                                <a href="../pages/forms/advanced-form-elements.html">Pembelian</a>
                            </li>
                              
                        </ul>
                    </li>
                   
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2016 - 2017 <a href="javascript:void(0);">AdminBSB - Material Design</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.5
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        <aside id="rightsidebar" class="right-sidebar">
            <ul class="nav nav-tabs tab-nav-right" role="tablist">
                <li role="presentation" class="active"><a href="#skins" data-toggle="tab">SKINS</a></li>
                <li role="presentation"><a href="#settings" data-toggle="tab">SETTINGS</a></li>
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active in active" id="skins">
                    <ul class="demo-choose-skin">
                        <li data-theme="red" class="active">
                            <div class="red"></div>
                            <span>Red</span>
                        </li>
                        <li data-theme="pink">
                            <div class="pink"></div>
                            <span>Pink</span>
                        </li>
                        <li data-theme="purple">
                            <div class="purple"></div>
                            <span>Purple</span>
                        </li>
                        <li data-theme="deep-purple">
                            <div class="deep-purple"></div>
                            <span>Deep Purple</span>
                        </li>
                        <li data-theme="indigo">
                            <div class="indigo"></div>
                            <span>Indigo</span>
                        </li>
                        <li data-theme="blue">
                            <div class="blue"></div>
                            <span>Blue</span>
                        </li>
                        <li data-theme="light-blue">
                            <div class="light-blue"></div>
                            <span>Light Blue</span>
                        </li>
                        <li data-theme="cyan">
                            <div class="cyan"></div>
                            <span>Cyan</span>
                        </li>
                        <li data-theme="teal">
                            <div class="teal"></div>
                            <span>Teal</span>
                        </li>
                        <li data-theme="green">
                            <div class="green"></div>
                            <span>Green</span>
                        </li>
                        <li data-theme="light-green">
                            <div class="light-green"></div>
                            <span>Light Green</span>
                        </li>
                        <li data-theme="lime">
                            <div class="lime"></div>
                            <span>Lime</span>
                        </li>
                        <li data-theme="yellow">
                            <div class="yellow"></div>
                            <span>Yellow</span>
                        </li>
                        <li data-theme="amber">
                            <div class="amber"></div>
                            <span>Amber</span>
                        </li>
                        <li data-theme="orange">
                            <div class="orange"></div>
                            <span>Orange</span>
                        </li>
                        <li data-theme="deep-orange">
                            <div class="deep-orange"></div>
                            <span>Deep Orange</span>
                        </li>
                        <li data-theme="brown">
                            <div class="brown"></div>
                            <span>Brown</span>
                        </li>
                        <li data-theme="grey">
                            <div class="grey"></div>
                            <span>Grey</span>
                        </li>
                        <li data-theme="blue-grey">
                            <div class="blue-grey"></div>
                            <span>Blue Grey</span>
                        </li>
                        <li data-theme="black">
                            <div class="black"></div>
                            <span>Black</span>
                        </li>
                    </ul>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="settings">
                    <div class="demo-settings">
                        <p>GENERAL SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Report Panel Usage</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Email Redirect</span>
                                <div class="switch">
                                    <label><input type="checkbox"><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                        <p>SYSTEM SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Notifications</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Auto Updates</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                        <p>ACCOUNT SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Offline</span>
                                <div class="switch">
                                    <label><input type="checkbox"><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Location Permission</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </aside>
        <!-- #END# Right Sidebar -->
    </section>

 <?php $this->load->view($main_view);?>

    <!-- Jquery Core Js -->
    <script src="<?php echo base_url();?>assets/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="<?php echo base_url();?>assets/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="<?php echo base_url();?>assets/plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="<?php echo base_url();?>assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?php echo base_url();?>assets/plugins/node-waves/waves.js"></script>

    <!-- Custom Js -->
    <script src="<?php echo base_url();?>assets/js/admin.js"></script>

    <!-- Demo Js -->
    <script src="<?php echo base_url();?>assets/js/demo.js"></script>
</body>

</html>
