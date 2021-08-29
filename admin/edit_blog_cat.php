<?php 
    $page = "blog";
    $sub_page = "create_blog_category";
    include 'header.php'; 
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $get_cat_b_id = $obj->get_b_cat($id);
        if($get_cat_b_id->num_rows > 0){
            while($row = $get_cat_b_id->fetch_object()){
                $id = $row->blog_cat_id;
                $category = $row->blog_cat_name;
            }
        }
    }
    
?>
<!-- Begin Page Content -->
<div class="container-fluid mb-5">
    <!-- Page Heading -->
    <h1 class="h3 mb-1 text-gray-800">Edit Blog Category</h1>
    <p class="mb-4">Dashboard / Edit Category</p>
    <!-- Content Row -->
    <div class="row">
        <!-- Fade In Utility -->
        <!-- toastr success message -->
        <?php
            if(isset($_SESSION['msg']['success'])){
                ?>
                    <script>
                        toastr.success("<?php echo Flash_data::show_error(); ?>");
                    </script>
                <?php
            }
        ?>
        <!-- toastr error message -->
        <?php
            if(isset($_SESSION['msg']['error'])){
                ?>
                    <script>
                        toastr.error("<?php echo Flash_data::show_error(); ?>");
                    </script>
                <?php
            }
        ?>
        <!-- form start -->
        <div class="col-lg-6 m-auto">
            <form action="blog_cat_update.php" method="POST" id="abs">
                <div class="card position-relative shadow-sm">
                    <div class="card-header py-3">
                        <div class="d-flex justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Edit Blog Category</h6>
                            <a href="view_b_cat_cat.php" class="btn btn-primary btn-sm">View</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <!-- title -->
                        <label class="mb-2 mt-2" for="abs_title">Category Name</label>
                        <input type="text" name="blog_cat_name" value="<?php echo $category; ?>" id="card_title" class="form-control" placeholder="Category name" required />
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <input type="submit" name="submit" class="btn btn-primary mt-3 d-block w-100" value="Save Changes">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>      
<?php include 'footer.php';?>