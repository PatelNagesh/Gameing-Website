<?php
    $servername = "localhost";
    $username = "root";
    $password = " ";
    $dbname = "gamelogin";
    
        $conn = mysqli_connect("localhost", "root", "", "gamelogin");
        // // set the PDO error mode to exception
        // $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "";
        if (!$conn) {
            die("connection faild: " . mysqli_connect_error());
        }
        $fusername=$_POST['user'];
        $fpassword=$_POST['pass'];

        $data = "INSERT INTO login (username, password) VALUES ('$fusername', '$fpassword')";
        $check = mysqli_query($conn,$data);
        // $check = $conn->query($data);
        if($check){
            echo "Data transferred sucessfully";
        }
        else{
            echo "Faild";
        }
?>