<?php
  include 'font_header.php';
  if(isset($_GET['id'])){
    $post_id = $_GET['id'];
    $get_single_post = $obj->get_single_blog_post($post_id);
  }
?>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <?php 
    if($get_single_post->num_rows > 0){
      while($row = $get_single_post->fetch_object()){
        ?>
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.php">Home</a></li>
          <li><a href="blog.php">Blog</a></li>
        </ol>
        <h2><?php echo $row->blog_post_title; ?></h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Single Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">

            <article class="entry entry-single">

              <div class="entry-img">
                <img src="<?php echo 'admin/uploads/blog/'.$row->blog_post_image; ?>" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="blog-single.php?id=<?php echo $row->blog_post_id; ?>"><?php echo $row->blog_post_title; ?></a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.php?id=<?php echo $row->blog_post_id; ?>"><?php echo $row->admin_name; ?></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.php?id=<?php echo $row->blog_post_id; ?>"><?php echo date('M-d-Y h:i A',strtotime($row->blog_post_created_at)); ?></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-tag"></i> <a href="blog-single.php?id=<?php echo $row->blog_post_id; ?>"><?php echo $row->blog_cat_name; ?></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-single.php?id=<?php echo $row->blog_post_id; ?>">0 Comments</a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                  <?php echo $row->blog_post_desc; ?>
                </p>
              </div>

              <div class="entry-footer">
                <i class="bi bi-folder"></i>
                <ul class="cats">
                  <li><a href="#">Blog</a></li>
                </ul>
                <i class="bi bi-tags"></i>
                <ul class="tags">
                  <li><a href="#"><?php echo $row->blog_cat_name; ?></a></li>
                </ul>
              </div>

            </article><!-- End blog entry -->
            <?php
            }
          }
          ?>
            <div class="blog-author d-flex align-items-center">
              <div>
                <h4>Comments</h4>
                <div>
                  <div class="fb-comments" data-href="http://localhost/Eterna/blog-single.php?id=<?php echo $_GET['id']; ?>" data-width="" data-numposts="5"></div>
                </div>
              </div>
            </div><!-- End blog author bio -->

           

          </div><!-- End blog entries list -->

          <div class="col-lg-4">

            <div class="sidebar">

              <h3 class="sidebar-title">Search</h3>
              <div class="sidebar-item search-form">
                <form action="">
                  <input type="text">
                  <button type="submit"><i class="bi bi-search"></i></button>
                </form>
              </div><!-- End sidebar search formn-->
              <h3 class="sidebar-title">Related Posts</h3>
              <div class="sidebar-item recent-posts">
                <div class="post-item clearfix">
                  <img src="assets/img/blog/blog-recent-1.jpg" alt="">
                  <h4><a href="blog-single.html">Nihil blanditiis at in nihil autem</a></h4>
                  <time datetime="2020-01-01">Jan 1, 2020</time>
                </div>
              </div><!-- End sidebar recent posts-->

              <h3 class="sidebar-title">Tags</h3>
              <div class="sidebar-item tags">
                <ul>
                  <?php
                    if($get_blog_category->num_rows > 0){
                      while($cat = $get_blog_category->fetch_object()){
                        ?>
                          <li><a href="#"><?php echo $cat->blog_cat_name; ?></a></li>
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
    </section><!-- End Blog Single Section -->

  </main><!-- End #main -->

  <?php include 'font_footer.php'; ?>