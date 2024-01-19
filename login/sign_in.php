<?php
// SELECT * FROM game WHERE username = $username AND password = $password
    $servername = "localhost";
    $username = "root";
    $password = " ";
    $dbname = "game";
    
    $conn = mysqli_connect("localhost", "root", "", "game");
    if (!$conn) {
        die("connection faild: " . mysqli_connect_error());
    }
    $username=$_POST['user'];
    $password=$_POST['pass'];
?>
<?php
    $data = "SELECT username, password FROM signup WHERE (username = '$username' AND password = '$password');";
    $result = $conn->query($data);
    if ($result->num_rows > 0){
        while($row = $result->fetch_assoc())
        {
            $username= $row["username"];        
            $password=$row["password"];
            echo "your login is successfully";
            // echo "$username <br> $password";
        }
    }
    else{
        echo "username and password is wrong. Please enter correct username and password";
    }
    $conn->close();    
?>