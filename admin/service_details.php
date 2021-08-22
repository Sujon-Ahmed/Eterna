<?php
    include 'header.php';
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $service = $obj->service_details($id);
        if($service->num_rows > 0){
            while($row = $service->fetch_object()){
                $icon = $row->service_icon;
                $title = $row->service_title;
                $desc = $row->service_desc;
            }
        }
    }
?>
<div class="container-fluid mb-5">
    <!-- Page Heading -->
    <h1 class="h3 mb-1 text-gray-800">View Details Service</h1>
    <p class="mb-4">Dashboard / Service / Details</p>
    <!-- Content Row -->
    <div class="row">
        <!-- Begin Page Content -->
        <div class="container-fluid mb-5">
        <!-- DataTales Example -->
            <div class="card shadow mb-5">
                <div class="card-header py-3">
                    <div class="d-flex justify-content-lg-between">
                        <div> <h6 class="m-0 font-weight-bold text-primary">Service Details</h6></div>
                        <div><a href="view_service.php?id=<?php echo $_GET['id']; ?>" class="btn btn-primary btn-sm">View</a></div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="d-flex">
                        <div class="col-md-4">
                            <h5 class="mb-3 text-primary">Service Icon</h5>
                            <i class="<?php echo $icon; ?> fa-5x"></i>
                        </div>
                        <div class="col-md-8"> 
                            <h5 class="mb-3 text-primary">Service Title</h5>
                            <p><?php echo $title; ?></p>
                            <h5 class="mb-3 text-primary">Service Description</h5>
                            <p><?php echo $desc; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- /.container-fluid -->
    </div>
</div>
<?php include 'footer.php'; ?>