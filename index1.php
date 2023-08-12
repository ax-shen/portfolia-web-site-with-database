<?php

$host="localhost";
$user="root";
$password="root";
$db="portfolio";
$con=new mysqli($host,$user,$password,$db);
$error=null;

if($con===false)
{
    die("Connection Error");
}
else{
    if(isset($_POST['send'])){
        $name = $_POST['name'];
        $email = $_POST['email'];        
        $message = $_POST['message'];   
        
        $sql="INSERT INTO messages(name,email,message) VALUES('$name','$email','$message')";
        $con->query($sql);
        $error="<p style='color:green'>Message Sent</p>";
    }
        
}    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My portfolio website</title>
    <link rel="stylesheet" href="style1.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
</head>

<body>
    <header class="header">
        <nav class="navbar">
            <a href="#Home" class="nav-link">Home</a>
            <a href="#childhood" class="nav-link">Childhood</a>
            <a href="#Career" class="nav-link">Career</a>
            <a href="#records" class="nav-link">Records</a>
            <a href="#contact" class="nav-link">Contact</a>
        </nav>
    
        <form action="#" class="search-bar">
            <input type="text" placeholder="Search...">
            <button type="submit"><i class='bx bx-search'></i></button>
        </form>
    </header>    

    <section class="Home" id="Home">
        <div class="background"></div>
        <div class="container">
            <div class="content">
                <img src="logo.png" alt="logo here" class="logo">
                <h2>Welcome</h2>
                <div class="text-sci">
                    <h2>Suiii....... !<br><span>Greatest Ever.</span></h2>
                    <p>Cristiano Ronaldo is a Portuguese footballer widely considered one of the greatest players of all
                        time. He has achieved remarkable success throughout his career, playing for Sporting Lisbon,
                        Manchester United, Real Madrid, and Juventus. Ronaldo has won numerous awards, including five
                        FIFA Ballon d'Or titles, and has broken numerous records for both club and country.</p>
                    <p id="visitorCount">Visitors: 0</p>
                </div>
            </div>
        </div>
    </section>
    

    <!-- Childhood -->
    <section class="childhood" id="childhood">
        <h2 class="Childhood">Childhood</h2>
        <div class="childhood-img">
            <img src="childhood1.jpeg" alt="childhood photo">
        </div>
        <div class="c-content">
            <p>
                Cristiano Ronaldo had a modest childhood in Funchal, Madeira, Portugal. Born on February 5, 1985, into a
                working-class family, he showed immense passion for football from an early age. Ronaldo began playing for
                Andorinha, a local club, where his talent was evident. At the age of 12, he caught the attention of
                Sporting Lisbon, joining their youth academy. Ronaldo's childhood was marked by a fierce determination to
                succeed, spending countless hours practicing and honing his skills. His talent and dedication paved the
                way for his remarkable journey, propelling him from humble beginnings to becoming one of the greatest
                footballers of all time.
            </p>
        </div>
    </section>

    <!-- Career -->
    <section class="Career" id="Career">
        <h2 class="Career">Career</h2>
        <div class="Career-img">
            <img src="career.jpg" alt="Career photo">
        </div>
        <div class="ca-content">
            <p>
                Cristiano Ronaldo's career has been nothing short of exceptional. After joining Sporting Lisbon's youth
                academy, he quickly rose through the ranks and caught the attention of top clubs. In 2003, he signed with
                Manchester United, where he flourished and won multiple Premier League titles and the UEFA Champions
                League. In 2009, Ronaldo transferred to Real Madrid for a then-world record fee. At Madrid, he achieved
                unparalleled success, winning numerous domestic and European trophies, including four Champions League
                titles. In 2018, Ronaldo moved to Juventus, where he continued to excel, winning consecutive Serie A
                titles. Known for his goal-scoring prowess, athleticism, and versatility, Ronaldo has broken countless
                records throughout his career. He has been awarded the FIFA Ballon d'Or multiple times and is regarded
                as one of the greatest footballers in history. Ronaldo's career is a testament to his dedication,
                relentless work ethic, and unwavering desire to be the best.
            </p>
        </div>
    </section>

    <!-- Records -->
    <section class="records" id="records">
        <h2 class="records">Records</h2>
        <div class="records-img">
            <img src="records.jpg" alt="records photo">
        </div>
        <div class="r-content">
            <p>
                Cristiano Ronaldo, also known as CR7, is a football icon who has achieved remarkable records throughout
                his illustrious career. With over 110 international goals, he holds the title of the all-time leading
                goal scorer in international football, surpassing Ali Daei. In the UEFA Champions League, Ronaldo has
                etched his name in history with over 130 goals, making him the competition's top scorer. He has also
                scored the most hat-tricks in the history of the Champions League, a total of 8, showcasing his ability
                to deliver outstanding performances on the grandest stage. The 2013-2014 season stands out as Ronaldo's
                pinnacle, as he set the record for the most goals in a single Champions League campaign with 17
                breathtaking strikes. Furthermore, Ronaldo holds the record for the most goals in the UEFA European
                Championships with 9 goals, underlining his impact in international tournaments. In 2013, he achieved
                the remarkable feat of scoring 69 goals for club and country in a single calendar year, solidifying his
                position as an elite goal scorer. Additionally, Ronaldo is Real Madrid's all-time leading goal scorer,
                with over 450 goals, and has recorded the most hat-tricks in La Liga history with 34. Ronaldo's
                incredible records demonstrate his extraordinary talent, consistency, and undeniable impact in the world
                of football.
            </p>
        </div>
    </section>

    <!-- Slider -->
    <section class="slider">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="image1.jpeg" alt="Image 1">
                </div>
                <div class="swiper-slide">
                    <img src="image2.jpeg" alt="Image 2">
                </div>
            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>

    <section id="contact">
        <h2>Contact Me</h2>
        <form id="contact-form" method="post" action="index.php">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
    
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
    
            <label for="message">Message:</label>
            <textarea id="message" name="message" placeholder="Type your messege here" rows="5" required></textarea>
    
            <button type="submit" name="send">Submit<i class="fa-solid fa-paper-plane"></i></button>
        </form>
    </section>
    
    
    

    <!-- Social Icons -->
    <div class="social-icons">
        <h2 class="social">Follow Me on Social Media</h2>
        <a href="#"><i class='bx bxl-linkedin'></i></a>
        <a href="#"><i class='bx bxl-facebook'></i></a>
        <a href="#"><i class='bx bxl-instagram'></i></a>
        <a href="#"><i class='bx bxl-twitter'></i></a>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2023 My Portfolio. All rights reserved.</p>
    </footer>

    <!-- Scripts -->
    
    <script src="script1.js"></script>
</body>

</html>
