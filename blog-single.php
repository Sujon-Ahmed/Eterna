<?php
  include 'font_header.php';
  if(isset($_GET['id'])){
    $post_id = $_GET['id'];
    $get_single_post = $obj->get_single_blog_post($post_id);
    if($get_single_post->num_rows > 0){
      while($row = $get_single_post->fetch_object()){
        $title = $row->blog_post_title;
        $image = $row->blog_post_image;
        $blog_id = $row->blog_post_id;
        $admin = $row->admin_name;
        $blog_created = $row->blog_post_created_at;
        $blog_cat = $row->blog_cat_name;
        $blog_desc = $row->blog_post_desc;
        $cat_id = $row->blog_cat_id;
      }
    }
    $related_blog = $obj->related_post($cat_id);
  }
?>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.php">Home</a></li>
          <li><a href="blog.php">Blog</a></li>
        </ol>
        <h2><?php echo $title; ?></h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Single Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">

            <article class="entry entry-single">

              <div class="entry-img">
                <img src="<?php echo 'admin/uploads/blog/'.$image; ?>" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="blog-single.php?id=<?php echo $blog_id; ?>"><?php echo $title; ?></a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i><a href="blog-single.php?id=<?php echo $blog_id; ?>"><?php echo $admin; ?></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i><a href="blog-single.php?id=<?php echo $blog_id;?>"><?php echo date('M-d-Y h:i A',strtotime($blog_created)); ?></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-tag"></i><a href="blog-single.php?id=<?php echo $blog_id;?>"><?php echo $blog_cat; ?></a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                  <?php echo $blog_desc; ?>
                </p>
              </div>

              <div class="entry-footer">
                <i class="bi bi-folder"></i>
                <ul class="cats">
                  <li><a href="blog-single.php?id=<?php echo $blog_id;?>">Blog</a></li>
                </ul>
                <i class="bi bi-tags"></i>
                <ul class="tags">
                  <li><a href="blog-single.php?id=<?php echo $blog_id;?>"><?php echo $blog_cat; ?></a></li>
                </ul>
              </div>

            </article><!-- End blog entry -->
            
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
                <?php
                  if($related_blog->num_rows > 0){
                    while($rel_blog = $related_blog->fetch_object()){
                      if($rel_blog->blog_post_id != $post_id){
                        
                      ?>
                        <div class="post-item clearfix">
                          <img src="<?php echo 'admin/uploads/blog/'.$rel_blog->blog_post_image; ?>" alt="">
                          <h4><a href="blog-single.php?id=<?php echo $rel_blog->blog_post_id; ?>"><?php echo $rel_blog->blog_post_title; ?></a></h4>
                          <time><?php echo date('M-d-Y h:i A',strtotime($rel_blog->blog_post_created_at)); ?></time>
                        </div>
                      <?php
                      
                    }
                    }
                  }
                ?>
              </div><!-- End sidebar recent posts-->

              <h3 class="sidebar-title">Tags</h3>
              <div class="sidebar-item tags">
                <ul>
                  <?php
                    if($get_blog_category->num_rows > 0){
                      while($cat = $get_blog_category->fetch_object()){
                        ?>
                          <li><a href="cat_wise_post.php?id=<?php echo $cat->blog_cat_id; ?>"><?php echo $cat->blog_cat_name; ?></a></li>
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