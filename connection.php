<?php      
    $host = "localhost";  
    $user = "id19933818_root";  
    $password = "HNj2d758ZD6gA@";  
    $db_name = "id19933818_login";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
?>