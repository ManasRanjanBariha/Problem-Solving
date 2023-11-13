<?php
session_start();
if (!isset($_SESSION['user']) || $_SESSION['user'] != true) {
    header("location:login1.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>eLEARNING - eLearning HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <style>
        .page-header {
    background: linear-gradient(rgba(24, 29, 56, .7), rgba(24, 29, 56, .7)), url("Admin/upload/img/<?php echo $row['testi'] ;?>");
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
}
    </style>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <?php include 'admin/db.php';
        $sql = "SELECT * FROM footer";
        $Sql_query = mysqli_query($conn, $sql);
        $All_fname = mysqli_fetch_all($Sql_query, MYSQLI_ASSOC);
        foreach ($All_fname as $row) {
            ?>
            <a class="navbar-brand d-flex align-items-center px-4 px-lg-5" onclick="myfcn18('<?php echo $row['logo']; ?>')"
                data-bs-toggle="modal" data-bs-target="#updatelogo">
                <!-- <i class="fa fa-book me-3"></i> -->
                <img src="Admin/upload/img/<?php echo $row["logo"]; ?>" width="50" height="50">
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="buycourse.php" class="nav-item nav-link">Buy Courses</a>
                    <a href="mycourse.php" class="nav-item nav-link active">My Courses</a>
                    <a href="logout.php" class="nav-item nav-link">logout</a>
                </div>
                <a href="" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">
                    <?php echo $_SESSION['user'] ?><i class="fa fa-arrow-right ms-3"></i>
                </a>
            </div>
        <?php } ?>
    </nav>
    <!-- Navbar End -->
    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                <?php include 'admin/db.php';
    $sql = "SELECT * FROM footer";
    $Sql_query = mysqli_query($conn, $sql);
    $All_fname = mysqli_fetch_all($Sql_query, MYSQLI_ASSOC);
    foreach ($All_fname as $row) {
      ?>
                    <h1 class="display-3 text-white animated slideInDown">My Courses</h1>
                    <nav aria-label="breadcrumb">
                    </nav> 
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
    <div class="container-xxl py-5">
        <?php include 'admin/db.php';
        $sql = "SELECT * FROM footer";
        $Sql_query = mysqli_query($conn, $sql);
        $All_fname = mysqli_fetch_all($Sql_query, MYSQLI_ASSOC);
        foreach ($All_fname as $row) {
            ?>
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title bg-white text-center text-primary px-3">
                        <?php echo $row["courses"] === 'NA' ? '' : $row["courses"]; ?>
                    </h6>
                    <h1 class="mb-5">
                        <?php echo $row["popular"] === 'NA' ? '' : $row["popular"]; ?>
                    </h1>
                </div>
            <?php } ?>
            <div class="row g-4 justify-content-center">
                <?php include 'admin/db.php';
                // $sql = "SELECT * FROM purchescourse where uid='id'";
                $id=$_SESSION["id"];
                $sql = "SELECT * FROM purchescourse where uid='$id'";
                $Sql_query = mysqli_query($conn, $sql);
                $All_fname = mysqli_fetch_all($Sql_query, MYSQLI_ASSOC);
                var_dump($All_fname);
                foreach ($All_fname as $row) {
                    ?>
                    <?php include 'admin/db.php';
                $sql = "SELECT * FROM courses where id = '$row[cid]'";
                $Sql_query = mysqli_query($conn, $sql);
                $All_fname = mysqli_fetch_all($Sql_query, MYSQLI_ASSOC);
                foreach ($All_fname as $row) {
                    ?>
                    <div class="col-lg-4 col-md-6 wow fadeInUp">
                        <div class="course-item bg-light">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid" src="admin/upload/img/<?php echo $row['image']; ?>" alt="">
                                <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                    <!-- <a href="coursedetail.php?course_id=<?php echo $row['id']; ?>"
                                        class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end"
                                        style="border-radius: 30px 0 0 30px;">
                                        <?php echo $row['buttonname']; ?>
                                    </a> -->
                                    <a href="maincourse.php" class="flex-shrink-0 btn btn-sm btn-primary px-3"
                                        style="border-radius: 0 30px 30px 0;">Learn More</a>

                                    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    join now
                                </button> -->

                                </div>
                            </div>
                            <div class="text-center p-4 pb-0">
                                <h3 class="mb-0">
                                    <?php echo $row['dolar']; ?>
                                </h3>
                                <div class="mb-3">
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small>(123)</small>
                                </div>
                                <h5 class="mb-4">
                                    <?php echo $row['heading']; ?>
                                </h5>
                            </div>
                            <div class="d-flex border-top">
                                <small class="flex-fill text-center border-end py-2"><i
                                        class="fa fa-user-tie text-primary me-2"></i>
                                    <?php echo $row['lecture']; ?>
                                </small>
                                <small class="flex-fill text-center border-end py-2"><i
                                        class="fa fa-clock text-primary me-2"></i>
                                    <?php echo $row['hour']; ?>
                                </small>
                                <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>
                                    <?php echo $row['student']; ?>
                                </small>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                <?php } ?>
            </div>
        </div>
    </div>

    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
            <?php include 'admin/db.php';
    $sql = "SELECT * FROM footer";
    $Sql_query = mysqli_query($conn, $sql);
    $All_fname = mysqli_fetch_all($Sql_query, MYSQLI_ASSOC);
    foreach ($All_fname as $row) {
      ?>
                <h6 class="section-title bg-white text-center text-primary px-3"><?php echo $row["testimonial"] === 'NA' ? '' : $row["testimonial"]; ?></h6>
                <h1 class="mb-5"><?php echo $row["say"] === 'NA' ? '' : $row["say"]; ?></h1>
            </div>
            <?php } ?>
            <div class="owl-carousel testimonial-carousel position-relative">
            <?php include 'admin/db.php';
    $sql = "SELECT * FROM review WHERE status = 1";
    $Sql_query = mysqli_query($conn, $sql);
    $All_fname = mysqli_fetch_all($Sql_query, MYSQLI_ASSOC);
    foreach ($All_fname as $row) {
    ?>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="admin/upload/img/<?php echo $row['image'];?>" style="width: 80px; height: 80px;">
                    <h5 class="mb-0"><?php echo $row['name'];?></h5>
                    <p><?php echo $row['profession'];?></p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0"><?php echo $row['text'];?></p>
                    </div>
                </div>
                <?php }?>
            </div>
        </div>
    </div>
    <!-- Footer Start -->
    <?php include 'footer.php' ?>
    <!-- Footer End -->
    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>