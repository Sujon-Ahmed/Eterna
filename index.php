<?php
 include 'font_header.php';
 ?>
  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
        <div class="carousel-inner" role="listbox">
          <?php
            if($banner->num_rows > 0){
              $i = 'active';
              while($all_data = $banner->fetch_object()){
                ?>
                <div class="carousel-item <?php echo $i; ?>" style="background: url(<?php echo 'admin/uploads/banner/'.$all_data->banner_img; ?>)">
                  <div class="carousel-container">
                    <div class="carousel-content">
                      <h2 class="animate__animated animate__fadeInDown"><?php echo $all_data->banner_title; ?></h2>
                      <p class="animate__animated animate__fadeInUp"><?php echo $all_data->banner_desc; ?></p>
                      <a href="" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
                    </div>
                  </div>
                </div>
                <?php
                $i++;
              }
            }
          ?>
          <!-- Slide 1 -->
        </div>
        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>
        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>
      </div>
    </div>
  </section><!-- End Hero -->
  <main id="main">
    <!-- ======= Featured Section ======= -->
    <section id="featured" class="featured">
      <div class="container">

        <div class="row">
          <?php
            if($card_details->num_rows > 0){
              while($details = $card_details->fetch_object()){
                ?>
                  <div class="col-lg-4">
                      <div class="icon-box">
                        <i class="<?php echo $details->card_icon; ?> fa-2x cards"></i>
                        <h3><a href=""><?php echo $details->card_title; ?></a></h3>
                        <p><?php echo $details->card_desc; ?></p>
                      </div>
                  </div>
                <?php
              }
            }
          ?>
        </div>

      </div>
    </section><!-- End Featured Section -->
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">
        <div class="row">
          <?php
            if($about_details->num_rows > 0){
              while($rows = $about_details->fetch_object()){
                ?>
                  <div class="col-lg-6">
                    <img src="<?php echo 'admin/uploads/about/'.$rows->about_image; ?>" class="img-fluid" alt="">
                  </div>
                  <div class="col-lg-6 pt-4 pt-lg-0 content">
                    <h3><?php echo $rows->about_title; ?></h3>
                    <p class="fst-italic">
                      <?php echo $rows->about_desc; ?>
                    </p>
                  </div>
                <?php
              }
            }
          ?>
        </div>

      </div>
    </section><!-- End About Section -->
    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">
        <div class="row">
        <?php
            if($service_details->num_rows > 0){
              while($row = $service_details->fetch_object()){
                ?>
                  <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                    <div class="icon-box">
                      <div class="icon"><i class="<?php echo $row->service_icon;?> fa-2x"></i></div>
                      <h4><a href=""><?php echo $row->service_title; ?></a></h4>
                      <p><?php echo $row->service_desc; ?></p>
                    </div>
                  </div>
                <?php
              }
            }
          ?>
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container">

        <div class="section-title">
          <h2>Clients</h2>
          <?php 
          if($description->num_rows > 0){
            while($row = $description->fetch_object()){
              ?>
                <p><?php echo $row->client_desc; ?></p>
              <?php
            }
          }
          ?>
        </div>

        <div class="clients-slider swiper-container">
          <div class="swiper-wrapper align-items-center">
            <?php
              if($brand->num_rows > 0){
                $si = 1;
                while($row = $brand->fetch_object()){
                  ?>
                    <div class="swiper-slide"><img src="<?php echo 'admin/uploads/brands/'.$row->brand_img; ?>" class="img-fluid" alt=""></div>
                  <?php
                  $si++;
                }
              }
            ?>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Clients Section -->

  </main><!-- End #main -->

  <?php include 'font_footer.php'; ?>