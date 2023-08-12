<?php

$host="localhost";
$user="root";
$password="root";
$db="web";
$con=new mysqli($host,$user,$password,$db);
$error=null;
$error1=null;

session_start();


if($con===false)
{
    die("Connection Error");
}
else{
    if(isset($_POST['register'])){
        $name = $_POST['name'];
        $email = $_POST['email'];        
        $password = $_POST['pass'];   
        
        $sql="INSERT INTO register(name,email,password) VALUES('$name','$email','$password')";
        $con->query($sql);
        $error="<p style='color:green'>Succesfully Registered</p>";


    }
        
} 




if(isset($_POST['login'])){
    $email = $_POST['email'];        
    $password = $_POST['pass'];   
    
    $sql1="SELECT * FROM register WHERE email='$email' AND password='$password'";
    $con->query($sql1);
    $result = mysqli_query($con,$sql1);

    $count=0;
    $count=mysqli_num_rows($result);
    if($count==1){
        $row=mysqli_fetch_array($result);
        if($row["role"]="user"){
            $_SESSION['role']="user";
            header("location:index1.php");

        }
    }
    else{
        $error1="<p style='color:red'>Invalid Login</p>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website With Login & Registration Form</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>

    <header class="header">
        <nav class="navbar">
            <a href="#">Home</a>
            <a href="#">About</a>
            <a href="#">Services</a>
            <a href="#">Contact</a>
        </nav>

        <form action="#" class="search-bar">
            <input type="text" placeholder="Search...">
            <button type="submit"><i class='bx bx-search'></i></button>
        </form>
    </header>

    <div class="background"></div>
    <div class="container">
        <div class="content">
            <img src="logo.png" alt="logo here" class="logo">

            <div class="text-sci">
                <h2>Suiii....... !<br><span>Greatest Ever.</span></h2>

                <p></p>

                <div class="social-icons">
                    <a href="#"><i class='bx bxl-linkedin'></i></a>
                    <a href="#"><i class='bx bxl-facebook'></i></a>
                    <a href="#"><i class='bx bxl-instagram'></i></a>
                    <a href="#"><i class='bx bxl-twitter'></i></a>
                </div>
            </div>
        </div>

        <div class="logreg-box">
            <div class="form-box login">
                <form action="" method="post">
                    <h2>Sign In</h2>

                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-envelope'></i></span>
                        <input type="email" name="email" required>
                        <label>Email</label>
                    </div>

                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-lock-alt'></i></span>
                        <input type="password" name="pass" required>
                        <label>Password</label>
                    </div>

                    <div> <?php echo $error1 ?></div>

                    <button type="submit" name="login" class="btn">Sign In</button>

                    <div class="login-register">
                        <p>Don't have an account? <a href="#" class="register-link">Sign up</a></p>
                    </div>
                </form>
            </div>

            <div class="form-box register">
                <form action="" method="post">
                    <h2>Sign Up</h2>

                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-user'></i></span>
                        <input type="text" name="name" required>
                        <label>Name</label>
                    </div>

                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-envelope'></i></span>
                        <input type="email" name="email" required>
                        <label>Email</label>
                    </div>

                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-lock-alt'></i></span>
                        <input type="password" name="pass" required>
                        <label>Password</label>
                    </div>

                    <div class="remember-forgot">
                        <label><input type="checkbox" required> I agree to the terms & conditions</label>
                    </div>

                    <div> <?php echo $error ?></div>

                    <button type="submit" name="register" class="btn">Sign Up</button>

                    <div class="login-register">
                        <p>Already have an account? <a href="#" class="login-link">Sign in</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <script src="script.js"></script>
</body>

</html>