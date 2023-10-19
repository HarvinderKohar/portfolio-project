<?php

session_start();


if(isset($_POST["submit"]))
{
    if(!empty($_POST["username"]) && !empty($_POST["password"]))
    {
        $conn = mysqli_connect("localhost","root","","alogin");

        if(!$conn)
        {
            echo "Not able to establish database connection";
        }
    
        $sql = "SELECT * FROM `alogin`";
        $query = mysqli_query($conn,$sql);

        $row = mysqli_fetch_array($query);
        if($row['email'] == $_POST["username"] && $row['password'] == $_POST["password"])
        {
            $_SESSION["username"] = $_POST["username"];

            header("Location: addEntry.php");
            exit();
        }
        else
        {
            $_SESSION['ErrorMessage'] = "Incorrect Username or Password";
            header("Location: index.php"); 
        }

    }

    else{
        header("Location: index.php");
    }
}

?>

    


