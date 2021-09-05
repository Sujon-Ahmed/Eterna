<?php include 'font_header.php'; ?>
<!-- main section start -->
  <main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="index.php">Home</a></li>
          <li>Portfolio</li>
        </ol>
        <h2>Portfolio</h2>
      </div>
    </section>
    <!-- End Breadcrumbs -->
    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <?php
              if($get_portfolio->num_rows > 0){
                while($row = $get_portfolio->fetch_object()){
                  ?>
                    <li data-filter=".<?php echo $row->slag; ?>"><?php echo $row->cat_name; ?></li>
                  <?php
                }
              }
              ?>
            </ul>
          </div>
        </div>
        <!-- portfolio container -->
        <div class="row portfolio-container">
            <?php
                if($get_port_image->num_rows > 0){
                  while($img_row = $get_port_image->fetch_object()){
                    ?>
                      <div class="col-lg-4 col-md-6 portfolio-item <?php echo $img_row->slag; ?>">
                        <div class="portfolio-wrap">
                          <img src="<?php echo 'admin/uploads/portfolio/'.$img_row->portfolio_image; ?>" class="img-fluid" alt="">
                          <div class="portfolio-info">
                            <h4><?php echo $img_row->portfolio_title; ?></h4>
                            <p><?php echo $img_row->portfolio_title; ?></p>
                            <div class="portfolio-links">
                              <a href="<?php echo 'admin/uploads/portfolio/'.$img_row->portfolio_image; ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                              <a href="portfolio-details.php" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                          </div>
                        </div>
                      </div>
                    <?php
                  }
                }
            ?>
        </div>
      </div>
    </section>
    <!-- End Portfolio Section -->
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
    </section>
    <!-- End Clients Section -->
  </main><!-- End #main -->
<?php include 'font_footer.php'; ?>