<?php 
    include 'header.php'; 
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $card = $obj->card_details($id);
        if($card->num_rows>0){
            while($cards = $card->fetch_object()){
                $id = $cards->card_id;
                $icon = $cards->card_icon;
                $title = $cards->card_title;
                $body = $cards->card_desc;
            }
        }
    }
?>
<!-- Begin Page Content -->
<div class="container-fluid mb-5">
    <!-- Page Heading -->
    <h1 class="h3 mb-1 text-gray-800">Edit Card</h1>
    <p class="mb-4">Dashboard / Edit Card</p>
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
        <div class="col-lg-10 m-auto">
            <form action="card_update.php" method="POST" id="card">
                <div class="card position-relative shadow-sm">
                    <div class="card-header py-3">
                        <div class="d-flex justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Edit Card</h6>
                            <a href="view_card.php" class="btn btn-primary btn-sm">View</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <!-- icon -->
                        <label class="mb-2" for="card_icon">Card Icon <small><a style="text-decoration: none;" href="https://fontawesome.com/v5.15/icons?d=gallery&p=2" target="_blank">Visit Site</a></small></label>
                        <input type="text" name="card_icon" value="<?php echo $icon; ?>" id="card_icon" class="form-control" placeholder="Example: fa fa-user" required />
                        <!-- title -->
                        <label class="mb-2 mt-2" for="card_title">Card Title</label>
                        <input type="text" name="card_title" value="<?php echo $title; ?>" id="card_title" class="form-control" placeholder="Card title here" required />
                        <!-- description -->
                        <label class="mt-2" for="card_desc">Description</label>
                        <textarea name="card_desc" id="card_desc" cols="10" rows="5" class="form-control" placeholder="write something for card description... "><?php if(!empty($body)){ echo $body;} ?></textarea>
                        <input type="hidden" name="id" value="<?php echo $id; ?>"">
                        <input type="submit" name="submit" class="btn btn-primary mt-3" value="Save Changes">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>                
<?php include 'footer.php'; ?>