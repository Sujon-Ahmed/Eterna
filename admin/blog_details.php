<?php 
    include 'header.php'; 
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $post = $obj->get_blog_details($id);
        if($post->num_rows > 0){
            while($blog = $post->fetch_object()){
                $title = $blog->blog_post_title;
                $image = $blog->blog_post_image;
                $desc = $blog->blog_post_desc;
                $author = $blog->admin_name;
            }
        }
    }


?>

<div class="container-fluid mb-5">

    <!-- Page Heading -->
    <h1 class="h3 mb-1 text-gray-800">View Details Banner</h1>
    <p class="mb-4">Dashboard / View / Details</p>

    <!-- Content Row -->
    <div class="row">

        <!-- Begin Page Content -->
        <div class="container-fluid mb-5">

        <!-- DataTales Example -->
        <div class="card shadow mb-5">
            <div class="card-header py-3">
                <div class="d-flex justify-content-lg-between">
                    <div> <h6 class="m-0 font-weight-bold text-primary">Banner Details</h6></div>
                    <div><a href="view_b_post.php?id=<?php echo $_GET['id']; ?>" class="btn btn-primary btn-sm">View</a></div>
                </div>
               
            </div>
            <div class="card-body">
                <h5 class="mb-3"><?php echo $title; ?></h5>
                <div class="d-flex">
                    <div class="col-md-4">
                    <img class="img-fluid" src="<?php echo 'uploads/blog/'.$image; ?>" alt="">
                    </div>
                    <div class="col-md-8"> 
                       <p><?php echo $desc; ?></p>
                       <cite>__<?php echo $author; ?></cite>
                    </div>
                </div>
            </div>
        </div>

        </div>
    <!-- /.container-fluid -->

    </div>

</div>
<?php include 'footer.php'; ?>