<?php
    include 'header.php';
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $details = $obj->get_content_details($id);
        if($details->num_rows > 0){
            while($row = $details->fetch_object()){
                $title = $row->content_title;
                $body = $row->content_desc;
                $image = $row->content_image;
            }
        }
    }
?>
<!-- Begin Page Content -->
<div class="container-fluid mb-5">
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
    <!-- Page Heading -->
    <h1 class="h3 mb-1 text-gray-800">Details Content</h1>
    <p class="mb-4">Dashboard / View / Details</p>
    <!-- Content Row -->
    <div class="row">
        <!-- Begin Page Content -->
        <div class="container-fluid mb-5">
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="d-flex justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">View Content</h6>
                        <a href="view_content_test.php?id=<?php echo $_GET['id']; ?>" class="btn btn-primary btn-sm">View</a>
                    </div>
                </div>
                <div class="card-body">
                 <div class="row">
                     <div class="col-md-4">
                         <h5 class="text-primary">Content Image</h5>
                         <img class="img-fluid" src="<?php echo 'uploads/skill/'.$image; ?>" alt="">
                     </div>
                     <div class="col-md-6">
                         <h5 class="text-primary">Content Title</h5>
                         <h6><?php echo $title; ?></h6>
                         <h5 class="text-primary">Content Description</h5>
                         <p><?php echo $body; ?></p>
                     </div>
                 </div>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </div>
</div>
<?php include 'footer.php'; ?>