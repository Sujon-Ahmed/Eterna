<?php
  include 'font_header.php';
  	// pagination code
	$num_per_page = 02;
	if(isset($_GET["page"])){
		$page = $_GET["page"];
	}else{
		$page=1;
	}
	// echo $page;
	$start_from = ($page-1)*02;
  $get_blog_post = $obj->get_b_post($start_from,$num_per_page);
  $get_blog_post_side = $obj->get_b_post_side();
  // $get_cat_num = $obj->cat_number();
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
              if($get_blog_post->num_rows > 0){
                while($row =  $get_blog_post->fetch_object()){
                  ?>
                  <article class="entry">
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
                      </ul>
                    </div>
                    <div class="entry-content">
                      <p>
                      <?php
                          $details = $row->blog_post_desc;
                          if(strlen($details) > 500){
                            echo substr($details,0,500).'...';
                          }else{
                            echo $details;
                          }
                        ?>
                      </p>
                      <div class="read-more">
                        <a href="blog-single.php?id=<?php echo $row->blog_post_id; ?>">Read More</a>
                      </div>
                    </div>
                  </article>
                  <?php
                }
              }
            ?>
           <!-- PAGINATION -->
          <div class="blog-pagination">
            <?php
              $total_record = $obj->get_all_blog();
              $total_page = ceil($total_record/$num_per_page);
            ?>
            <ul class="justify-content-center">
              <?php
                if($page>1){
                  ?>
                    <li>
                      <a href="blog.php?page=<?php echo $page-1;?>">Prev</a>
                    </li>
                  <?php
                }
                for($i=1;$i<$total_page;$i++){
                  ?>
                    <li>
                      <a class="<?php if($i == $page){echo 'active';} ?>" href="blog.php?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                    </li>
                  <?php
                }
                if($i>$page){
                  ?>
                    <li>
                      <a href="blog.php?page=<?php echo $page+1;?>">Next</a>
                    </li>
                  <?php
                }
              ?>
            </ul>
          </div>
          <!-- PAGINATION -->
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
                <?php 
                    if($get_blog_category->num_rows > 0){
                      while($row = $get_blog_category->fetch_object()){
                        ?>
                          <li><a href="cat_wise_post.php?id=<?php echo $row->blog_cat_id; ?>"><?php echo $row->blog_cat_name; ?><span><?php echo $count_post = $obj->count_posts($row->blog_cat_id); ?></span></a></li>
                        <?php
                      }
                    }
                  ?>
                </ul>
              </div><!-- End sidebar categories-->
              <h3 class="sidebar-title">Latest Posts</h3>
              <div class="sidebar-item recent-posts">
              <?php
                if($get_blog_post_side->num_rows > 0){
                  while($rows =  $get_blog_post_side->fetch_object()){
                    ?>
                  <div class="post-item clearfix">
                    <img src="<?php echo 'admin/uploads/blog/'.$rows->blog_post_image; ?>" alt="" class="img-fluid">
                    <h4><a href="blog-single.php?id=<?php echo $rows->blog_post_id; ?>"><?php echo $rows->blog_post_title; ?></a></h4>
                    <time><a href="blog-single.php?id=<?php echo $rows->blog_post_id; ?>"><?php echo date('M-d-Y h:i A',strtotime($rows->blog_post_created_at)); ?></a></time>
                  </div>
                  <?php
                  }
                }
              ?>
              </div><!-- End sidebar recent posts-->
            </div><!-- End sidebar -->
          </div><!-- End blog sidebar -->
        </div>
      </div>
    </section><!-- End Blog Section -->
  </main><!-- End #main -->
  <?php include 'font_footer.php'; ?>

