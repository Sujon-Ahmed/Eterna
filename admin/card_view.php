<?php
    include 'header.php';
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $cards = $obj->card_details($id);
        if($cards->num_rows > 0){
            while($card_row = $cards->fetch_object()){
                $icon = $card_row->card_icon;
                $title = $card_row->card_title;
                $desc = $card_row->card_desc;
            }
        }
    }
?>
<div class="container-fluid mb-5">
    <!-- Page Heading -->
    <h1 class="h3 mb-1 text-gray-800">View Details Card</h1>
    <p class="mb-4">Dashboard / View / Details</p>
    <!-- Content Row -->
    <div class="row">
        <!-- Begin Page Content -->
        <div class="container-fluid mb-5">
        <!-- DataTales Example -->
            <div class="card shadow mb-5">
                <div class="card-header py-3">
                    <div class="d-flex justify-content-lg-between">
                        <div> <h6 class="m-0 font-weight-bold text-primary">Card Details</h6></div>
                        <div><a href="view_card.php?id=<?php echo $_GET['id']; ?>" class="btn btn-primary btn-sm">View</a></div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="d-flex">
                        <div class="col-md-4">
                            <h5 class="mb-3 text-primary">Card Icon</h5>
                            <i class="<?php echo $icon; ?> fa-5x"></i>
                        </div>
                        <div class="col-md-8"> 
                            <h5 class="mb-3 text-primary">Card Title</h5>
                            <p><?php echo $title; ?></p>
                            <h5 class="mb-3 text-primary">Card Description</h5>
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