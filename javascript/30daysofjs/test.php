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
            $sql = "SELECT * FROM courses where status='1'";
            $Sql_query = mysqli_query($conn, $sql);
            $All_fname = mysqli_fetch_all($Sql_query, MYSQLI_ASSOC);
            foreach ($All_fname as $row) {
                ?>
                <div class="col-lg-4 col-md-6 wow fadeInUp">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="admin/upload/img/<?php echo $row['image']; ?>" alt="">
                            <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                <a href=<?php echo $row['buttonlink']; ?> target="_blank" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end"
                                    style="border-radius: 30px 0 0 30px;">
                                    <?php echo $row['buttonname']; ?>
                                </a>

                                </a>
                                <a href="login1.php" class="flex-shrink-0 btn btn-sm btn-primary px-3"
                                    style="border-radius: 0 30px 30px 0;">Join Now</a>

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

                <!--Add courses modal-->
                <div class="modal fade" data-backdrop="static" id="modal-primary">
                    <div class="modal-dialog">
                        <div class="modal-content bg-primary">
                            <div class="modal-header">
                                <h4 class="modal-title">courses</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="<?php $_SERVER['PHP_SELF']; ?>" method='post' enctype="multipart/form-data">
                                <div class="modal-body">

                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="exampleInputimage">Input image</label>
                                            <input type="file" class="form-control" id="exampleInputimage"
                                                placeholder="image" name="image" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputtext">buttonname</label>
                                            <input type="text" class="form-control" id="exampleInputtext" placeholder="text"
                                                name="buttonname" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputtext">buttomlink</label>
                                            <select class="form-control" id="exampleInputtext" name="buttomlink">
                                                <option>about</option>
                                                <option>service</option>
                                                <option>contact</option>
                                                <!-- Add more options as needed -->
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputtext">dolar</label>
                                            <input type="text" class="form-control" id="exampleInputtext" placeholder="text"
                                                name="dolar" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputtext">star</label>
                                            <input type="text" class="form-control" id="exampleInputtext" placeholder="text"
                                                name="star" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputtext">heading</label>
                                            <input type="text" class="form-control" id="exampleInputtext" placeholder="text"
                                                name="heading" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputtext">lecture</label>
                                            <input type="text" class="form-control" id="exampleInputtext" placeholder="text"
                                                name="lecture" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputtext">hour</label>
                                            <input type="text" class="form-control" id="exampleInputtext" placeholder="text"
                                                name="hour" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputtext">student</label>
                                            <input type="text" class="form-control" id="exampleInputtext" placeholder="text"
                                                name="student" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer justify-content-between">
                                    <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                                    <button type="Submit" name="addcourses" value="Submit"
                                        class="btn btn-outline-light">addcourses</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!--End courses modal-->
            <?php } ?>
            <?php
            include 'Admin/db.php';
            if (isset($_POST['addcourses'])) {

                $image_name = $_FILES['image']['name'];
                $image_size = $_FILES['image']['size'];
                $image_tmp = $_FILES['image']['tmp_name'];
                $file_type = pathinfo($image_name, PATHINFO_EXTENSION);
                $new_file_name = uniqid() . '.' . $file_type;

                $upload_dir = "upload/img/";
                if (!is_dir($upload_dir)) {
                    mkdir($upload_dir);
                } else {
                    $conn->error;
                }
                $target_file = $upload_dir . $new_file_name;
                if (move_uploaded_file($image_tmp, $target_file)) {
                    echo "<script>
                                alert('image uploaded successfuly');
                                </script>";
                } else {
                    echo "<script>
                                alert('image not uploaded');
                                </script>";
                }
                $buttonname = $_POST["buttonname"];
                $buttonlink = $_POST["buttonlink"];
                $dolar = $_POST["dolar"];
                $star = $_POST["star"];
                $heading = $_POST["heading"];
                $lecture = $_POST["lecture"];
                $hour = $_POST["hour"];
                $student = $_POST["student"];
                $sql = "INSERT INTO courses(image,buttonname,buttonlink,dolar,star,heading,lecture,hour,student,status) 
                            VALUES('$new_file_name','$buttonname','$buttonlink','$dolar','$star','$heading','$lecture','$hour','$student','1')";
                if ($conn->query($sql) === true) {
                    echo "success";
                } else {
                    $conn->error;
                }
                $conn->close();
            }
            ?>
            <!-- Modal -->

            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Join Courses</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="<?php $_SERVER['PHP_SELF']; ?>" method='post' enctype="multipart/form-data">
                            <div class="modal-body">
                                <label for="exampleInputtext">Name</label>
                                <input type="text" class="form-control" id="exampleModalLabel" placeholder="name"
                                    name="student" required>
                            </div>
                            <div class="modal-body">
                                <label for="exampleInputtext">Phone</label>
                                <input type="phone" class="form-control" id="exampleModalLabel" placeholder="phone"
                                    name="phone" pattern='^[0-9]{10,20}$' required>
                            </div>
                            <div class="modal-body">
                                <label for="exampleInputemail">Email</label>
                                <input type="email" class="form-control" id="exampleModalLabel" placeholder="email"
                                    name="email" pattern='^[a-zA-Z0-9]{2,30}@[a-zA-Z0-9]{2,10}.(es|com|org|in)$'
                                    required>
                            </div>
                            <div class="modal-body">
                                <label for="exampleInputtext">Courses Name</label>
                                <input type="text" class="form-control" id="exampleModalLabel" placeholder="course name"
                                    name="coursesname" required>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="Submit" name="Joincourse" value="Submit" class="btn btn-primary">Join
                                    Courses</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <?php
            include 'Admin/db.php';
            if (isset($_POST['Joincourse'])) {

                $student = $_POST["student"];
                $phone = $_POST["phone"];
                $email = $_POST["email"];
                $coursesname = $_POST["coursesname"];
                $sql = "INSERT INTO joincourses(student,phone,email,coursesname) 
                            VALUES('$student','$phone','$email','$coursesname')";
                if ($conn->query($sql) === true) {
                    echo "<script>alert('Form submit succesful');</script>";
                } else {
                    $conn->error;
                }
                $conn->close();
            }


            ?>
        </div>
    </div>
</div>