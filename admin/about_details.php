<?php
    include 'header.php';
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $details = $obj->get_about_details($id);
        if($details->num_rows > 0){
            while($row = $details->fetch_object()){
                $title = $row->about_title;
                $body = $row->about_desc;
                $image = $row->about_image;
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
    <h1 class="h3 mb-1 text-gray-800">Details Card</h1>
    <p class="mb-4">Dashboard / View / Details</p>
    <!-- Content Row -->
    <div class="row">
        <!-- Begin Page Content -->
        <div class="container-fluid mb-5">
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="d-flex justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">View Card</h6>
                        <a href="view_about.php?id=<?php echo $_GET['id']; ?>" class="btn btn-primary btn-sm">View</a>
                    </div>
                </div>
                <div class="card-body">
                 <div class="row">
                     <div class="col-md-4">
                         <h5 class="text-primary">About Image</h5>
                         <img class="img-fluid" src="<?php echo 'uploads/about/'.$image; ?>" alt="">
                     </div>
                     <div class="col-md-6">
                         <h5 class="text-primary">About Title</h5>
                         <h6><?php echo $title; ?></h6>
                         <h5 class="text-primary">About Description</h5>
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