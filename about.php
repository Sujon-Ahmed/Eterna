<?php include 'font_header.php'; ?>
  <main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>About Us</li>
        </ol>
        <h2>About Us</h2>
      </div>
    </section><!-- End Breadcrumbs -->
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
    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container">
        <div class="row no-gutters">
            <?php
            if($abs_card->num_rows > 0){
              $si = 1;
              while($abs_row = $abs_card->fetch_object()){
                ?>
                  <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                    <div class="count-box">
                      <i style="color: #e6573f;" class="<?php echo $abs_row->ab_icon; ?> fa-2x"></i>
                      <span data-purecounter-start="0" data-purecounter-end="<?php echo $abs_row->ab_max_value; ?>" data-purecounter-duration="1" class="purecounter"></span>
                      <p><strong><?php echo $abs_row->ab_title; ?></strong> <?php echo $abs_row->ab_desc; ?></p>
                      <a href="#">Find out more &raquo;</a>
                    </div>
                  </div>
                <?php
                $si++;
              }
            }
            ?>
        </div>
      </div>
    </section><!-- End Counts Section -->
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

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container">

        <div class="section-title">
          <h2>Testimonials</h2>
          <?php 
            if($testimonial_description->num_rows > 0){
              while($desc_row = $testimonial_description->fetch_object()){
                ?>
                  <p><?php echo $desc_row->testimonial_desc; ?></p>
                <?php
              }
            }
          ?>
        </div>

        <div class="row">
          <?php
            if($testimonial->num_rows > 0){
              while($row_test = $testimonial->fetch_object()){
                ?>
                  <div class="col-lg-6">
                    <div class="testimonial-item mt-4">
                      <img src="<?php echo 'admin/uploads/testimonial/'.$row_test->test_img; ?>" class="testimonial-img" alt="">
                      <h3><?php echo $row_test->test_name; ?></h3>
                      <h4><?php echo $row_test->test_profession; ?></h4>
                      <p>
                        <!-- <i style="color:royalblue;"  class="bx bxs-quote-alt-left quote-icon-left"></i> -->
                        <?php if(!empty($row_test->test_msg)){echo $row_test->test_msg;} ?>
                        <!-- <i style="color:royalblue;" class="bx bxs-quote-alt-right quote-icon-right"></i> -->
                      </p>
                    </div>
                  </div>
                <?php
              }
            }
          ?>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

  </main><!-- End #main -->

 <?php include 'font_footer.php'; ?>