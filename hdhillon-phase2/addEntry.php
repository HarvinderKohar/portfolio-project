<?php
    include "addPost.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Blog </title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/index.css">
    

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan&display=swap" rel="stylesheet">
</head>

<body>
    <article>
    
    <div class="blog">
    <h1 class="titles" id="blog"> Blog </h1>
    <h1 class="titles"> Add Post </h1>
        <div class="blog-form">
            
            <br>
            <form method="POST" class="mainForm" action="addPost.php">
            <div>
                <label for="Title"></label>
                <input type="text" name="title" placeholder="Title" class="words" required>
            </div>
            <br>
            <div>
                
                <label for="addPost"></label>
                <input type="text" name="contents" placeholder="Add Blog Post" class="words" required>
                
            </div>

            <div>
                <input type="submit" name="submit" value="Post" id="submit-btn2">
            </div>
            <div>
                <input type="reset" value="Clear" id="clear-btn2">
            </div>
            </form>
        </div>
    </div>
</article>
<script src="clear.js"></script>
</body>
