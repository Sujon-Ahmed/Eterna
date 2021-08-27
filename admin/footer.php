<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2021</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->
</div>
<!-- End of Content Wrapper -->
</div>
<!-- End of Page Wrapper -->
<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top"><i class="fas fa-angle-up"></i></a>
    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.php">Logout</a>
                </div>
            </div>
        </div>
    </div> 
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
    <script src="summernote/summernote-bs4.min.js"></script>
    <script src="js/datatables-simple-demo.js"></script>
    <!-- form validation -->
    <script src="js/additional-methods.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <!-- script for profile image preview -->
    <script>
        function profilePreview(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                $('#profile + img').remove();
                $('#test-img').html('<img class="img-fluid img-thumbnail" src="'+e.target.result+'" width="400px" height="auto" />');
            }
            reader.readAsDataURL(input.files[0]);
            }
            }
            $("#file-img").change(function () {
                profilePreview(this);
        });
    </script>
    <!-- script for summernote -->
    <script>
        // post description
        $('#ban_desc').summernote({
            placeholder: 'Write Banner Description Here..',
            tabsize: 2,
            height: 250
        });
        // card description
        $('#card_desc').summernote({
            placeholder: 'write something for card description...',
            tabsize: 2,
            height: 250
        });
         // about description
         $('#about_desc').summernote({
            placeholder: 'write something for about description...',
            tabsize: 2,
            height: 250
        });
         // about description
         $('#ser_desc').summernote({
            placeholder: 'write something for about description...',
            tabsize: 2,
            height: 250
        });
    </script>
    <!-- script for banner file preview -->
    <script>
        function bannerPreview(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                $('#banner + img').remove();
                $('#banner-test-img').html('<img class="img-fluid img-thumbnail" src="'+e.target.result+'" width="400px" height="auto" />');
            }
            reader.readAsDataURL(input.files[0]);
            }
            }
            $("#banner-file-img").change(function () {
                bannerPreview(this);
            });
    </script>
    <!-- script for about file preview -->
    <script>
        function aboutPreview(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                $('#about + img').remove();
                $('#about-test-img').html('<img class="img-fluid img-thumbnail" src="'+e.target.result+'" width="400px" height="auto" />');
            }
            reader.readAsDataURL(input.files[0]);
            }
            }
            $("#about-file-img").change(function () {
                aboutPreview(this);
            });
    </script>
    <!-- script for brands -->
     <script>
            function imgPreview(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                    $('#add_image + img').remove();
                    $('#test_img').html('<img class="img-fluid img-thumbnail" src="'+e.target.result+'" width="600px" height="auto" />');
                }
                reader.readAsDataURL(input.files[0]);
                }
                }
                $("#add_img").change(function () {
                    imgPreview(this);
                });
        </script>
        <!-- script for testimonial img preview -->
        <script>
            function testimonialPreview(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                    $('#testimonial + img').remove();
                    $('#testimonial-test-img').html('<img class="img-fluid img-thumbnail" src="'+e.target.result+'" width="600px" height="auto" />');
                }
                reader.readAsDataURL(input.files[0]);
                }
                }
                $("#testimonial-file-img").change(function () {
                    testimonialPreview(this);
                });
        </script>
        <!-- script for testimonial img preview -->
        <script>
            function testContentPreview(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                    $('#test-content + img').remove();
                    $('#content-test-img').html('<img class="img-fluid img-thumbnail" src="'+e.target.result+'" width="600px" height="auto" />');
                }
                reader.readAsDataURL(input.files[0]);
                }
                }
                $("#content-file-img").change(function () {
                    testContentPreview(this);
                });
        </script>
        <!-- script for portfolio img preview -->
        <script>
            function portfolioPreview(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                    $('#abs + img').remove();
                    $('#port-test-img').html('<img class="img-fluid img-thumbnail" src="'+e.target.result+'" width="600px" height="auto" />');
                }
                reader.readAsDataURL(input.files[0]);
                }
                }
                $("#port-file-img").change(function () {
                    portfolioPreview(this);
                });
        </script>
    <!-- script for banner required validation -->
    <script>
        $(document).ready(function () {
            $('#banner').validate({
                rules: {
                    title: {
                        required: true
                    }
                },
                    messages: {
                    title: {
                    required: ""
                    }
                },
                errorElement: 'span',
                errorPlacement: function (error, element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
                },
                highlight: function (element, errorClass, validClass) {
                $(element).addClass('is-invalid');
                },
                unhighlight: function (element, errorClass, validClass) {
                $(element).removeClass('is-invalid');
                }
            });
        });
    </script>
    <!-- script for card required validation -->
    <script>
        $(document).ready(function () {
            $('#card').validate({
                rules: {
                    card_icon: {
                        required: true
                    },
                    card_title: {
                        required: true
                    }
                },
                    messages: {
                        card_icon: {
                    required: ""
                    },
                    card_title: {
                    required: ""
                    }
                },
                errorElement: 'span',
                errorPlacement: function (error, element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
                },
                highlight: function (element, errorClass, validClass) {
                $(element).addClass('is-invalid');
                },
                unhighlight: function (element, errorClass, validClass) {
                $(element).removeClass('is-invalid');
                }
            });
        });
    </script>
    <!-- script for about required validation -->
    <script>
        $(document).ready(function () {
            $('#about').validate({
                rules: {
                    about_title: {
                        required: true
                    }
                },
                    messages: {
                    title: {
                    required: ""
                    }
                },
                errorElement: 'span',
                errorPlacement: function (error, element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
                },
                highlight: function (element, errorClass, validClass) {
                $(element).addClass('is-invalid');
                },
                unhighlight: function (element, errorClass, validClass) {
                $(element).removeClass('is-invalid');
                }
            });
        });
    </script>
     <!-- script for service required validation -->
     <script>
        $(document).ready(function () {
            $('#service').validate({
                rules: {
                    ser_icon: {
                        required: true
                    },
                    ser_title: {
                        required: true
                    }
                },
                    messages: {
                        ser_icon: {
                    required: ""
                    },
                    ser_title: {
                    required: ""
                    }
                },
                errorElement: 'span',
                errorPlacement: function (error, element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
                },
                highlight: function (element, errorClass, validClass) {
                $(element).addClass('is-invalid');
                },
                unhighlight: function (element, errorClass, validClass) {
                $(element).removeClass('is-invalid');
                }
            });
        });
    </script>
       <!-- script for about page card required validation -->
       <script>
        $(document).ready(function () {
            $('#abs').validate({
                rules: {
                    abs_icon: {
                        required: true
                    },
                    abs_value: {
                        required: true
                    },
                    abs_title: {
                        required: true
                    },
                },
                    messages: {
                    abs_icon: {
                    required: ""
                    },
                    abs_value: {
                    required: ""
                    },
                    abs_title: {
                    required: ""
                    },
                },
                errorElement: 'span',
                errorPlacement: function (error, element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
                },
                highlight: function (element, errorClass, validClass) {
                $(element).addClass('is-invalid');
                },
                unhighlight: function (element, errorClass, validClass) {
                $(element).removeClass('is-invalid');
                }
            });
        });
    </script>
    <!-- script for about page card required validation -->
    <script>
        $(document).ready(function () {
            $('#test-content').validate({
                rules: {
                    content_title: {
                        required: true
                    }
                },
                    messages: {
                    content_title: {
                    required: ""
                    }
                },
                errorElement: 'span',
                errorPlacement: function (error, element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
                },
                highlight: function (element, errorClass, validClass) {
                $(element).addClass('is-invalid');
                },
                unhighlight: function (element, errorClass, validClass) {
                $(element).removeClass('is-invalid');
                }
            });
        });
    </script>
</body>
</html>