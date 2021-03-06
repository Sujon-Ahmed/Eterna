<?php
session_start();
include 'admin/main.php';
$obj = new Main();
// method for fetch email and phone
$email = $obj->profile_retrives();
if ($email->num_rows > 0) {
  while ($row = $email->fetch_object()) {
    $admin_email = $row->admin_email;
    $admin_phone = $row->admin_phone;
  }
}
// get all data for banner
$banner = $obj->get_banner_data();
// card details
$card_details = $obj->get_data_limit();
// about details
$about_details = $obj->get_about_data();
// service details
$service_details = $obj->get_service_limit();
// client description
$description = $obj->catch_desc();
// client brand
$brand = $obj->get_brands();
// about page card
$abs_card = $obj->get_card_limit();
// testimonial section
$testimonial = $obj->get_testimonial();
// testimonial description
$testimonial_description = $obj->get_testimonial_desc_with_limit();
// skill description
$skill_desc = $obj->get_skill_desc_limit();
// skill content
$skill_content = $obj->get_skill_content_limit();
// skill progress bar
$skill_progress = $obj->get_progress();
// team member
$team = $obj->get_team_limit();
// portfolio section
$get_portfolio = $obj->get_port_cat();
// portfolio image
$get_port_image = $obj->get_port_cat_data();
// method for blog category
$get_blog_category = $obj->get_cat();
// get location
$get_location = $obj->get_location();
if ($get_location->num_rows > 0) {
  while ($row = $get_location->fetch_object()) {
    $title = $row->address_title;
  }
}
// get social media
$get_social_media = $obj->get_social();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Eterna</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- Favicons -->
  <link href="assets/img/favicon/favicon.png" rel="icon">
  <link href="assets/img/favicon/favicon.png" rel="apple-touch-icon">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <!-- <link rel="stylesheet" href="assets/css/all.min.css"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <style>
    .blog-pagination ul li a {
      border: 1px solid #ddd;
    }

    .blog-pagination ul li a.active {
      background-color: #e96b56;
      color: #fff;
    }
  </style>
</head>

<body>
  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com"><?php echo $admin_email; ?></a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span><?php echo $admin_phone; ?></span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section>
  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <h1><a href="index.php">Eterna</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="<?= (basename($_SERVER['PHP_SELF']) == "index.php") ? "active" : "" ?>" href="index.php">Home</a></li>
          <li><a class="<?= (basename($_SERVER['PHP_SELF']) == "about.php") ? "active" : "" ?>" href="about.php">About</a></li>
          <li><a class="<?= (basename($_SERVER['PHP_SELF']) == "services.php") ? "active" : "" ?>" href="services.php">Services</a></li>
          <li><a class="<?= (basename($_SERVER['PHP_SELF']) == "portfolio.php") ? "active" : "" ?>" href="portfolio.php">Portfolio</a></li>
          <li><a class="<?= (basename($_SERVER['PHP_SELF']) == "team.php") ? "active" : "" ?>" href="team.php">Team</a></li>
          <li><a class="<?= (basename($_SERVER['PHP_SELF']) == "pricing.php") ? "active" : "" ?>" href="pricing.php">Pricing</a></li>
          <li><a class="<?= (basename($_SERVER['PHP_SELF']) == "blog.php") ? "active" : "" ?>" href="blog.php">Blog</a></li>
          <!-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li> -->
          <li><a class="<?= (basename($_SERVER['PHP_SELF']) == "contact.php") ? "active" : "" ?>" href="contact.php">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->