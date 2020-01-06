<?php  
include '../config/dbconfig.php';
?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Beranda</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
    <!-- favicon
		============================================ -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link rel="shortcut icon" type="image/x-icon" href="../static/img/favicon.png">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i,800" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="../static/css/homeCSS/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <!-- <link rel="stylesheet" href="../static/css/homeCSS/font-awesome.min.css"> -->
    <!-- adminpro icon CSS
		============================================ -->
    <link rel="stylesheet" href="../static/css/homeCSS/adminpro-custon-icon.css">

    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="../static/css/homeCSS/meanmenu.min.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="../static/css/homeCSS/jquery.mCustomScrollbar.min.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="../static/css/homeCSS/animate.css">
    <!-- data-table CSS
		============================================ -->
    <link rel="stylesheet" href="../static/css/homeCSS/data-table/bootstrap-table.css">
    <link rel="stylesheet" href="../static/css/homeCSS/data-table/bootstrap-editable.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="../static/css/homeCSS/normalize.css">
    <!-- charts C3 CSS
		============================================ -->
    <link rel="stylesheet" href="../static/css/homeCSS/c3.min.css">
    <!-- forms CSS
		============================================ -->
    <link rel="stylesheet" href="../static/css/homeCSS/form/all-type-forms.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="../static/css/homeCSS/style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="../static/css/homeCSS/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="../static/js/homeJS/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body class="materialdesign">

    <!-- Header top area start-->
    <div class="wrapper-pro">
        <div class="left-sidebar-pro">
            <nav id="sidebar">
                <div class="sidebar-header">
                    <a href="#"><img src="../static/img/admin_photo.png" style="width:80px; height:80px" />
                    </a>
                    <h3>Spongebob</h3>
                    <p>Squarepants</p>
                </div>
                <div class="left-custom-menu-adp-wrap">
                    <ul class="nav navbar-nav left-sidebar-menu-pro">
                        <li class="nav-item">
                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-home"></i> <span class="mini-dn">MENU 1</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                <a href="dashboard.html" class="dropdown-item">Dashboard v.1</a>
                                <a href="../routes/routeHome1.php" class="dropdown-item">Dashboard v.2</a>
                                <a href="analytics.html" class="dropdown-item">Analytics</a>
                                <a href="widgets.html" class="dropdown-item">Widgets</a>
                            </div>
                        </li>
                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-envelope"></i> <span class="mini-dn">MENU 2</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                <a href="inbox.html" class="dropdown-item">Inbox</a>
                                <a href="view-mail.html" class="dropdown-item">View Mail</a>
                                <a href="compose-mail.html" class="dropdown-item">Compose Mail</a>
                            </div>
                        </li>
                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-flask"></i> <span class="mini-dn">MENU 3</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                <a href="google-map.html" class="dropdown-item">Google Map</a>
                                <a href="data-maps.html" class="dropdown-item">Data Maps</a>
                                <a href="pdf-viewer.html" class="dropdown-item">Pdf Viewer</a>
                                <a href="x-editable.html" class="dropdown-item">X-Editable</a>
                                <a href="code-editor.html" class="dropdown-item">Code Editor</a>
                                <a href="tree-view.html" class="dropdown-item">Tree View</a>
                                <a href="preloader.html" class="dropdown-item">Preloader</a>
                                <a href="images-cropper.html" class="dropdown-item">Images Cropper</a>
                            </div>
                        </li>
                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-table"></i> 
                            <span class="mini-dn">MENU 4</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                <a href="profile.html" class="dropdown-item">Profile</a>
                                <a href="contact-client.html" class="dropdown-item">Contact Client</a>
                                <a href="contact-client-v.1.html" class="dropdown-item">Contact Client v.1</a>
                                <a href="project-list.html" class="dropdown-item">Project List</a>
                                <a href="project-details.html" class="dropdown-item">Project Details</a>
                            </div>
                        </li>
                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-table"></i> <span class="mini-dn">MENU 5</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown chart-left-menu-std animated flipInX">
                                <a href="bar-charts.html" class="dropdown-item">Bar Charts</a>
                                <a href="line-charts.html" class="dropdown-item">Line Charts</a>
                                <a href="area-charts.html" class="dropdown-item">Area Charts</a>
                                <a href="rounded-chart.html" class="dropdown-item">Rounded Charts</a>
                                <a href="c3.html" class="dropdown-item">C3 Charts</a>
                                <a href="sparkline.html" class="dropdown-item">Sparkline Charts</a>
                                <a href="peity.html" class="dropdown-item">Peity Charts</a>
                            </div>
                        </li>
                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-table"></i> <span class="mini-dn">MENU 6</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                <a href="static-table.html" class="dropdown-item">Static Table</a>
                                <a href="data-table.html" class="dropdown-item">Data Table</a>
                            </div>
                        </li>
                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-edit"></i> <span class="mini-dn">MENU 7</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown form-left-menu-std animated flipInX">
                                <a href="basic-form-element.html" class="dropdown-item">Basic Elements</a>
                                <a href="advance-form-element.html" class="dropdown-item">Advance Elements</a>
                                <a href="password-meter.html" class="dropdown-item">Password Meter</a>
                                <a href="multi-upload.html" class="dropdown-item">Multi Upload</a>
                                <a href="tinymc.html" class="dropdown-item">Text Editor</a>
                                <a href="dual-list-box.html" class="dropdown-item">Dual List Box</a>
                            </div>
                        </li>
                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-desktop"></i> <span class="mini-dn">MENU 8</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown apps-left-menu-std animated flipInX">
                                <a href="notifications.html" class="dropdown-item">Notifications</a>
                                <a href="alerts.html" class="dropdown-item">Alerts</a>
                                <a href="modals.html" class="dropdown-item">Modals</a>
                                <a href="buttons.html" class="dropdown-item">Buttons</a>
                                <a href="tabs.html" class="dropdown-item">Tabs</a>
                                <a href="accordion.html" class="dropdown-item">Accordion</a>
                                <a href="tab-menus.html" class="dropdown-item">Tab Menus</a>
                            </div>
                        </li>
                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-table"></i> <span class="mini-dn">MENU 9</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown pages-left-menu-std animated flipInX">
                                <a href="login.html" class="dropdown-item">Login</a>
                                <a href="register.html" class="dropdown-item">Register</a>
                                <a href="captcha.html" class="dropdown-item">Captcha</a>
                                <a href="checkout.html" class="dropdown-item">Checkout</a>
                                <a href="contact.html" class="dropdown-item">Contacts</a>
                                <a href="review.html" class="dropdown-item">Review</a>
                                <a href="order.html" class="dropdown-item">Order</a>
                                <a href="comment.html" class="dropdown-item">Comment</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="content-inner-all">
            <div class="header-top-area">
                <div class="fixed-header-top">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-1 col-md-6 col-sm-6 col-xs-12">

                                <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <div class="admin-logo logo-wrap-pro">
                                    <a href="#"><img src="../static/img/log.png" alt=""/>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-1 col-sm-1 col-xs-12">
                                <div class="header-top-menu tabl-d-n">
                                    <ul class="nav navbar-nav mai-top-nav">
                                        <!-- <li class="nav-item"><a href="#" class="nav-link" style="font-size: 22px">Data Karyawan MOR v</a>
                                        </li> -->
                                        <li class="nav-item"><a href="#" class="nav-link"></a>
                                        </li>
                                        <li class="nav-item"><a href="#" class="nav-link"></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
                                <div class="header-right-info">
                                    <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                        <li class="nav-item">
                                            <a href="logout.php" class="nav-link dropdown-toggle">
                                                <span style="float: right;">Keluar <i class="fas fa-sign-out-alt"></i> </span>
                                            </a>
                                        </li>
                                        
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Mobile Menu start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul class="mobile-menu-nav">
                                        <li><a data-toggle="collapse" data-target="#Charts" href="#">Home <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                            <ul class="collapse dropdown-header-top">
                                                <li><a href="dashboard.html">Dashboard v.1</a>
                                                </li>
                                                <li><a href="dashboard-2.html">Dashboard v.2</a>
                                                </li>
                                                <li><a href="analytics.html">Analytics</a>
                                                </li>
                                                <li><a href="widgets.html">Widgets</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#demo" href="#">Mailbox <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                            <ul id="demo" class="collapse dropdown-header-top">
                                                <li><a href="inbox.html">Inbox</a>
                                                </li>
                                                <li><a href="view-mail.html">View Mail</a>
                                                </li>
                                                <li><a href="compose-mail.html">Compose Mail</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#others" href="#">Miscellaneous <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                            <ul id="others" class="collapse dropdown-header-top">
                                                <li><a href="profile.html">Profile</a>
                                                </li>
                                                <li><a href="contact-client.html">Contact Client</a>
                                                </li>
                                                <li><a href="contact-client-v.1.html">Contact Client v.1</a>
                                                </li>
                                                <li><a href="project-list.html">Project List</a>
                                                </li>
                                                <li><a href="project-details.html">Project Details</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Miscellaneousmob" href="#">Interface <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                            <ul id="Miscellaneousmob" class="collapse dropdown-header-top">
                                                <li><a href="google-map.html">Google Map</a>
                                                </li>
                                                <li><a href="data-maps.html">Data Maps</a>
                                                </li>
                                                <li><a href="pdf-viewer.html">Pdf Viewer</a>
                                                </li>
                                                <li><a href="x-editable.html">X-Editable</a>
                                                </li>
                                                <li><a href="code-editor.html">Code Editor</a>
                                                </li>
                                                <li><a href="tree-view.html">Tree View</a>
                                                </li>
                                                <li><a href="preloader.html">Preloader</a>
                                                </li>
                                                <li><a href="images-cropper.html">Images Cropper</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Chartsmob" href="#">Charts <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                            <ul id="Chartsmob" class="collapse dropdown-header-top">
                                                <li><a href="bar-charts.html">Bar Charts</a>
                                                </li>
                                                <li><a href="line-charts.html">Line Charts</a>
                                                </li>
                                                <li><a href="area-charts.html">Area Charts</a>
                                                </li>
                                                <li><a href="rounded-chart.html">Rounded Charts</a>
                                                </li>
                                                <li><a href="c3.html">C3 Charts</a>
                                                </li>
                                                <li><a href="sparkline.html">Sparkline Charts</a>
                                                </li>
                                                <li><a href="peity.html">Peity Charts</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Tablesmob" href="#">Tables <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                            <ul id="Tablesmob" class="collapse dropdown-header-top">
                                                <li><a href="static-table.html">Static Table</a>
                                                </li>
                                                <li><a href="data-table.html">Data Table</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#formsmob" href="#">Forms <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                            <ul id="formsmob" class="collapse dropdown-header-top">
                                                <li><a href="basic-form-element.html">Basic Form Elements</a>
                                                </li>
                                                <li><a href="advance-form-element.html">Advanced Form Elements</a>
                                                </li>
                                                <li><a href="password-meter.html">Password Meter</a>
                                                </li>
                                                <li><a href="multi-upload.html">Multi Upload</a>
                                                </li>
                                                <li><a href="tinymc.html">Text Editor</a>
                                                </li>
                                                <li><a href="dual-list-box.html">Dual List Box</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Appviewsmob" href="#">App views <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                            <ul id="Appviewsmob" class="collapse dropdown-header-top">
                                                <li><a href="basic-form-element.html">Basic Form Elements</a>
                                                </li>
                                                <li><a href="advance-form-element.html">Advanced Form Elements</a>
                                                </li>
                                                <li><a href="password-meter.html">Password Meter</a>
                                                </li>
                                                <li><a href="multi-upload.html">Multi Upload</a>
                                                </li>
                                                <li><a href="tinymc.html">Text Editor</a>
                                                </li>
                                                <li><a href="dual-list-box.html">Dual List Box</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Pagemob" href="#">Pages <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                            <ul id="Pagemob" class="collapse dropdown-header-top">
                                                <li><a href="login.html">Login</a>
                                                </li>
                                                <li><a href="register.html">Register</a>
                                                </li>
                                                <li><a href="captcha.html">Captcha</a>
                                                </li>
                                                <li><a href="checkout.html">Checkout</a>
                                                </li>
                                                <li><a href="contact.html">Contacts</a>
                                                </li>
                                                <li><a href="review.html">Review</a>
                                                </li>
                                                <li><a href="order.html">Order</a>
                                                </li>
                                                <li><a href="comment.html">Comment</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu end -->
            <!-- Breadcome start-->
            
            <!-- Breadcome End-->
            <!-- welcome Project, sale area start-->
            <div class="welcome-adminpro-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                        </div>
                    </div>
                </div>
            </div>
            <!-- welcome Project, sale area start-->
            <!-- stockprice, feed area start-->
            <div class="stockprice-feed-project-area">
                <div class="container-fluid">
                    <div class="row">
                    </div>
                </div>
            </div>
            <!-- stockprice, feed area end-->
            <!-- Data table area Start-->
            <div class="admin-dashone-data-table-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sparkline8-list shadow-reset">
                                <div class="sparkline8-hd" style="margin-top: 15px">
                                    <div class="main-sparkline8-hd">
                                        <h1 style="font-weight: bold;">Data Karyawan MOR V</h1>
                                    </div>
                                </div>
        <?php 
            $s_fungsi="";
            $s_keyword="";
            if (isset($_POST['search'])) {
                $s_fungsi = $_POST['s_fungsi'];
                $s_keyword = $_POST['s_keyword'];
            }
        ?>
        <form method="POST" action="">
        <div class="sparkline8-graph">
            <div class="datatable-dashv1-list custom-datatable-overright">
            <div class="toolbar">
                        <select name="s_fungsi" id="s_fungsi" class="form-control-filter">
                            <option value="">-- Filter KBO --</option>
                            <option value="I20140" <?php if ($s_fungsi=="I20140"){ echo "selected"; } ?>>Asset Operation  MOR V</option>
                            <option value="Q2502" <?php if ($s_fungsi=="Q2502"){ echo "selected"; } ?>>Corporate Operation & Service Region V</option>
                            <option value="Q2501" <?php if ($s_fungsi=="Q2501"){ echo "selected"; } ?>>Corporate Sales Region V</option>
                            <option value="N00" <?php if ($s_fungsi=="N00"){ echo "selected"; } ?>>Corporate Secretary</option>
                            <option value="H12250" <?php if ($s_fungsi=="H12250"){ echo "selected"; } ?>>Finance MOR V</option>
                            <option value="S002" <?php if ($s_fungsi=="S002"){ echo "selected"; } ?>>Geosecurity Intelligence</option>
                            <option value="Q25060" <?php if ($s_fungsi=="Q25060"){ echo "selected"; } ?>>HSSE Region V</option>
                            <option value="J001A0" <?php if ($s_fungsi=="J001A0"){ echo "selected"; } ?>>Internal Audit Jatimbalinus</option>
                            <option value="H36300" <?php if ($s_fungsi=="H36300"){ echo "selected"; } ?>>IT MOR V</option>
                            <option value="M00350" <?php if ($s_fungsi=="M00350"){ echo "selected"; } ?>>Legal Counsul MOR V</option>
                            <option value="Q2507" <?php if ($s_fungsi=="Q2507"){ echo "selected"; } ?>>Marine Region V</option>
                            <option value="K00157" <?php if ($s_fungsi=="K00157"){ echo "selected"; } ?>>Medical Jatim Balinus</option>
                            <option value="Q25000" <?php if ($s_fungsi=="Q25000"){ echo "selected"; } ?>>MOR V</option>
                            <option value="F5000" <?php if ($s_fungsi=="F5000"){ echo "selected"; } ?>>MOR V (NON FORMASI PWT)</option>
                            <option value="F15400A" <?php if ($s_fungsi=="F15400A"){ echo "selected"; } ?>>MOR V (NON FORMASI REGION)</option>
                            <option value="F15400" <?php if ($s_fungsi=="F15400"){ echo "selected"; } ?>>MOR V (NON FORMASI Tugas Belajar)</option>
                            <option value="I03125" <?php if ($s_fungsi=="I03125"){ echo "selected"; } ?>>Procurement MOR V</option>
                            <option value="R00140" <?php if ($s_fungsi=="R00140"){ echo "selected"; } ?>>Quality Management</option>
                            <option value="Q25050" <?php if ($s_fungsi=="Q25050"){ echo "selected"; } ?>>Rel. & Project Dev. Region V</option>
                            <option value="Q2503" <?php if ($s_fungsi=="Q2503"){ echo "selected"; } ?>>Retail Sales Region V</option>
                            <option value="Q2504" <?php if ($s_fungsi=="Q2504"){ echo "selected"; } ?>>S&D Region V</option>
                            <option value="F15437" <?php if ($s_fungsi=="F15437"){ echo "selected"; } ?>>S&D Region V (NON FORMASI PWT TNI POLRI)</option>
                            <option value="F15451" <?php if ($s_fungsi=="F15451"){ echo "selected"; } ?>>S&D Region V (ORG LAMA)</option>
                            <option value="K24330" <?php if ($s_fungsi=="K24330"){ echo "selected"; } ?>>Unit HC MOR V</option>

                        </select>


                        <select name="s_keyword" class="form-control-filter1" id="s_keyword" style="margin-left: 8px;">
                            <option value="">-- Filter CC --</option>
                            <option value="A1508026" <?php if ($s_keyword=="A1508026"){ echo "selected"; } ?>>Area Mgr LCC Jatimba</option>
                            <option value="A0903324" <?php if ($s_keyword=="A0903324"){ echo "selected"; } ?>>FT Mgr Atapupu</option>
                            <option value="A0903309" <?php if ($s_keyword=="A0903309"){ echo "selected"; } ?>>FT Mgr Camplong</option>
                            <option value="A0903318" <?php if ($s_keyword=="A0903318"){ echo "selected"; } ?>>FT Mgr Kalabahi</option>
                            <option value="A0903322" <?php if ($s_keyword=="A0903322"){ echo "selected"; } ?>>FT Mgr Maumere</option>
                            <option value="A0903316" <?php if ($s_keyword=="A0903316"){ echo "selected"; } ?>>FT Mgr Sanggaran</option>
                            <option value="A0903323" <?php if ($s_keyword=="A0903323"){ echo "selected"; } ?>>FT Mgr Waingapu</option>
                            <option value="A0903301" <?php if ($s_keyword=="A0903301"){ echo "selected"; } ?>>Fuel Op S&D V</option>
                            <option value="A0903314" <?php if ($s_keyword=="A0903314"){ echo "selected"; } ?>>Fuel Term Mgr Badas</option>
                            <option value="A0903315" <?php if ($s_keyword=="A0903315"){ echo "selected"; } ?>>Fuel Term Mgr Bima</option>
                            <option value="A0903320" <?php if ($s_keyword=="A0903320"){ echo "selected"; } ?>>Fuel Term Mgr Ende</option>
                            <option value="A0903307" <?php if ($s_keyword=="A0903307"){ echo "selected"; } ?>>Fuel Term Mgr Madiun</option>
                            <option value="A0903306" <?php if ($s_keyword=="A0903306"){ echo "selected"; } ?>>Fuel Term Mgr Malang</option>
                            <option value="A0903319" <?php if ($s_keyword=="A0903319"){ echo "selected"; } ?>>Fuel Term Mgr Reo</option>
                            <option value="A0903313" <?php if ($s_keyword=="A0903313"){ echo "selected"; } ?>>Fuel Term Mgr Tenau</option>
                            <option value="A0903310" <?php if ($s_keyword=="A0903310"){ echo "selected"; } ?>>Fuel Term Mgr Tuban</option>
                            <option value="A0801092" <?php if ($s_keyword=="A0801092"){ echo "selected"; } ?>>GM MO V</option>
                            <option value="A1505062" <?php if ($s_keyword=="A1505062"){ echo "selected"; } ?>>IA Jatimbalinus Mgr</option>
                            <option value="A0903317" <?php if ($s_keyword=="A0903317"){ echo "selected"; } ?>>Intgr FT Mgr Ampenan</option>
                            <option value="A0903312" <?php if ($s_keyword=="A0903312"){ echo "selected"; } ?>>Intgr FT Mgr Manggis</option>
                            <option value="A0903303" <?php if ($s_keyword=="A0903303"){ echo "selected"; } ?>>Intgr FT Mgr SBY</option>
                            <option value="A0903305" <?php if ($s_keyword=="A0903305"){ echo "selected"; } ?>>Intgr FT Tg Wangi</option>
                            <option value="A1102010" <?php if ($s_keyword=="A1102010"){ echo "selected"; } ?>>Intgr LPG Term Bnywg</option>
                            <option value="A1104005" <?php if ($s_keyword=="A1104005"){ echo "selected"; } ?>>Intgr LPG Term Mggs</option>
                            <option value="A1104003" <?php if ($s_keyword=="A1104003"){ echo "selected"; } ?>>Intgr LPG Term Tg. P</option>
                            <option value="A0903145" <?php if ($s_keyword=="A0903145"){ echo "selected"; } ?>>LPG Op S&D V</option>
                            <option value="A1104001" <?php if ($s_keyword=="A1104001"){ echo "selected"; } ?>>LPG Retail  Sales V</option>
                            <option value="A1504034" <?php if ($s_keyword=="A1504034"){ echo "selected"; } ?>>Mgr CSR&SMEPP Financ</option>
                            <option value="A1502246" <?php if ($s_keyword=="A1502246"){ echo "selected"; } ?>>Mgr Finance MOR V</option>
                            <option value="A1503257" <?php if ($s_keyword=="A1503257"){ echo "selected"; } ?>>Mgr Geosec Intelgnce</option>
                            <option value="A1503046" <?php if ($s_keyword=="A1503046"){ echo "selected"; } ?>>Mgr IT MOR V Sby</option>
                            <option value="A1503041" <?php if ($s_keyword=="A1503041"){ echo "selected"; } ?>>Mgr Phys Geosecurity</option>
                            <option value="A0801064" <?php if ($s_keyword=="A0801064"){ echo "selected"; } ?>>Mgr Quality Mgt</option>
                            <option value="A1301004" <?php if ($s_keyword=="A1301004"){ echo "selected"; } ?>>OH Bit Plant Gresik</option>
                            <option value="A1003006" <?php if ($s_keyword=="A1003006"){ echo "selected"; } ?>>OH DPPU BIL</option>
                            <option value="A1003005" <?php if ($s_keyword=="A1003005"){ echo "selected"; } ?>>OH DPPU Eltari</option>
                            <option value="A1003004" <?php if ($s_keyword=="A1003004"){ echo "selected"; } ?>>OH DPPU Iswahyudi</option>
                            <option value="A1003002" <?php if ($s_keyword=="A1003002"){ echo "selected"; } ?>>OH DPPU Juanda</option>
                            <option value="A1003003" <?php if ($s_keyword=="A1003003"){ echo "selected"; } ?>>OH DPPU Ngurah Rai</option>
                            <option value="A1003011" <?php if ($s_keyword=="A1003011"){ echo "selected"; } ?>>Petroch. Op V</option>
                            <option value="A0902038" <?php if ($s_keyword=="A0902038"){ echo "selected"; } ?>>Reg Mgr Corp Sls V</option>
                            <option value="A0903144" <?php if ($s_keyword=="A0903144"){ echo "selected"; } ?>>Reg Mgr S&D V</option>
                            <option value="A0801054" <?php if ($s_keyword=="A0801054"){ echo "selected"; } ?>>Region Mgr HSSE V</option>
                            <option value="A1406007" <?php if ($s_keyword=="A1406007"){ echo "selected"; } ?>>Region Mgr Marine V</option>
                            <option value="A1003001" <?php if ($s_keyword=="A1003001"){ echo "selected"; } ?>>Rg Mgr Crp Op&Srv V</option>
                            <option value="A0804156" <?php if ($s_keyword=="A0804156"){ echo "selected"; } ?>>Rg Mgr Rel&Proj V</option>
                            <option value="A0901036" <?php if ($s_keyword=="A0901036"){ echo "selected"; } ?>>Rg Mgr Rtl Fl Sls V</option>
                            <option value="A0902018" <?php if ($s_keyword=="A0902018"){ echo "selected"; } ?>>SAM Industri V</option>
                            <option value="A1301017" <?php if ($s_keyword=="A1301017"){ echo "selected"; } ?>>SAM Petrochemical V</option>
                            <option value="A0901091" <?php if ($s_keyword=="A0901091"){ echo "selected"; } ?>>SAM Retail Fuel Bali</option>
                            <option value="A0901092" <?php if ($s_keyword=="A0901092"){ echo "selected"; } ?>>SAM Retail Fuel NTT</option>
                            <option value="A0901160" <?php if ($s_keyword=="A0901160"){ echo "selected"; } ?>>SAM Rtl Fuel  NTB</option>
                            <option value="A0901156" <?php if ($s_keyword=="A0901156"){ echo "selected"; } ?>>SAM Rtl Fuel Kediri</option>
                            <option value="A0901154" <?php if ($s_keyword=="A0901154"){ echo "selected"; } ?>>SAM Rtl Fuel Malang</option>
                            <option value="A0901152" <?php if ($s_keyword=="A0901152"){ echo "selected"; } ?>>SAM Rtl Fuel SBY</option>
                            <option value="A0901158" <?php if ($s_keyword=="A0901158"){ echo "selected"; } ?>>SAM Rtl LPG Bali</option>
                            <option value="A0901157" <?php if ($s_keyword=="A0901157"){ echo "selected"; } ?>>SAM Rtl LPG Kediri</option>
                            <option value="A0901155" <?php if ($s_keyword=="A0901155"){ echo "selected"; } ?>>SAM Rtl LPG Malang</option>
                            <option value="A0901161" <?php if ($s_keyword=="A0901161"){ echo "selected"; } ?>>SAM Rtl LPG NTB</option>
                            <option value="A0901159" <?php if ($s_keyword=="A0901159"){ echo "selected"; } ?>>SAM Rtl LPG NTT</option>
                            <option value="A0901153" <?php if ($s_keyword=="A0901153"){ echo "selected"; } ?>>SAM Rtl LPG Surabaya</option>
                            <option value="A1503105" <?php if ($s_keyword=="A1503105"){ echo "selected"; } ?>>SH Medical MOR V</option>
                            <option value="A1520029" <?php if ($s_keyword=="A1520029"){ echo "selected"; } ?>>SH Proc MOR V</option>
                            <option value="A0903321" <?php if ($s_keyword=="A0903321"){ echo "selected"; } ?>>Terminal BBM Larantu</option>
                            <option value="A1503192" <?php if ($s_keyword=="A1503192"){ echo "selected"; } ?>>UM Asset Opr MOR V</option>
                            <option value="A1504040" <?php if ($s_keyword=="A1504040"){ echo "selected"; } ?>>UM Com & CSR MOR V</option>
                            <option value="A1503241" <?php if ($s_keyword=="A1503241"){ echo "selected"; } ?>>Unit Mgr HC MOR V</option>
                        </select>

                    <button id="search" name="search" class="btn btn-danger btn-filter-search" style="border-radius: 5px;">Filter</button>
                
            </div>
        </form>

        <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="false" data-show-pagination-switch="false" data-show-refresh="false" data-key-events="true" data-show-toggle="false" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="false" data-click-to-select="true" data-toolbar="#toolbar" class="table table-striped">
            <thead>
                <tr>
                <!-- <th data-field="state" data-checkbox="true"></th> -->
                    <th data-field="id">No Pegawai</th>
                    <th data-field="name" data-editable="false">Nama</th>
                    <th data-field="email" data-editable="false">Email</th>
                    <th data-field="phone" data-editable="false">Jabatan</th>
                    <th data-field="company" data-editable="false">Sub Area</th>
                    <th data-field="complete">KBO</th>
                    <th data-field="task" data-editable="false">CC</th>
                    <th data-field="status" data-editable="false">Status</th>
                    <th data-field="action" data-editable="false">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $search_fungsi = '%'. $s_fungsi .'%';
                    $search_keyword = '%'. $s_keyword .'%';
                    $query = "SELECT * FROM data_karyawan WHERE kbo LIKE ? AND kode_cc LIKE ?";
                    $dewan1 = $db1->prepare($query);
                    $dewan1->bind_param('ss', $search_fungsi, $search_keyword);
                    $dewan1->execute();
                    $res1 = $dewan1->get_result();

                    if ($res1->num_rows > 0) {
                        while ($data = $res1->fetch_assoc()) {
                            
                        $nopeg = $data['nopeg'];
                        $nama = $data['nama'];
                        $email = $data['email'];
                        $jabatan = $data['jabatan'];
                        $subarea = $data['subarea'];
                        $kbo = $data['kbo'];
                        $kode_cc = $data['kode_cc'];
                        $status1 = $data['status1'];
                ?>
                    <tr>
                        <td><?php echo $nopeg ?></td>
                        <td><?php echo $nama; ?></td>
                        <td><?php echo $email; ?></td>
                        <td><?php echo $jabatan; ?></td>
                        <td><?php echo $subarea; ?></td>
                        <td><?php echo $kbo; ?></td>
                        <td><?php echo $kode_cc; ?></td>
                        <td><?php echo $status1; ?></td>

                        <?php echo "<td><center><a href='#myModal' id='custId' data-toggle='modal' data-id=".$data['nopeg']."><i class='fas fa-user-edit'></i></a></center>"; ?><br>

                        <center><a href="<?php echo "nonAktif.php?nopeg=".$data['nopeg']; ?>"><i style="color: red" class="fas fa-user-times"></i></a></center> 
                        </td>                           
                    </tr>
                <?php } } else { ?> 
                    <tr>
                        <td colspan='9'>Tidak Terdapat Data Yang Ditemukan</td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Data table area End-->
        </div>
    </div>

    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Update Data Karyawan</h4>
                </div>
                <div class="modal-body">
                    <div class="fetched-data"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
                </div>
            </div>
        </div>
    </div>

  <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
        $('#myModal').on('show.bs.modal', function (e) {
            var nopeg = $(e.relatedTarget).data('id');
            //menggunakan fungsi ajax untuk pengambilan data
            $.ajax({
                type : 'post',
                url : 'detail.php',
                data :  'nopeg='+ nopeg,
                success : function(data){
                $('.fetched-data').html(data);//menampilkan data ke dalam modal
                }
            });
         });
    });
  </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <!-- jquery
		============================================ -->
    <script src="../static/js/homeJS/vendor/jquery-1.11.3.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="../static/js/homeJS/bootstrap.min.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="../static/js/homeJS/jquery.meanmenu.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="../static/js/homeJS/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="../static/js/homeJS/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="../static/js/homeJS/jquery.scrollUp.min.js"></script>
    <!-- counterup JS
		============================================ -->
    <script src="../static/js/homeJS/counterup/jquery.counterup.min.js"></script>
    <script src="../static/js/homeJS/counterup/waypoints.min.js"></script>
    <script src="../static/js/homeJS/counterup/counterup-active.js"></script>
    <!-- peity JS
		============================================ -->
    <script src="../static/js/homeJS/peity/jquery.peity.min.js"></script>
    <script src="../static/js/homeJS/peity/peity-active.js"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="../static/js/homeJS/sparkline/jquery.sparkline.min.js"></script>
    <script src="../static/js/homeJS/sparkline/sparkline-active.js"></script>
    <!-- flot JS
		============================================ -->
    <script src="../static/js/homeJS/flot/Chart.min.js"></script>
    <script src="../static/js/homeJS/flot/flot-active.js"></script>
    <!-- map JS
		============================================ -->
    <script src="../static/js/homeJS/map/raphael.min.js"></script>
    <script src="../static/js/homeJS/map/jquery.mapael.js"></script>
    <script src="../static/js/homeJS/map/france_departments.js"></script>
    <script src="../static/js/homeJS/map/world_countries.js"></script>
    <script src="../static/js/homeJS/map/usa_states.js"></script>
    <script src="../static/js/homeJS/map/map-active.js"></script>
    <!-- data table JS
		============================================ -->
    <script src="../static/js/homeJS/data-table/bootstrap-table.js"></script>
    <script src="../static/js/homeJS/data-table/tableExport.js"></script>
    <script src="../static/js/homeJS/data-table/data-table-active.js"></script>
    <script src="../static/js/homeJS/data-table/bootstrap-table-editable.js"></script>
    <script src="../static/js/homeJS/data-table/bootstrap-editable.js"></script>
    <script src="../static/js/homeJS/data-table/bootstrap-table-resizable.js"></script>
    <script src="../static/js/homeJS/data-table/colResizable-1.5.source.js"></script>
    <script src="../static/js/homeJS/data-table/bootstrap-table-export.js"></script>
    <!-- main JS
		============================================ -->
    <script src="../static/js/homeJS/main.js"></script>
</body>

</html>