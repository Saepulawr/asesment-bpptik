<?php
session_start();
    $page = "home";
    if(isset($_GET['page'])){
        $page = $_GET['page'];
    }
?>
<html>

<head>
    <title>LSP BBTIK - <?= $page ?></title>
    <link rel="stylesheet" href="assets/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/admin.lte.css">
    <link rel="stylesheet" href="assets/fontawesome-free/css/all.min.css">
    <style>
        .carousel-item {
            height: 100vh;
            min-height: 350px;
            background: no-repeat center center scroll;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

        body {
            background-color: #f4f6f9;
            /* font-family: Arial, Helvetica, sans-serif; */
        }
    </style>
</head>

<body>
    <!-- ini header -->
    <?php include "page/header/header.php";?>
    <div class="">
        <section class="py-3 mr-3 ml-3">
            <div class="row">
                <div class="col-md-8">
                    <div class="card card-default">
                        <div class="card-body">
                            <!-- content nya -->
                            <?php include "page/content/content.php"; ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <!-- ini side bar -->
                    <?php include "page/sidebar/sidebar.php"; ?>
                </div>
            </div>
        </section>
        <?php include "page/footer/footer.php"; ?>
    </div>
</body>

<script src="assets/jquery/dist/jquery.min.js"></script>
<script src="assets/jquery/dist/jquery.slim.min.js"></script>
<script src="assets/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/fontawesome-free/js/all.min.js"></script>
<script>
</script>

</html>