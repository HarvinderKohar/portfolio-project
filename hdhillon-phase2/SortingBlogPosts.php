<?php
    $conn = mysqli_connect("localhost","root","","blog1");

    if(!$conn)
    {
        echo "Not able to establish database connection";
    }
    
    

    $sql = "SELECT * FROM data";
    $query = mysqli_query($conn,$sql);

    $Posts = [];
   while( $row = mysqli_fetch_array($query, MYSQLI_ASSOC))
   {
        array_push($Posts, $row);
    }


    $SortedPosts = [];
   
    while(sizeof($Posts) != 0)
    {
        $time = $Posts[0]['time'];
        $index = 0;
        for ($x = 0; $x < sizeof($Posts); $x++)
        {
            
            if($Posts[$x]['time'] > $time)
            {
                $index = $x;
                $time = $Posts[$x]['time'];
            }
        }
    
    
        array_push($SortedPosts, $Posts[$index]);
        unset($Posts[$index]);
        $Posts = array_values($Posts);
    
    }
    
