<!-- edit_movie.php -->
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8" />
    <title>Movies list</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="http://localhost/ci/assets/images/favicon.ico">


    <!-- Bootstrap Css -->
    <link href="http://localhost/ci/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="http://localhost/ci/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="http://localhost/ci/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
    <!--text animation-->
    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
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

        @keyframes lineAnimation {
            0% {
                width: 0;
            }

            100% {
                width: 20%;
            }
        }

        /* Apply styles to the animated line */
        .animated-line {
            display: inline-block;
            border-bottom: 4px solid blue;
            /* Change the color and thickness of the line */
            animation: lineAnimation 1s forwards;
            /* Adjust animation duration and other properties */
        }
    </style>
</head>

<body>
    <!-- Begin page -->
    <div id="layout-wrapper">
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">


                    <div class="row">
                        <div class="col-8">
                            <div class="card" style="text-shadow: 2px 2px 4px">
                                <div class="card-body" style="box-shadow: 5px 5px 10px">
                                    <h1 class="animate__animated animate__bounce">Edit Movie</h1>
                                    <span class="animated-line"></span>
                                    <form action="<?php echo base_url('MovieController/updateMovie/' . $movie->m_id); ?>" method="post">
                                        <div class="row mb-4">
                                            <label for="name" class="col-sm-3 col-form-label">Name:</label>
                                            <input type="text" name="name" value="<?php echo $movie->name; ?>" required><br><br>
                                        </div>

                                        <div class="row mb-4">
                                            <label for="director" class="col-sm-3 col-form-label">Director:</label>
                                            <input type="text" name="director" value="<?php echo $movie->director; ?>" required><br><br>
                                        </div>

                                        <div class="row mb-4">
                                            <label for="actor" class="col-sm-3 col-form-label">Actor:</label>
                                            <input type="text" name="actor" value="<?php echo $movie->actor; ?>" required><br><br>
                                        </div>

                                        <div class="row mb-4">
                                            <label for="release_date" class="col-sm-3 col-form-label">Release Date:</label>
                                            <input type="date" name="release_date" value="<?php echo $movie->release_date; ?>" required><br><br>
                                        </div>

                                        <div class="row justify-content-end">
                                            <div class="col-sm-9">

                                                <input class="btn btn-primary w-md" type="submit" value="Update Movie">
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
    <script src="http://localhost/ci/assets/libs/jquery/jquery.min.js"></script>
    <script src="http://localhost/ci/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="http://localhost/ci/assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="http://localhost/ci/assets/libs/simplebar/simplebar.min.js"></script>
    <script src="http://localhost/ci/assets/libs/node-waves/waves.min.js"></script>

    <!-- Table Editable plugin -->
    <script src="http://localhost/ci/assets/libs/table-edits/build/table-edits.min.js"></script>

    <script src="http://localhost/ci/assets/js/pages/table-editable.int.js"></script>

    <script src="http://localhost/ci/assets/js/app.js"></script>
    <!-- edit button -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>

</html>