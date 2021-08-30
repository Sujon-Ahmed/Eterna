<?php
  include 'font_header.php';
?>
  <!-- main section start -->
  <main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="index.php">Home</a></li>
          <li>Blog</li>
        </ol>
        <h2>Blog</h2>
      </div>
    </section><!-- End Breadcrumbs -->
    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-8 entries">
            <?php
              if( $get_blog_post->num_rows > 0){
                while($row =  $get_blog_post->fetch_object()){
                  ?>
                  <article class="entry">
                    <div class="entry-img">
                      <img src="<?php echo 'admin/uploads/blog/'.$row->blog_post_image; ?>" alt="" class="img-fluid">
                    </div>
                    <h2 class="entry-title">
                      <a href="blog-single.html"><?php echo $row->blog_post_title; ?></a>
                    </h2>
                    <div class="entry-meta">
                      <ul>
                        <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html"><?php echo $row->admin_name; ?></a></li>
                        <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><?php echo date('M-d-Y h:i A',strtotime($row->blog_post_created_at)); ?></a></li>
                        <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-single.html">0 Comments</a></li>
                      </ul>
                    </div>
                    <div class="entry-content">
                      <p>
                        <?php echo $row->blog_post_desc; ?>
                      </p>
                      <div class="read-more">
                        <a href="blog-single.html">Read More</a>
                      </div>
                    </div>
                  </article>
                  <?php
                }
              }
            ?>
            
            <div class="blog-pagination">
              <ul class="justify-content-center">
                <li><a href="#">1</a></li>
                <li class="active"><a href="#">2</a></li>
                <li><a href="#">3</a></li>
              </ul>
            </div>
          </div><!-- End blog entries list -->
          <div class="col-lg-4">
            <div class="sidebar">
              <h3 class="sidebar-title">Search</h3>
              <div class="sidebar-item search-form">
                <form action="">
                  <input type="text">
                  <button type="submit"><i class="bi bi-search"></i></button>
                </form>
              </div><!-- End sidebar search form-->
              <h3 class="sidebar-title">Categories</h3>
              <div class="sidebar-item categories">
                <ul>
                  <li><a href="#">General <span>(25)</span></a></li>
                  <li><a href="#">Lifestyle <span>(12)</span></a></li>
                  <li><a href="#">Travel <span>(5)</span></a></li>
                  <li><a href="#">Design <span>(22)</span></a></li>
                  <li><a href="#">Creative <span>(8)</span></a></li>
                  <li><a href="#">Educaion <span>(14)</span></a></li>
                </ul>
              </div><!-- End sidebar categories-->
              <h3 class="sidebar-title">Recent Posts</h3>
              <div class="sidebar-item recent-posts">
                <div class="post-item clearfix">
                  <img src="assets/img/blog/blog-recent-1.jpg" alt="">
                  <h4><a href="blog-single.html">Nihil blanditiis at in nihil autem</a></h4>
                  <time datetime="2020-01-01">Jan 1, 2020</time>
                </div>
                <div class="post-item clearfix">
                  <img src="assets/img/blog/blog-recent-2.jpg" alt="">
                  <h4><a href="blog-single.html">Quidem autem et impedit</a></h4>
                  <time datetime="2020-01-01">Jan 1, 2020</time>
                </div>
                <div class="post-item clearfix">
                  <img src="assets/img/blog/blog-recent-3.jpg" alt="">
                  <h4><a href="blog-single.html">Id quia et et ut maxime similique occaecati ut</a></h4>
                  <time datetime="2020-01-01">Jan 1, 2020</time>
                </div>
                <div class="post-item clearfix">
                  <img src="assets/img/blog/blog-recent-4.jpg" alt="">
                  <h4><a href="blog-single.html">Laborum corporis quo dara net para</a></h4>
                  <time datetime="2020-01-01">Jan 1, 2020</time>
                </div>
                <div class="post-item clearfix">
                  <img src="assets/img/blog/blog-recent-5.jpg" alt="">
                  <h4><a href="blog-single.html">Et dolores corrupti quae illo quod dolor</a></h4>
                  <time datetime="2020-01-01">Jan 1, 2020</time>
                </div>
              </div><!-- End sidebar recent posts-->
              <h3 class="sidebar-title">Category</h3>
              <div class="sidebar-item tags">
                <ul>
                  <?php 
                    if($get_blog_category->num_rows > 0){
                      while($row = $get_blog_category->fetch_object()){
                        ?>
                          <li><a href="#"><?php echo $row->blog_cat_name; ?></a></li>
                        <?php
                      }
                    }
                  ?>
                  
                </ul>
              </div><!-- End sidebar tags-->
            </div><!-- End sidebar -->
          </div><!-- End blog sidebar -->
        </div>
      </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->
  <?php include 'font_footer.php'; ?>