<?php
    session_start();
    if(!isset($_SESSION['id'])){
        header('location:login.php');
    }
    include "flash_data.php";
    include "main.php";
    $obj = new Main();

    $email = $obj->profile_retrives();
    if($email->num_rows > 0){
      while($row = $email->fetch_object()){
        $admin_photo = $row->admin_photo;
      }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>
     <!-- Custom fonts for this template-->
     <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
        <style>
            .parsley-errors-list li{
                color: red;
                display: block;
                width: 100%;
                padding-top: 5px;
            }
        </style>
        <!-- Custom styles for this template-->
        <link href="css/sb-admin-2.min.css" rel="stylesheet">
        <!-- Custom styles for this page -->
        <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
        <!-- some script  -->
        <link rel="stylesheet" href="css/toastr.css">
        <link rel="stylesheet" href="summernote/summernote-bs4.min.css">
        <script src="js/jquery.js"></script>
        <script src="js/jquery-3.4.1.min.js"></script>
      
       <link rel="stylesheet" href="">
        <script src="js/toastr.min.js"></script>
        <!-- <script src="js/bootstrap.bundle.min.js"></script> -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.js" integrity="sha512-Fq/wHuMI7AraoOK+juE5oYILKvSPe6GC5ZWZnvpOO/ZPdtyA29n+a5kVLP4XaLyDy9D1IBPYzdFycO33Ijd0Pg==" crossorigin="anonymous"></script>
</head>
<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3"> ETERNA</div>
            </a>
            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item <?php if($page == 'dashboard'){echo 'active';} ?>">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne"
                    aria-expanded="true" aria-controls="collapseOne">
                    <i class="fas fa-fw fa-bars"></i>
                    <span>Manage Top Navbar</span>
                </a>
                <div id="collapseOne" class="collapse <?php if($page == 'banner'){echo 'show';} ?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Carousel</h6>

                        <a class="collapse-item <?php if($sub_page == 'create_banner'){echo 'active';} ?>" href="create_banner.php">Create Banner</a>

                        <a class="collapse-item <?php if($sub_page == 'view_banner'){echo 'active';} ?>" href="view_banner.php">View Banner</a>
                        
                    </div>
                </div>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">
              <!-- Nav Item - Pages Collapse Menu -->
              <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-id-card"></i>
                    <span>Manage Card</span>
                </a>
                <div id="collapseTwo" class="collapse <?php if($page == 'card'){echo 'show';} ?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Card</h6>

                        <a class="collapse-item <?php if($sub_page == 'create_card'){echo 'active';} ?>" href="create_card.php">Create Card</a>

                        <a class="collapse-item <?php if($sub_page == 'view_card'){echo 'active';} ?>" href="view_card.php">View Card</a>
                        
                    </div>
                </div>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree"
                    aria-expanded="true" aria-controls="collapseThree">
                    <i class="fab fa-fw fa-elementor"></i>
                    <span>Manage ABout</span>
                </a>
                <div id="collapseThree" class="collapse <?php if($page == 'about'){echo 'show';} ?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">About</h6>

                        <a class="collapse-item <?php if($sub_page == 'create_about'){echo 'active';} ?>" href="create_about.php">Create About</a>

                        <a class="collapse-item <?php if($sub_page == 'view_about'){echo 'active';} ?>" href="view_about.php">View About</a>
                        
                    </div>
                </div>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFour"
                    aria-expanded="true" aria-controls="collapseFour">
                    <i class="fas fa-fw fa-hands-helping"></i>
                    <span>Manage Services</span>
                </a>
                <div id="collapseFour" class="collapse <?php if($page == 'services'){echo 'show';} ?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Services</h6>

                        <a class="collapse-item <?php if($sub_page == 'create_service'){echo 'active';} ?>" href="create_service.php">Create Services</a>

                        <a class="collapse-item <?php if($sub_page == 'view_service'){echo 'active';} ?>" href="view_service.php">View Services</a>
                        
                    </div>
                </div>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFive"
                    aria-expanded="true" aria-controls="collapseFive">
                    <i class="fas fa-fw fa-building"></i>
                    <span>Manage Clients</span>
                </a>
                <div id="collapseFive" class="collapse <?php if($page == 'clients'){echo 'show';} ?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Clients</h6>
                        <a class="collapse-item <?php if($sub_page == 'desc'){echo 'active';} ?>" href="client_desc.php">Description</a>
                        <a class="collapse-item <?php if($sub_page == 'brand'){echo 'active';} ?>" href="create_brand.php">Brands</a>
                    </div>
                </div>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSix"
                    aria-expanded="true" aria-controls="collapseSix">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Manage Subscribers</span>
                </a>
                <div id="collapseSix" class="collapse <?php if($page == 'subscribe'){echo 'show';} ?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Subscribers</h6>
                        <a class="collapse-item <?php if($sub_page == 'subscribers'){echo 'active';} ?>" href="view_subscriber.php">Subscribers</a>
                    </div>
                </div>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSeven"
                    aria-expanded="true" aria-controls="collapseSeven">
                    <i class="fas fa-fw fa-address-card"></i>
                    <span>Manage About Card</span>
                </a>
                <div id="collapseSeven" class="collapse <?php if($page == 'abs'){echo 'show';} ?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">About Card</h6>
                        <a class="collapse-item <?php if($sub_page == 'create_abs'){echo 'active';} ?>" href="create_abs.php">Create</a>
                        <a class="collapse-item <?php if($sub_page == 'view_abs'){echo 'active';} ?>" href="view_abs.php">View</a>
                    </div>
                </div>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseEight"
                    aria-expanded="true" aria-controls="collapseEight">
                    <i class="fas fa-fw fa-comment-dots"></i>
                    <span>Manage Testimonials</span>
                </a>
                <div id="collapseEight" class="collapse <?php if($page == 'testimonials'){echo 'show';} ?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Testimonials</h6>
                        <a class="collapse-item <?php if($sub_page == 'desc_testimonial'){echo 'active';} ?>" href="create_testimonial_desc.php">Description</a>
                        <a class="collapse-item <?php if($sub_page == 'create_testimonial'){echo 'active';} ?>" href="create_testimonial.php">Create</a>
                        <a class="collapse-item <?php if($sub_page == 'view_testimonial'){echo 'active';} ?>" href="view_testimonial.php">View</a>
                    </div>
                </div>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseNine"
                    aria-expanded="true" aria-controls="collapseNine">
                    <i class="fas fa-fw fa-percent"></i>
                    <span>Manage Our Skills</span>
                </a>
                <div id="collapseNine" class="collapse <?php if($page == 'skill'){echo 'show';} ?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Skills</h6>
                        <a class="collapse-item <?php if($sub_page == 'skill_desc'){echo 'active';} ?>" href="skill_desc.php">Description</a>
                        <a class="collapse-item <?php if($sub_page == 'content_test'){echo 'active';} ?>" href="content_create_test.php">Content</a>
                        <a class="collapse-item <?php if($sub_page == 'skill_progress'){echo 'active';} ?>" href="create_progress.php">Progress</a>
                    </div>
                </div>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTen"
                    aria-expanded="true" aria-controls="collapseTen">
                    <i class="fas fa-fw fa-image"></i>
                    <span>Manage Portfolio</span>
                </a>
                <div id="collapseTen" class="collapse <?php if($page == 'portfolio'){echo 'show';} ?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Portfolio</h6>
                        <a class="collapse-item <?php if($sub_page == 'create_port_category'){echo 'active';} ?>" href="cr_port_cat.php">Category</a>
                        <a class="collapse-item <?php if($sub_page == 'port_image'){echo 'active';} ?>" href="port_image.php">Image</a>
                    </div>
                </div>
            </li>
             <!-- Divider -->
             <hr class="sidebar-divider">
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseEleven"
                    aria-expanded="true" aria-controls="collapseEleven">
                    <i class="fas fa-fw fa-user-friends"></i>
                    <span>Manage Team</span>
                </a>
                <div id="collapseEleven" class="collapse <?php if($page == 'team'){echo 'show';} ?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Team</h6>
                        <a class="collapse-item <?php if($sub_page == 'create_team'){echo 'active';} ?>" href="create_team.php">Create</a>
                        <a class="collapse-item <?php if($sub_page == 'view_team'){echo 'active';} ?>" href="view_team.php">View</a>
                    </div>
                </div>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBlog"
                    aria-expanded="true" aria-controls="collapseBlog">
                    <i class="fas fa-fw fa-blog"></i>
                    <span>Manage Blog</span>
                </a>
                <div id="collapseBlog" class="collapse <?php if($page == 'blog'){echo 'show';} ?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Blog</h6>
                        <a class="collapse-item <?php if($sub_page == 'create_blog_category'){echo 'active';} ?>" href="cr_blog_cat.php">Category</a>
                        <a class="collapse-item <?php if($sub_page == 'create_blog_post'){echo 'active';} ?>" href="cr_blog_post.php">Post</a>
                    </div>
                </div>
            </li>
              <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwelve"
                    aria-expanded="true" aria-controls="collapseTwelve">
                    <i class="fas fa-fw fa-envelope"></i>
                    <span>Manage Massage</span>
                </a>
                <div id="collapseTwelve" class="collapse <?php if($page == 'msg'){echo 'show';} ?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Message</h6>
                        <a class="collapse-item <?php if($sub_page == 'view_msg'){echo 'active';} ?>" href="view_msg.php">View</a>
                    </div>
                </div>
            </li>
              <!-- Divider -->
              <hr class="sidebar-divider">
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThirteen"
                    aria-expanded="true" aria-controls="collapseThirteen">
                    <i class="fas fa-fw fa-envelope"></i>
                    <span>Manage Pricing</span>
                </a>
                <div id="collapseThirteen" class="collapse <?php if($page == 'pricing'){echo 'show';} ?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Pricing</h6>
                        <a class="collapse-item <?php if($sub_page == 'cr_pricing'){echo 'active';} ?>" href="create_pricing.php">Create</a>
                    </div>
                </div>
            </li>
            <hr class="sidebar-divider">
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFourteen"
                    aria-expanded="true" aria-controls="collapseFourteen">
                    <i class="fas fa-fw fa-envelope"></i>
                    <span>Manage Location</span>
                </a>
                <div id="collapseFourteen" class="collapse <?php if($page == 'address'){echo 'show';} ?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Address Location</h6>
                        <a class="collapse-item <?php if($sub_page == 'map'){echo 'active';} ?>" href="create_location.php">Location</a>
                    </div>
                </div>
            </li>
            <hr class="sidebar-divider">
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFifteen"
                    aria-expanded="true" aria-controls="collapseFifteen">
                    <i class="fas fa-fw fa-envelope"></i>
                    <span>Manage Social</span>
                </a>
                <div id="collapseFifteen" class="collapse <?php if($page == 'social'){echo 'show';} ?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Social</h6>
                        <a class="collapse-item <?php if($sub_page == 'brand'){echo 'active';} ?>" href="create_social.php">Social</a>
                    </div>
                </div>
            </li>
            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
            <!-- Sidebar Message -->
            <div class="sidebar-card d-none d-lg-flex">
                <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="...">
                <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
                <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
            </div>
        </ul>
        <!-- End of Sidebar -->
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>
                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>
                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_1.svg"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_2.svg"
                                            alt="...">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_3.svg"
                                            alt="...">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li>
                        <div class="topbar-divider d-none d-sm-block"></div>
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"> <?php echo $_SESSION['name']; ?></span>
                                <?php
                                    if(!empty($admin_photo)){
                                        ?>
                                             <img class="img-profile rounded-circle" src="<?php echo 'uploads/admin/'.$admin_photo; ?>">
                                        <?php
                                    }else{
                                        ?>
                                            <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                                        <?php
                                    }
                                ?>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="edit_profile.php">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" onclick="javascript:return confirm('Leave this page!')" href="logout.php">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>
                <!-- End of Topbar -->