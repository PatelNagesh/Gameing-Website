<?php
// Establish a database connection
$servername = "localhost";
$username = "root";
$password = " ";
$dbname = "rating";

$conn = new mysqli("localhost", "root", "", "rating");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$gamena=array('ninja action', 'free fire', 'pubg', 'gun shoot game');
// Retrieve data from the form
    // Retrieve data from the form
    $rating = $_POST['rating4'];
    $gameid = $_POST['gameid'];
    $gamename = $_POST['gamename'];


// Insert the game name and rating into the database
$sql = "INSERT INTO game (gameid,rating,gamename) VALUES ('$gameid','$rating','$gamename')";

if ($conn->query($sql) === TRUE) {
    echo "Game rating submitted successfully!";
    include('homepage2.html');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    echo "<br> <br> check again later";
}

$conn->close();
?>