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
         // delete brands id
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
        // get subscribers
        public function get_subscriber()
        {
            $this->sql = "SELECT * FROM subscribers";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return $this->result;
            }else{
                return false;
            }
        }
        // get subscriber id
        public function get_sub_id($id)
        {
            $this->sql = "SELECT * FROM subscribers WHERE sub_id = '$id'";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return $this->result;
            }else{
                return false;
            }
        }
        // delete subscriber
        public function delete_sub($id)
        {
            $this->sql = "DELETE FROM subscribers WHERE sub_id = '$id'";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return true;
            }else{
                return false;
            }
        }
        // =============== about page ================
        // abs insert
        public function insert_abs($icon,$value,$title,$body)
        {
            $this->sql = "INSERT INTO `abs`(`ab_icon`, `ab_max_value`, `ab_title`, `ab_desc`) VALUES ('$icon','$value','$title','$body')";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return $this->result;
            }else{
                return false;
            }
        }
        // get about data 
        public function get_abs_card()
        {
            $this->sql = "SELECT * FROM `abs`";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return $this->result;
            }else{
                return false;
            }
        }
        // get card with limit 
        public function get_card_limit()
        {
            $this->sql = "SELECT * FROM `abs` LIMIT 4";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return $this->result;
            }else{
                return false;
            }
        }
        // get card details
        public function get_abs_card_details($id)
        {
            $this->sql = "SELECT * FROM `abs` WHERE ab_id = '$id'";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return $this->result;
            }else{
                return false;
            }
        }
        // update about card
        public function update_abs($id,$icon,$value,$title,$desc)
        {
            $this->sql = "UPDATE `abs` SET `ab_icon`='$icon',`ab_max_value`='$value',`ab_title`='$title',`ab_desc`='$desc' WHERE `ab_id` = '$id'";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return true;
            }else{
                return false;
            }
        }
        // delete about card
        public function delete_abs($id)
        {
            $this->sql = "DELETE FROM `abs` WHERE ab_id = '$id'";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return true;
            }else{
                return false;
            }
        }
        // ================== testimonial ====================
        // insert testimonial description
        public function insert_test_desc($author,$body)
        {
            $this->sql = "INSERT INTO `testimonials_desc`(`author_id`, `testimonial_desc`) VALUES ('$author','$body')";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return true;
            }else{
                return false;
            }
        }
        // get data of description
        public function get_testimonial_desc_with_author()
        {
            $this->sql = "SELECT testimonials_desc.*,admin.admin_id,admin.admin_name FROM testimonials_desc JOIN admin ON testimonials_desc.author_id = admin.admin_id";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return $this->result;
            }else{
                return false;
            }
        }
        // details
         // get data of description
         public function get_testimonial_desc_with_limit()
         {
             $this->sql = "SELECT * FROM testimonials_desc  LIMIT 1";
             $this->result = $this->con->query($this->sql);
             if($this->result == true){
                 return $this->result;
             }else{
                 return false;
             }
         }
         // get data of description
         public function get_testimonial_desc_with_author_id($id)
         {
             $this->sql = "SELECT testimonials_desc.*,admin.admin_id,admin.admin_name FROM testimonials_desc JOIN admin ON testimonials_desc.author_id = admin.admin_id WHERE testimonial_desc_id = '$id'";
             $this->result = $this->con->query($this->sql);
             if($this->result == true){
                 return $this->result;
             }else{
                 return false;
             }
         }
        //  update description
        public function update_testimonial_desc($id,$author,$desc)
        {
            $this->sql = "UPDATE `testimonials_desc` SET `author_id`='$author',`testimonial_desc`='$desc' WHERE testimonial_desc_id = '$id'";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return true;
            }else{
                return false;
            }
        }
         //  delete description
         public function delete_test_desc($id)
         {
             $this->sql = "DELETE FROM `testimonials_desc` WHERE testimonial_desc_id = '$id'";
             $this->result = $this->con->query($this->sql);
             if($this->result == true){
                 return true;
             }else{
                 return false;
             }
         }
        // insert testimonial
        public function insert_testimonial($name,$profession,$message,$fileNewName)
        {
            $this->sql = "INSERT INTO `testimonials`(`test_img`, `test_name`, `test_profession`, `test_msg`) VALUES ('$fileNewName','$name','$profession','$message')";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return true;
            }else{
                return false;
            }
        }
        // get testimonial
        public function get_testimonial()
        {
            $this->sql = "SELECT * FROM `testimonials` LIMIT 6";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return $this->result;
            }else{
                return false;
            }
        }
        // details testimonial
        public function details_testimonial($id)
        {
            $this->sql = "SELECT * FROM `testimonials` WHERE test_id = '$id'";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return $this->result;
            }else{
                return false;
            }
        }
        // update with testimonial
        public function update_with_photo($test_id,$name,$profession,$message,$fileNewName)
        {
            $this->sql = "UPDATE `testimonials` SET `test_img`='$fileNewName',`test_name`='$name',`test_profession`='$profession',`test_msg`='$message' WHERE `test_id` = '$test_id'";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return true;
            }else{
                return false;
            }
        }
         // update without testimonial
         public function update_without_photo($test_id,$name,$profession,$message,$oldphoto)
         {
             $this->sql = "UPDATE `testimonials` SET `test_img`='$oldphoto',`test_name`='$name',`test_profession`='$profession',`test_msg`='$message' WHERE `test_id` = '$test_id'";
             $this->result = $this->con->query($this->sql);
             if($this->result == true){
                 return true;
             }else{
                 return false;
             }
         }
          // delete testimonial
          public function delete_testimonial($id)
          {
              $this->sql = "DELETE FROM `testimonials` WHERE test_id = '$id'";
              $this->result = $this->con->query($this->sql);
              if($this->result == true){
                  return true;
              }else{
                  return false;
              }
          }
        //   ==================== our skill section ======================
        // insert our skill desc
        public function insert_skill_desc($author,$desc)
        {
            $this->sql = "INSERT INTO `skill_desc`(`author_id`, `skill_desc`) VALUES ('$author','$desc')";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return true;
            }else{
                return false;
            }
        }
        // get our skill desc with author
         public function get_skill_desc_with_author(){
            $this->sql = "SELECT skill_desc.*,admin.admin_id,admin.admin_name FROM skill_desc JOIN admin ON skill_desc.author_id = admin.admin_id";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return $this->result;
            }else{
                return false;
            }
        }
         // get our skill desc with author id
         public function get_skill_desc_with_author_id($id){
            $this->sql = "SELECT skill_desc.*,admin.admin_id,admin.admin_name FROM skill_desc JOIN admin ON skill_desc.author_id = admin.admin_id WHERE skill_desc_id = '$id'";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return $this->result;
            }else{
                return false;
            }
        }
         // get our skill desc with limit
         public function get_skill_desc_limit(){
            $this->sql = "SELECT * FROM skill_desc LIMIT 1";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return $this->result;
            }else{
                return false;
            }
        }
         // update our skill desc 
         public function update_skill_desc($id,$author,$desc){
            $this->sql = "UPDATE `skill_desc` SET `author_id`='$author',`skill_desc`='$desc' WHERE skill_desc_id = '$id'";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return true;
            }else{
                return false;
            }
        }
         // delete our skill desc 
         public function delete_skill_desc($id){
            $this->sql = "DELETE FROM `skill_desc` WHERE skill_desc_id = '$id'";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return true;
            }else{
                return false;
            }
        }
        // skill content insert
        public function insert_content($title,$body,$fileNewName)
        {
            $this->sql = "INSERT INTO `skill_content`(`content_title`, `content_image`, `content_desc`) VALUES ('$title','$fileNewName','$body')";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return true;
            }else{
                return false;
            }
        }
        // get content data
        public function get_content(){
            $this->sql = "SELECT * FROM skill_content";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return $this->result;
            }else{
                return false;
            }
        }
        // get content data with id 
        public function get_content_details($id){
            $this->sql = "SELECT * FROM skill_content WHERE content_id = '$id'";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return $this->result;
            }else{
                return false;
            }
        }
        // get content data with limit for service page
        public function get_skill_content_limit(){
            $this->sql = "SELECT * FROM skill_content LIMIT 1";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return $this->result;
            }else{
                return false;
            }
        }
         // skill content update with photo
         public function update_content_with_photo($id,$title,$body,$fileNewName)
         {
             $this->sql = "UPDATE `skill_content` SET `content_title`='$title',`content_image`='$fileNewName',`content_desc`='$body' WHERE `content_id` = '$id'";
             $this->result = $this->con->query($this->sql);
             if($this->result == true){
                 return true;
             }else{
                 return false;
             }
         }
         // skill content update with photo
         public function update_content_without_photo($id,$title,$body,$oldphoto)
         {
             $this->sql = "UPDATE `skill_content` SET `content_title`='$title',`content_image`='$oldphoto',`content_desc`='$body' WHERE `content_id` = '$id'";
             $this->result = $this->con->query($this->sql);
             if($this->result == true){
                 return true;
             }else{
                 return false;
             }
         }
          // skill content delete
          public function delete_content($id)
          {
              $this->sql = "DELETE FROM `skill_content` WHERE content_id = '$id'";
              $this->result = $this->con->query($this->sql);
              if($this->result == true){
                  return true;
              }else{
                  return false;
              }
          }
          // skill progress insert
          public function insert_progress($name,$value)
          {
              $this->sql = "INSERT INTO `skill_category`(`skill_cat_name`, `skill_cat_mx_val`) VALUES ('$name','$value')";
              $this->result = $this->con->query($this->sql);
              if($this->result == true){
                  return true;
              }else{
                  return false;
              }
          }
          // get skill progress
          public function get_progress()
          {
              $this->sql = "SELECT * FROM `skill_category`";
              $this->result = $this->con->query($this->sql);
              if($this->result == true){
                  return $this->result;
              }else{
                  return false;
              }
          }
            // get skill progress with id
            public function get_progress_id($id)
            {
                $this->sql = "SELECT * FROM `skill_category` WHERE skill_cat_id = '$id'";
                $this->result = $this->con->query($this->sql);
                if($this->result == true){
                    return $this->result;
                }else{
                    return false;
                }
            }
             // update skill progress with id
             public function update_progress($id,$name,$value)
             {
                 $this->sql = "UPDATE `skill_category` SET `skill_cat_name`='$name',`skill_cat_mx_val`='$value' WHERE `skill_cat_id` = '$id'";
                 $this->result = $this->con->query($this->sql);
                 if($this->result == true){
                     return true;
                 }else{
                     return false;
                 }
             }
              // delete skill progress with id
              public function delete_progress($id)
              {
                  $this->sql = "DELETE FROM `skill_category` WHERE `skill_cat_id` = '$id'";
                  $this->result = $this->con->query($this->sql);
                  if($this->result == true){
                      return true;
                  }else{
                      return false;
                  }
              }
            //   ==================== portfolio ================
            // insert category
            public function insert_port_cat($port_cat_name,$slug)
            {
                $this->sql = "INSERT INTO `portfolio_cat`(`cat_name`, `slag`) VALUES ('$port_cat_name','$slug')";
                $this->result = $this->con->query($this->sql);
                if($this->result == true){
                    return true;
                }else{
                    return false;
                }
            }
            // get portfolio category
            public function get_port_cat()
            {
                $this->sql = "SELECT * FROM `portfolio_cat`";
                $this->result = $this->con->query($this->sql);
                if($this->result == true){
                    return $this->result;
                }else{
                    return false;
                }
            }
            // insert portfolio image
            public function insert_image($port_title,$port_cat,$fileNewName)
            {
                $this->sql = "INSERT INTO `portfolio_tbl`(`portfolio_title`, `portfolio_image`, `portfolio_cat_id`) VALUES ('$port_title','$fileNewName','$port_cat')";
                $this->result = $this->con->query($this->sql);
                if($this->result == true){
                    return true;
                }else{
                    return false;
                }
            }
            // get data 
            public function get_port_cat_data()
            {
                $this->sql = "SELECT portfolio_tbl.*,portfolio_cat.portfolio_cat_id,portfolio_cat.cat_name,portfolio_cat.slag FROM portfolio_tbl JOIN portfolio_cat ON portfolio_tbl.portfolio_cat_id = portfolio_cat.portfolio_cat_id ORDER BY portfolio_id DESC";
                $this->result = $this->con->query($this->sql);
                if($this->result == true){
                    return $this->result;
                }else{
                    return false;
                }
            }
             // get portfolio category with id
             public function get_port_cat_with_id($id)
             {
                 $this->sql = "SELECT * FROM `portfolio_cat` WHERE portfolio_cat_id = '$id'";
                 $this->result = $this->con->query($this->sql);
                 if($this->result == true){
                     return $this->result;
                 }else{
                     return false;
                 }
             }
              // update portfolio category with id
              public function update_port_cat($id,$name,$slug)
              {
                  $this->sql = "UPDATE `portfolio_cat` SET `cat_name`='$name',`slag`='$slug' WHERE `portfolio_cat_id` = '$id'";
                  $this->result = $this->con->query($this->sql);
                  if($this->result == true){
                      return true;
                  }else{
                      return false;
                  }
              }
               // delete portfolio category with id
               public function delete_port_cat($id)
               {
                   $this->sql = "DELETE FROM `portfolio_cat` WHERE `portfolio_cat_id` = '$id'";
                   $this->result = $this->con->query($this->sql);
                   if($this->result == true){
                       return true;
                   }else{
                       return false;
                   }
               }
            // get portfolio data for details
            public function get_port_image_details($id)
            {
                $this->sql = "SELECT portfolio_tbl.*,portfolio_cat.cat_name FROM portfolio_tbl JOIN portfolio_cat ON portfolio_tbl.portfolio_cat_id = portfolio_cat.portfolio_cat_id WHERE `portfolio_id` = '$id'";
                $this->result = $this->con->query($this->sql);
                if($this->result == true){
                    return $this->result;
                }else{
                    return false;
                }
            }   
            // get portfolio data for details
            public function get_port_details($id)
            {
                $this->sql = "SELECT * FROM portfolio_tbl WHERE `portfolio_id` = '$id'";
                $this->result = $this->con->query($this->sql);
                if($this->result == true){
                    return $this->result;
                }else{
                    return false;
                }
            } 
             // update portfolio data with photo
             public function update_portfolio_with_photo($id,$title,$category,$fileNewName)
             {
                 $this->sql = "UPDATE `portfolio_tbl` SET `portfolio_title`='$title',`portfolio_image`='$fileNewName',`portfolio_cat_id`='$category' WHERE `portfolio_id` = '$id'";
                 $this->result = $this->con->query($this->sql);
                 if($this->result == true){
                     return true;
                 }else{
                     return false;
                 }
             } 
              // update portfolio data with photo
              public function update_portfolio_with_out_photo($id,$title,$category,$oldphoto)
              {
                  $this->sql = "UPDATE `portfolio_tbl` SET `portfolio_title`='$title',`portfolio_image`='$oldphoto',`portfolio_cat_id`='$category' WHERE `portfolio_id` = '$id'";
                  $this->result = $this->con->query($this->sql);
                  if($this->result == true){
                      return true;
                  }else{
                      return false;
                  }
              } 
            // delete portfolio data with photo
            public function delete_portfolio($id)
            {
                $this->sql = "DELETE FROM `portfolio_tbl` WHERE `portfolio_id` = '$id'";
                $this->result = $this->con->query($this->sql);
                if($this->result == true){
                    return true;
                }else{
                    return false;
                }
            }
            // ===================== team ==================
            // insert team member
            public function insert_team($name,$profession,$about,$fileNewName){
                $this->sql = "INSERT INTO `team`(`team_m_img`, `team_m_name`, `team_m_profession`, `team_m_about`) VALUES ('$fileNewName','$name','$profession','$about')";
                $this->result = $this->con->query($this->sql);
                if($this->result == true){
                    return true;
                }else{
                    return false;
                }
            }
            // get team data
            public function get_team()
            {
                $this->sql = "SELECT * FROM `team`";
                $this->result = $this->con->query($this->sql);
                if($this->result == true){
                    return $this->result;
                }else{
                    return false;
                }
            }
            // get team data details
            public function team_details($id)
            {
                $this->sql = "SELECT * FROM `team` WHERE team_m_id = '$id'";
                $this->result = $this->con->query($this->sql);
                if($this->result == true){
                    return $this->result;
                }else{
                    return false;
                }
            }
             // get team data limit
             public function get_team_limit()
             {
                 $this->sql = "SELECT * FROM `team` LIMIT 3";
                 $this->result = $this->con->query($this->sql);
                 if($this->result == true){
                     return $this->result;
                 }else{
                     return false;
                 }
             }
              // get team data limit
              public function update_team_photo($id,$name,$profession,$about,$fileNewName)
              {
                  $this->sql = "UPDATE `team` SET `team_m_img`='$fileNewName',`team_m_name`='$name',`team_m_profession`='$profession',`team_m_about`='$about' WHERE `team_m_id` = '$id'";
                  $this->result = $this->con->query($this->sql);
                  if($this->result == true){
                      return true;
                  }else{
                      return false;
                  }
              }
            //   =============== contact =====================
            public function add_msg($name,$email,$subject,$message)
            {
                $this->sql = "INSERT INTO `messages`(`msg_name`, `msg_email`, `msg_sub`, `msg_message`) VALUES ('$name','$email','$subject','$message')";
                $this->result = $this->con->query($this->sql);
                if($this->result == true){
                    return true;
                }else{
                    return false;
                }
            }
            // get all data 
            public function get_msg_data()
            {
                $this->sql = "SELECT * FROM `messages`";
                $this->result = $this->con->query($this->sql);
                if($this->result == true){
                    return $this->result;
                }else{
                    return false;
                }
            }
             // get all message details
             public function get_contact_msg($id)
             {
                 $this->sql = "SELECT * FROM `messages` WHERE msg_id = '$id'";
                 $this->result = $this->con->query($this->sql);
                 if($this->result == true){
                     return $this->result;
                 }else{
                     return false;
                 }
             }
              // delete contact message
              public function delete_con_msg($id)
              {
                  $this->sql = "DELETE FROM `messages` WHERE msg_id = '$id'";
                  $this->result = $this->con->query($this->sql);
                  if($this->result == true){
                      return true;
                  }else{
                      return false;
                  }
              }
            //   ====================== blog =======================
            //insert blog category
            public function insert_b_cat($cat_name)
            {
                $this->sql = "INSERT INTO `blog_category`(`blog_cat_name`) VALUES ('$cat_name')";
                  $this->result = $this->con->query($this->sql);
                  if($this->result == true){
                      return true;
                  }else{
                      return false;
                  }
            }
            // get category 
            public function get_cat()
            {
                $this->sql = "SELECT * FROM `blog_category";
                  $this->result = $this->con->query($this->sql);
                  if($this->result == true){
                      return $this->result;
                  }else{
                      return false;
                  }
            }
            // get category with id
            public function get_b_cat($id)
            {
                $this->sql = "SELECT * FROM `blog_category` WHERE blog_cat_id = '$id'";
                $this->result = $this->con->query($this->sql);
                if($this->result == true){
                    return $this->result;
                }else{
                    return false;
                }
            }
            // get category with id
            public function update_blog_cat($id,$cat)
            {
                $this->sql = "UPDATE `blog_category` SET `blog_cat_name`='$cat' WHERE `blog_cat_id` = '$id'";
                $this->result = $this->con->query($this->sql);
                if($this->result == true){
                    return true;
                }else{
                    return false;
                }
            }
            // delete category with id
            public function delete_b_cat($id)
            {
                $this->sql = "DELETE FROM `blog_category` WHERE `blog_cat_id` = '$id'";
                $this->result = $this->con->query($this->sql);
                if($this->result == true){
                    return true;
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