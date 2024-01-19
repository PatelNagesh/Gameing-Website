<?php
    $servername = "localhost";
    $username = "root";
    $password = " "; // Set your actual MySQL password here
    $dbname = "gamelogin";

    try {
        $conn = mysqli_connect("localhost", "root", "", "gamelogin");
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $fname = $_POST['name'];
        $femail = $_POST['email'];
        $fusername = $_POST['user'];
        $fpassword = $_POST['pass'];

        $data = "INSERT INTO signup (name, email, username, password) VALUES ('$fname', '$femail', '$fusername', '$fpassword')";
        $check = mysqli_query($conn, $data);
        // $check = $conn->query($data);

        if ($check) {
            echo "Data transferred successfully";
        } else {
            echo "Failed";
        }
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
?>
