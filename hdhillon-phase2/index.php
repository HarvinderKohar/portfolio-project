<?php
    include "addPost.php";
    include "login.php";
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/mobileIndex.css">
    

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan&display=swap" rel="stylesheet">

</head>

<body>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <div class="container">
        
        <div class="header"> 
            
            <nav class="navig">
                <ul>
                    <header><li id="bar"><h1 id="name"> Harvinder Dhillon </h1></li></header>
                    <li id="bar"><a href="aboutNexp.html"> About me </a></li>
                    <li id="bar"><a href="aboutNexp.html"> Experience </a></li>
                    <li id="bar"><a href="skillsNedu.html"> Skills </a></li>
                    <li id="bar"><a href="skillsNedu.html" > Education </a></li>
                    <li id="bar"><a href="projects.html"> Projects </a></li>
                    <!--<li id="bar"><a href="addEntry.php"> Blog </a></li>-->

                    
                </ul>
            </nav>
        </div>
        
        <!-- -->
        <div class="intro">
            <!--<h2> Welcome To My Portfolio </h2>-->
            <br>
            <!--<button class="login"> Login </button>-->
            <h1 id="homepage-login"> Welcome To My Portfolio </h1>
            <br>
                <form action="login.php" method="post">
                    <?php
                       
                        if(isset($_SESSION['ErrorMessage']))
                        {
                            echo "<p>" . $_SESSION['ErrorMessage'] . "</p>";
                            unset($_SESSION['ErrorMessage']);
                            $_SESSION = array_values($_SESSION);
                        }

                    ?>
                <div>
                    <label for="username"></label>
                    <input type="email" name="username" placeholder="Email" required>
                </div>
                <br>
                <div>
                    <label for="password"></label>
                    <input type="password" name="password" placeholder="Password" required>
                </div>

                <div>
                    <input type="submit" name="submit" value="Login" id="submit-btn">
                </div>
                </form>
            
            
        </div>

        <div class="socials"> 
            <ul>
                <li><a href="https://www.instagram.com/harvy.30/" target="_blank"> 
                    <ion-icon name="logo-instagram" class="icon"></ion-icon>
                </a></li>

                <li> <a href="https://www.linkedin.com/in/harvinder-dhillon-30b6b225a/" target="_blank"> 
                    <ion-icon name="logo-linkedin" class="icon"></ion-icon>
                </a></li>
            </ul>
        </div>
    
    

        

        
        <div class="last">
            <h2 class="titles"> Contact </h2>
            
            <!-- <div class="footer"> -->
                <footer>
                <ul>

                    <li> Email: harvinderdhillon2004@gmail.com </li>
                    <br>
                    <li> Phone: 07737138134 </li>
                    
                </ul>
                </footer>
            <!--</div>-->
        </div>
    </div>
</body>

    

