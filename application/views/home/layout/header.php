<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>EShopper - Bootstrap Shop Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="<?php echo base_url('assets/home/img/favicon.ico') ?>" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?php echo base_url('assets/home/lib/owlcarousel/assets/owl.carousel.min.css'); ?>" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo base_url('assets/home/css/style.css'); ?>" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid">

        <div class="row align-items-center py-3 px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a href="<?php echo site_url("Main")?>" class="text-decoration-none">
                    <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">E</span>Shopper</h1>
                </a>
            </div>


      
        <div class="col-lg-9">
            <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                <a href="" class="text-decoration-none d-block d-lg-none">
                    <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">E</span>Shopper</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <?php if (empty($this->session->userdata('username'))) { ?>
                    <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav ml-auto py-0">
                            <a href="<?php echo site_url('Main/login_awal/'); ?>" class="nav-item nav-link">Login</a>
                            <a href="<?php echo site_url('Main/register/'); ?>" class="nav-item nav-link">Register</a>
                        </div>
                    </div>
                <?php } else { ?>
                    <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="index.html" class="nav-item nav-link active">Beranda</a>
                            <a href="<?php echo site_url('toko'); ?>" class="nav-item nav-link">Toko</a>
                            <a href="index.html" class="nav-item nav-link">Transaksi</a>
                        </div>
                        <div class="navbar-nav ml-auto py-0">
                            <a href="<?php echo site_url('main/logout') ?>" class="nav-item nav-link">Logout</a>
                            <a href="<?php echo site_url('main/editprofil') ?>" class="nav-item nav-link">Edit Profil</a>
                        </div>
                    </div>
                <?php } ?>
            </nav>
            <?php
            $loc = $this->uri->segment('1');
            if ($loc == " ") {
                $this->load->view('home/slider');
            }
            ?>
        </div>
    </div>
</div>
