<?php
    include 'header.php';
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $details = $obj->get_abs_card_details($id);
        if($details->num_rows > 0){
            while($row = $details->fetch_object()){
                $icon = $row->ab_icon;
                $value = $row->ab_max_value;
                $title = $row->ab_title;
                $desc = $row->ab_desc;
            }
        }
    }
?>
<div class="container-fluid mb-5">
    <!-- Page Heading -->
    <h1 class="h3 mb-1 text-gray-800">View Details About</h1>
    <p class="mb-4">Dashboard / View / Details</p>
    <!-- Content Row -->
    <div class="row">
        <!-- Begin Page Content -->
        <div class="container-fluid mb-5">
        <!-- DataTales Example -->
            <div class="card shadow mb-5">
                <div class="card-header py-3">
                    <div class="d-flex justify-content-lg-between">
                        <div> <h6 class="m-0 font-weight-bold text-primary">About Card Details</h6></div>
                        <div><a href="view_abs.php?id=<?php echo $_GET['id']; ?>" class="btn btn-primary btn-sm">View</a></div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="d-flex">
                        <div class="col-md-4">
                            <h5 class="mb-3 text-primary">About Card Icon</h5>
                            <i class="<?php echo $icon; ?> fa-3x"></i>
                            <h5 class="mb-3 mt-3 text-primary">About Card Value</h5>
                            <h3><strong><?php echo $value; ?></strong></h3>
                            
                        </div>
                        <div class="col-md-8"> 
                            <h5 class="mb-3 text-primary">About Card Title</h5>
                            <p><?php echo $title; ?></p>
                            <h5 class="mb-3 text-primary">About Card Description</h5>
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