<?php include 'font_header.php'; ?>
  <main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="index.php">Home</a></li>
          <li>Team</li>
        </ol>
        <h2>Team</h2>
      </div>
    </section>
    <!-- End Breadcrumbs -->
    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container">
        <div class="row">
          <?php
            if($team->num_rows > 0){
              while($row = $team->fetch_object()){
                ?>
                  <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                      <img class="img-fluid" src="<?php echo 'admin/uploads/team/'.$row->team_m_img; ?>" alt="">
                      <h4><?php echo $row->team_m_name; ?></h4>
                      <span><?php echo $row->team_m_profession; ?></span>
                      <p>
                       <?php echo $row->team_m_about; ?>
                      </p>
                      <div class="social">
                        <a href=""><i class="bi bi-twitter"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
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
    <!-- End Team Section -->
  </main><!-- End #main -->
 <?php include 'font_footer.php'; ?>