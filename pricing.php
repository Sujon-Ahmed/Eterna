<?php
  include 'font_header.php';
  // free pricing
  $free = $obj->free();
  // business pricing
  $business = $obj->business();
  //  developer pricing
  $developer = $obj->developer();
  
?>
  <main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="index.php">Home</a></li>
          <li>Pricing</li>
        </ol>
        <h2>Pricing</h2>
      </div>
    </section><!-- End Breadcrumbs -->
    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container">
        <div class="row no-gutters">
        <!-- Free pricing Table -->
        <?php
          if($free->num_rows > 0){
            while($row = $free->fetch_object()){
              ?>
              <div class="col-lg-4 box">
                <h3><?php echo $row->pricing_title; ?></h3>
                <h4>$<?php echo $row->pricing_price; ?><span>per month</span></h4>
                <ul>
                    <li><?php echo $row->pricing_desc; ?></li>
                </ul>
                <a href="#" class="buy-btn">Buy Now</a>
              </div>
              <?php
            }
          }
        ?>
        <!-- Business Pricing Table -->
          <?php
            if($business->num_rows > 0){
              while($row = $business->fetch_object()){
                ?>
                <div class="col-lg-4 box featured">
                  <h3><?php echo $row->pricing_title; ?></h3>
                  <h4>$<?php echo $row->pricing_price; ?><span>per month</span></h4>
                  <ul>
                      <li><?php echo $row->pricing_desc; ?></li>
                  </ul>
                  <a href="#" class="buy-btn">Buy Now</a>
                </div>
                <?php
              }
            }
          ?>
          <!-- Developer pricing Table -->
          <?php
            if($developer->num_rows > 0){
              while($row = $developer->fetch_object()){
                ?>
                <div class="col-lg-4 box">
                  <h3><?php echo $row->pricing_title; ?></h3>
                  <h4>$<?php echo $row->pricing_price; ?><span>per month</span></h4>
                  <ul>
                      <li><?php echo $row->pricing_desc; ?></li>
                  </ul>
                  <a href="#" class="buy-btn">Buy Now</a>
                </div>
                <?php
              }
            }
          ?>
          

          <!-- <div class="col-lg-4 box featured">
            <h3>Business</h3>
            <h4>$29<span>per month</span></h4>
            <ul>
              <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
              <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
              <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
              <li><i class="bx bx-check"></i> Pharetra massa massa ultricies</li>
              <li><i class="bx bx-check"></i> Massa ultricies mi quis hendrerit</li>
            </ul>
            <a href="#" class="buy-btn">Buy Now</a>
          </div> -->

          <!-- <div class="col-lg-4 box">
            <h3>Developer</h3>
            <h4>$49<span>per month</span></h4>
            <ul>
              <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
              <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
              <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
              <li><i class="bx bx-check"></i> Pharetra massa massa ultricies</li>
              <li><i class="bx bx-check"></i> Massa ultricies mi quis hendrerit</li>
            </ul>
            <a href="#" class="buy-btn">Buy Now</a>
          </div> -->

        </div>
      </div>
    </section><!-- End Pricing Section -->
  </main><!-- End #main -->
 <?php include 'font_footer.php'; ?>