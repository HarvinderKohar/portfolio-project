<?php
    $conn = mysqli_connect("localhost","root","","blog1");

    if(!$conn)
    {
        echo "Not able to establish database connection";
    }
    


    $sql = "SELECT * FROM data";
    $query = mysqli_query($conn,$sql);

    $Posts = [[]];
    while($row = mysqli_fetch_row($query))
    {
        array_push($Posts, $row);
    }


    if(isset($_POST["submit"]))
    {
        $title = $_POST["title"];
        $contents = $_POST["contents"];

        $sql = "INSERT INTO data(title, contents, time) VALUES('$title','$contents', CURRENT_TIMESTAMP)";
        mysqli_query($conn, $sql);

        header("Location: viewBlog.php");
        exit();
    }
    ?>
    
        

        