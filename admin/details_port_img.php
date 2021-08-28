<?php
    include 'header.php';
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $details = $obj->get_port_image_details($id);
        if($details->num_rows > 0){
            while($row = $details->fetch_object()){
                $title = $row->portfolio_title;
                $img = $row->portfolio_image;
                $cat = $row->cat_name;
            }
        }
    }
?>
<div class="container-fluid mb-5">
    <!-- Page Heading -->
    <h1 class="h3 mb-1 text-gray-800">View Details Portfolio Image</h1>
    <p class="mb-4">Dashboard / View / Details</p>
    <!-- Content Row -->
    <div class="row">
        <!-- Begin Page Content -->
        <div class="container-fluid mb-5">
        <!-- DataTales Example -->
            <div class="card shadow mb-5">
                <div class="card-header py-3">
                    <div class="d-flex justify-content-lg-between">
                        <div> <h6 class="m-0 font-weight-bold text-primary">Portfolio Image Details</h6></div>
                        <div><a href="view_port_image.php?id=<?php echo $_GET['id']; ?>" class="btn btn-primary btn-sm">View</a></div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="d-flex">
                        <div class="col-md-6">
                            <h5 class="mb-2 text-primary">Portfolio Image</h5>
                            <img class="img-fluid" src="<?php echo 'uploads/portfolio/'.$img; ?>" alt="">
                        </div>
                        <div class="col-md-6"> 
                            <h5 class="mb-3 text-primary">Portfolio Title</h5>
                            <strong><?php echo $title; ?></strong>
                            <h5 class="mb-2 text-primary mt-3">Portfolio Category</h5>
                            <strong><?php echo $cat; ?></strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- /.container-fluid -->
    </div>
</div>
<?php include 'footer.php'; ?>