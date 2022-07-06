<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>DARUSSHIDDIQIEN</title>
		<link href="<?=base_url();?>assets/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
		<link href="<?=base_url();?>assets/css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Favicons -->
  <link href="<?=base_url();?>assets/img/favicon.png" rel="icon">
  <link href="<?=base_url();?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?=base_url();?>assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="<?=base_url();?>assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?=base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?=base_url();?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?=base_url();?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?=base_url();?>assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?=base_url();?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?=base_url();?>assets/css/style.css" rel="stylesheet">
  <link href="<?=base_url();?>assets/css/style2.css" rel="stylesheet">
	</head>
	<body class="bg-gradient-success">

    <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

    
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="active" href="<?= site_url('home')?>">Home</a></li>
          </li>
          <li class="dropdown"><a href="#"><span>Profil Pondok</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="<?=site_url('Pengaturan/frontendbiodata')?>">Biodata</a></li>
              <li><a href="<?=site_url('Pengaturan/frontendvisi')?>">Visi & Misi</a></li>  
            </ul>
          </li>
          <li><a href="<?= site_url('/home/program')?>">Program Pondok</a></li>
          <li><a href="<?= site_url('/home/ekskul')?>">Ekstrakulikuler</a></li>
          <li class="dropdown"><a href="#"><span>Informasi</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Prosedur Pendaftaran</a></li>
              <li><a href="<?=site_url('pengumuman/index')?>">Pengumuman</a></li>  
            </ul>
          </li>
          </nav><!-- .navbar -->
            
      <a href="<?= site_url('home/login')?>" class="get-started-btn">Login</a>
      </div>
      
        </ul>
  </header><!-- End Header -->
      
  