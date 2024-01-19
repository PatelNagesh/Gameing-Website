<?php
$servername = "localhost";
$username = "root";
$password = " ";
$dbname = "gamelogin";

// Create a connection
$conn = mysqli_connect("localhost","root","","gamelogin");
// $conn = new mysqli($servername, $username, $password, $dbname);
 
// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}

// Get the username from the POST request (make sure to sanitize it)
$fusername = $_POST['user'];
$fpassword = $_POST['pass'];

// Use a prepared statement to prevent SQL injection
$stmt = $conn->prepare("SELECT * FROM signup WHERE username = ?");
$stmt->bind_param("s", $fusername); // "s" represents a string, adjust if needed
$stmt->execute();

// Get the result of the query
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $StoredUsername = $row['username'];
    $StoredPassword = $row['password']; // Corrected the typo here
    // You can now use $StoredUsername and $StoredPassword as needed
    echo "Username is found";
    $data = "INSERT INTO login (username, password) VALUES ('$fusername', '$fpassword')";
    $check = mysqli_query($conn,$data);
    // $check = $conn->query($data);
    if($check){
        echo " Data transferred sucessfully <br> ";
        include '/xampp/htdocs/gamefinal/homepage2.php';
        require'inc/header.html';
        
    }
    else{
        echo "Faild <br>";
    }
} else {
    echo "<br> Username not found in the database. ";
}
// Close the prepared statement and database connection when done
$stmt->close();
$conn->close();
?>
