<?php include 'font_header.php'; ?>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Services</li>
        </ol>
        <h2>Services</h2>

      </div>
    </section><!-- End Breadcrumbs -->

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

    <!-- ======= Our Skills Section ======= -->
    <section id="skills" class="skills">
      <div class="container">

        <div class="section-title">
          <h2>Our Skills</h2>
          <?php
            if($skill_desc->num_rows > 0){
              while($row = $skill_desc->fetch_object()){
                ?>
                  <p><?php echo $row->skill_desc; ?></p>
                <?php
              }
            }
          ?>
        </div>

        <div class="row">
          <?php
            if($skill_content->num_rows > 0){
              while($row_content = $skill_content->fetch_object()){
                ?>
                  <div class="col-lg-6">
                    <img src="<?php echo 'admin/uploads/skill/'.$row_content->content_image; ?>" class="img-fluid" alt="">
                  </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content">
            <h3><?php echo $row_content->content_title; ?></h3>
            <p class="fst-italic">
              <?php echo $row_content->content_desc; ?>
            </p>
              <?php
                if($skill_progress->num_rows > 0){
                  while($progress_row = $skill_progress->fetch_object()){
                    ?>
                        <div class="skills-content">
                          <div class="progress">
                            <span class="skill"><?php echo $progress_row->skill_cat_name; ?> <i class="val"><?php echo $progress_row->skill_cat_mx_val.'%'; ?></i></span>
                            <div class="progress-bar-wrap">
                              <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $progress_row->skill_cat_mx_val; ?>" aria-valuemin="0" aria-valuemax="<?php echo $progress_row->skill_cat_mx_val; ?>"></div>
                            </div>
                          </div>
                        </div>
                    <?php
                  }
                }
              ?>
          </div>
                <?php
              }
            }
          ?>
        </div>

      </div>
    </section><!-- End Our Skills Section -->

  </main><!-- End #main -->

  <?php include 'font_footer.php'; ?>