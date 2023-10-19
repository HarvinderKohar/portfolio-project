<?php
    include "addPost.php";
    include "logout.php";
    include "SortingBlogPosts.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> View Blog </title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/index.css">
    

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan&display=swap" rel="stylesheet">
</head>
<body>
<article>
    <h1 class="titles" > View Blog </h1>
    
    <form action="viewBlog.php" method="POST">
        <input type="submit" value= "logout" name="lout" id="lout">
    </form>

    <?php foreach($SortedPosts as $q){?>
    <div class="viewBlog">
        <!--<h1 class="titles" > View Blog </h1>-->
    <div class="box">
        <h5 class="b-title"><?php echo $q['title'];?> </h5>
        <p class="b-content"><?php echo $q['contents'];?></p>
        <p class="b-time"><?php echo date('d F Y, H:i \U\T\C', strtotime($q['time'])); ?></p>

    </div>
    <?php }?>
    </div>
   


    
    
</article>
</body>