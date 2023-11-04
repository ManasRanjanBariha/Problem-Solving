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
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css?v=1.2" rel="stylesheet">
</head>
<body>

<br>
<br>

    <div class="cont">
        <form action="<?php $_SERVER['PHP_SELF'];?>" method='post' enctype="multipart/form-data">
        <div class="form sign-in">

            <h2>Welcome</h2>
            <label>
                <span>Email</span>
                <input type="email" id="email" name="email" pattern='^[a-zA-Z0-9]{2,30}@[a-zA-Z0-9]{2,10}.(es|com|org|in)$' required />
            </label>
            <label>
                <span>Password</span>
                <input type="password" id="password" name="password" required/>
            </label>
            <p class="forgot-pass">Forgot password?</p>
            <button type="Submit" name="sign" class="submit">Sign In</button>
         
        </div>
        </form>
        <?php
                        include 'Admin/db.php';
                        if(isset($_POST['sign'])){
    
                            $email=$_POST["email"];
                            $password=$_POST["password"];
                            $sql="SELECT * FROM signup WHERE email='$email' AND password='$password'";
                            $result=$conn->query($sql);
                            $row=$result->fetch_assoc();
                            if($row > 0){
                            echo "<script>alert('login');</script>";  
                            } 
                            else{
                            $sql="INSERT INTO signup(email,password) 
                            VALUES('$email','$password')";
                
                                echo "<script>alert('invalid');</script>";
                                                   }
                    } 

                    ?>
        <form action="<?php $_SERVER['PHP_SELF'];?>" method='post' enctype="multipart/form-data">

        <div class="sub-cont">
            <div class="img">
                <div class="img__text m--up">
                 
                    <h3>Don't have an account? Please Sign up!<h3>
                </div>
                <div class="img__text m--in">
                
                    <h3>If you already has an account, just sign in.<h3>
                </div>
                <div class="img__btn">
                    <span class="m--up" type="Submit"  name="sign" value="Submit">Sign Up</span>
                    <span class="m--in" type="button"  name="signin" value="Submit">Sign In</span>
                </div>
            </div>
           
            
            <div class="form sign-up">
                <h2>Create your Account</h2>
                <label>
                    <span>Name</span>
                    <input type="text" class="m--up" id="name" placeholder="name" name="name" />
                </label>
                <label>
                    <span>Email</span>
                    <input type="email" id="email" name="email" pattern='^[a-zA-Z0-9]{2,30}@[a-zA-Z0-9]{2,10}.(es|com|org|in)$' required />
                </label>
                <label>
                    <span>Password</span>
                    <input type="password" id="password" name="password" required/>
                </label>
                <button type="submit"  name="sign1" class="submit">Sign Up</button>
                
            </div>
        </div>
        </form>
    </div>
    <?php
                        include 'Admin/db.php';
                        if(isset($_POST['sign1'])){
    
                            $email=$_POST["email"];
                            $password=$_POST["password"];
                            $name=$_POST["name"];
                            $sql="SELECT * FROM signup WHERE email='$email'";
                            $result=$conn->query($sql);
                            $row=$result->fetch_assoc();
                            if($row > 0){
                            echo "<script>alert('you already have an account');</script>";  
                            } 
                            else{
                            $sql="INSERT INTO signup(email,password,name) 
                            VALUES('$email','$password','$name')";
                            if($conn->query($sql)===true){
                                echo "<script>alert('successfully created account');</script>";
                            }
                            else{$conn->error;}
                            $conn->close();
                        }
                    } 

                    ?>

    
    <script>
        document.querySelector('.img__btn').addEventListener('click', function() {
            document.querySelector('.cont').classList.toggle('s--signup');
        });
    </script>


     <!-- JavaScript Libraries -->
     <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

    <script>
    document.querySelector('.img__btn .m--up').addEventListener('click', function() {
        document.querySelector('.cont').classList.toggle('s--signup');
    });
</script>
    </body>
    </html>