<!DOCTYPE html>
<html>
<head>
        
        <meta charset="utf-8" />
        <title>Add New Movies</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="http://localhost/ci/assets/images/favicon.ico">


        <!-- Bootstrap Css -->
    <link href="http://localhost/ci/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="http://localhost/ci/assets/css/icons.min.css" rel="stylesheet')?>" type="text/css" />
    <!-- App Css-->
    <link href="http://localhost/ci/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
    <!--text animation-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">">
 <style>
  @keyframes slideIn {
  0% {
    transform: translateX(-100%);
    opacity: 0;
  }
  100% {
    transform: translateX(0);
    opacity: 1;
  }
 }

  /* Apply the animation to the text */
 .animated-text {
  animation: slideIn 1s ease-out forwards;
 }

    </style>
</head>


<body>

   
    <div id="layout-wrapper " style="margin: 0 auto;">

        <div class="main-content" style="margin-left: 0;">

            <div class="page-content" style="padding: 0;">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card mt-3">
                                <div class="card-body"style="box-shadow: 5px 5px 10px;">
                                <h4 class="animate__animated animate__bounce">Add New Movies</h4> 
                                <div class="animated-line" style="width: 150px;"></div>
                                <br>
                                    <form method="post" action="<?php echo base_url('localhost\ci\application\views\add_actor.php'); ?>">
                                            <div class="row mb-4">
                                                <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Movie Name</label>
                                                <div class="col-sm-9">
                                                  <input type="text" class="form-control" id="horizontal-firstname-input" name="name" required>
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <label for="horizontal-email-input" class="col-sm-3 col-form-label">Director</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="horizontal-email-input"name="director" required>
                                                </div>
                                            </div>

                                            <div class="row mb-4">
                                                <label for="horizontal-email-input" class="col-sm-3 col-form-label">Release Date</label>
                                                <div class="col-sm-9">
                                                    <input type="datetime-local" class="form-control" id="horizontal-email-input" name="release_date" required>
                                                </div>
                                            </div>

                                            <div class="row justify-content-end">
                                                <div class="col-sm-9">

                                                    <br>
                                                    <div>
                                                        <button type="submit" class="btn btn-primary w-md">Submit</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

    <!-- JAVASCRIPT -->
    <script src="http://localhost/ci/assets/libs/jquery/jquery.min.js')?>"></script>
        <script src="http://localhost/ci/assets/libs/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
        <script src="http://localhost/ci/assets/libs/metismenu/metisMenu.min.js')?>"></script>
        <script src="http://localhost/ci/assets/libs/simplebar/simplebar.min.js')?>"></script>
        <script src="http://localhost/ci/assets/libs/node-waves/waves.min.js')?>"></script>

        <script src="js/app.js')?>"></script>

</body>
</html>
