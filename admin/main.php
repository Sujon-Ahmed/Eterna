<?php
    class Main{
        protected $host = 'localhost';
        protected $user = 'root';
        protected $pass = '';
        protected $db = 'eterna';
        protected $con;
        protected $sql;
        protected $result;
        // create connection
        public function __construct()
        {
            $this->con = new mysqli($this->host,$this->user,$this->pass,$this->db);
            // check connection
            if($this->con->connect_error){
                echo "connected error {$this->con->connect_error}";
                die();
            }
        }
         // insert data
         public function register($name,$email,$password){
            $this->sql ="INSERT INTO `admin`(`admin_name`, `admin_email`, `admin_password`) VALUES ('$name','$email','$password')";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return true;
            }else{
                return false;
            }
        }
        // check email
        public function check_email($email){
            $this->sql ="SELECT * FROM `admin` WHERE admin_email = '$email'";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return $this->result;
            }else{
                return false;
            }
        }
        // profile retrive
        public function profile_retrive($id){
            $this->sql ="SELECT * FROM `admin` WHERE admin_id = '$id'";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return $this->result;
            }else{
                return false;
            }
        }
        // update profile
        public function update_profile($id,$oldphoto,$name,$email,$phone,$about) {
            $this->sql = "UPDATE `admin` SET `admin_name`='$name',`admin_email`='$email',`admin_about`='$about',`admin_phone`='$phone',`admin_photo`='$oldphoto' WHERE admin_id = '$id'";

            $this->result = $this->con->query($this->sql);
            if($this->result == true) {
                return true;
                // echo 'OK';
            }else{
                return false;
                // echo 'ERROR';
            }
        }
         // profile retrive for index
         public function profile_retrives(){
            $this->sql ="SELECT * FROM `admin`";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return $this->result;
            }else{
                return false;
            }
        }
        // create_banner
        public function banner_create($author_id,$banner_title,$banner_desc,$fileNewName){
            $this->sql ="INSERT INTO `banner`(`author_id`, `banner_title`, `banner_desc`, `banner_img`) VALUES ('$author_id','$banner_title','$banner_desc','$fileNewName')";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return true;
            }else{
                return false;
            }
        }
        // get_banner
        public function get_banner($id){
            $this->sql = "SELECT banner.*,admin.admin_id,admin.admin_name,admin.admin_photo FROM banner
            JOIN admin ON banner.author_id = admin.admin_id WHERE author_id = '$id' ORDER BY banner_id DESC";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return $this->result;
            }else{
                return false;
            }
        }
        //get_single_banner
        public function get_single_banner($id){
            $this->sql = "SELECT banner.*,admin.admin_id,admin.admin_name FROM banner JOIN admin ON banner.author_id = admin.admin_id WHERE banner_id = '$id'";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return $this->result;
            }else{
                return false;
            }
        }
        // get banner id
        public function get_banner_id($id){
            $this->sql = "SELECT * FROM `banner` WHERE banner_id = '$id'";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return $this->result;
            }else{
                return false;
            }
        }
        // delete banner
        public function delete_banner($id){
            $this->sql = "DELETE FROM `banner` WHERE banner_id = '$id'";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return $this->result;
            }else{
                return false;
            }
        }
        // update with photo
        public function update_with_photo_banner($author_id,$title,$banner_body,$fileNewName,$banner_id) {
            $this->sql = "UPDATE `banner` SET `author_id`='$author_id',`banner_title`='$title',`banner_desc`='$banner_body',`banner_img`='$fileNewName' WHERE banner_id = '$banner_id'";

            $this->result = $this->con->query($this->sql);
            if($this->result == true) {
                return true;
                // echo 'OK';
            }else{
                return false;
                // echo 'ERROR';
            }
        }
        // update without photo
        public function update_without_photo_banner($author_id,$title,$banner_body,$oldphoto,$banner_id) {
            $this->sql = "UPDATE `banner` SET `author_id`='$author_id',`banner_title`='$title',`banner_desc`='$banner_body',`banner_img`='$oldphoto' WHERE banner_id = '$banner_id'";

            $this->result = $this->con->query($this->sql);
            if($this->result == true) {
                return true;
                // echo 'OK';
            }else{
                return false;
                // echo 'ERROR';
            }
        }
        // get banner id
        public function get_banner_data(){
            $this->sql = "SELECT * FROM `banner`";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return $this->result;
            }else{
                return false;
            }
        }
        // ================ card section ===========================
        // insert card
        public function insert_card($card_icon,$card_title,$card_desc){
            $this->sql = "INSERT INTO `card`(`card_icon`, `card_title`, `card_desc`) VALUES ('$card_icon','$card_title','$card_desc')";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return true;
            }else{
                return false;
            }
        }
        // get data
        public function get_data(){
            $this->sql = "SELECT * FROM `card`";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return $this->result;
            }else{
                return false;
            }
        }
        // card details
        public function card_details($id){
            $this->sql = "SELECT * FROM `card` WHERE card_id = '$id'";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return $this->result;
            }else{
                return false;
            }
        }
        // card update
        public function card_update($id,$icon,$title,$body){
            $this->sql = "UPDATE `card` SET `card_icon`='$icon',`card_title`='$title',`card_desc`='$body' WHERE card_id = '$id'";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return true;
            }else{
                return false;
            }
        }
        // card delete
        public function card_delete($id){
            $this->sql = "DELETE FROM `card` WHERE card_id = '$id'";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return true;
            }else{
                return false;
            }
        }
        // get limit
         public function get_data_limit(){
            $this->sql = "SELECT * FROM `card` LIMIT 3";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return $this->result;
            }else{
                return false;
            }
         }
        // ============= about section====================
        // insert about
        public function about_create($author_id,$about_title,$about_desc,$fileNewName){
            $this->sql = "INSERT INTO `about`(`author_id`, `about_image`, `about_title`, `about_desc`) VALUES ('$author_id','$fileNewName','$about_title','$about_desc')";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return $this->result;
            }else{
                return false;
            }
        }
        // get about data
        public function get_about(){
            $this->sql = "SELECT * FROM `about`";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return $this->result;
            }else{
                return false;
            }
        }
        // get about with id
        public function get_about_details($id){
            $this->sql = "SELECT * FROM `about` WHERE about_id = '$id'";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return $this->result;
            }else{
                return false;
            }
        }
        // update with photo
        public function update_with_photo_about($author_id,$title,$body,$fileNewName,$about_id){
            $this->sql = "UPDATE `about` SET `author_id`='$author_id',`about_image`='$fileNewName',`about_title`='$title',`about_desc`='$body' WHERE about_id = '$about_id'";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return true;
            }else{
                return false;
            }
        }
         // update without photo
         public function update_without_photo_about($author_id,$title,$body,$oldphoto,$about_id){
            $this->sql = "UPDATE `about` SET `author_id`='$author_id',`about_image`='$oldphoto',`about_title`='$title',`about_desc`='$body' WHERE about_id = '$about_id'";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return true;
            }else{
                return false;
            }
        }
        // delete about section
        public function delete_about($id){
            $this->sql = "DELETE FROM `about` WHERE about_id = '$id'";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return true;
            }else{
                return false;
            }
        }
        // get about data with limit
        public function get_about_data(){
            $this->sql = "SELECT * FROM `about` LIMIT 1";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return $this->result;
            }else{
                return false;
            }
        }
        // =============== service section ====================
        // insert service
        public function insert_service($author_id,$icon,$title,$body){
            $this->sql = "INSERT INTO `services`(`author_id`, `service_icon`, `service_title`, `service_desc`) VALUES ('$author_id','$icon','$title','$body')";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return $this->result;
            }else{
                return false;
            }
        }
        // get service
        public function get_service(){
            $this->sql = "SELECT * FROM `services`";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return $this->result;
            }else{
                return false;
            }
        }
        // service details
        public function service_details($id){
            $this->sql = "SELECT * FROM `services` WHERE service_id = '$id'";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return $this->result;
            }else{
                return false;
            }
        }
        // service update
        public function ser_update($author,$id,$icon,$title,$body){
            $this->sql = "UPDATE `services` SET `author_id`='$author',`service_icon`='$icon',`service_title`='$title',`service_desc`='$body' WHERE service_id = '$id'";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return true;
            }else{
                return false;
            }
        }
         // get service with limit
         public function get_service_limit(){
            $this->sql = "SELECT * FROM `services` LIMIT 6";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return $this->result;
            }else{
                return false;
            }
        }
        // ============== client section ===============
        // insert client description
        public function insert_client_desc($author,$client_desc){
            $this->sql = "INSERT INTO `client_description`(`author_id`, `client_desc`) VALUES ('$author','$client_desc')";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return $this->result;
            }else{
                return false;
            }
        }
        // get description with author
        public function get_desc_with_author(){
            $this->sql = "SELECT client_description.*,admin.admin_id,admin.admin_name FROM client_description JOIN admin ON client_description.author_id = admin.admin_id";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return $this->result;
            }else{
                return false;
            }
        }
        // get description with author
        public function get_desc_with_author_id($id){
            $this->sql = "SELECT client_description.*,admin.admin_id,admin.admin_name FROM client_description JOIN admin ON client_description.author_id = admin.admin_id WHERE client_id = '$id'";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return $this->result;
            }else{
                return false;
            }
        }
        // catch description
        public function catch_desc(){
            $this->sql = "SELECT * FROM `client_description` LIMIT 1";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return $this->result;
            }else{
                return false;
            }
        }
        // get desc
         public function get_desc_data(){
            $this->sql = "SELECT * FROM `client_description`";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return $this->result;
            }else{
                return false;
            }
        }
        // update desc
        public function update_desc($author,$id,$desc){
            $this->sql = "UPDATE `client_description` SET `author_id`='$author',`client_desc`='$desc' WHERE client_id = '$id'";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return true;
            }else{
                return false;
            }
        }
         // get desc
         public function get_desc($id){
            $this->sql = "SELECT * FROM `client_description` WHERE client_id = '$id'";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return $this->result;
            }else{
                return false;
            }
        }
        // get desc
        public function delete_desc($id){
            $this->sql = "DELETE FROM `client_description` WHERE client_id = '$id'";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return true;
            }else{
                return false;
            }
        }
        // insert brands image
        public function insert_brands($fileNewName,$auth_id){
            $this->sql = "INSERT INTO `brands`( `author_id`, `brand_img`) VALUES ('$auth_id','$fileNewName')";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return $this->result;
            }else{
                return false;
            }
        }
        // get brands data 
        public function get_brands(){
            $this->sql = "SELECT * FROM brands";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return $this->result;
            }else{
                return false;
            }
        }
        // get brands id
        public function get_brand_id($brand_id){
            $this->sql = "SELECT * FROM `brands` WHERE brand_id = '$brand_id'";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return $this->result;
            }else{
                return false;
            }
        }
         // dwlete brands id
         public function delete_brand($brand_id){
            $this->sql = "DELETE FROM `brands` WHERE brand_id = '$brand_id'";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return true;
            }else{
                return false;
            }
        }
        // subscribers
        // insert
        public function add_sub($email)
        {
            $this->sql = "INSERT INTO `subscribers`(`sub_email`) VALUES ('$email')";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return $this->result;
            }else{
                return false;
            }
        }

        // close connection
        public function __destruct()
        {
            $this->con->close();
        }
    }

?>