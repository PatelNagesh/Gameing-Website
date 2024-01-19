<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/gamefinal/css/display2my.css">
    <title>display details</title>
</head>
<body>
    <h1>View Recode</h1>
    <?php
    $recordId = isset($_GET['id']) ? $_GET['id'] : 0;

    $conn = new mysqli("localhost","root","","rating");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM gamedetail1 WHERE gameid = $recordId";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $id = $row["gameid"];
        // Display other record details as needed
    } else {
        echo "<p>No record found for ID $recordId</p>";
    }
    $conn->close();
    ?>

    <div class="box">
        <?php echo "<form action='display3.php?id=$recordId' method='POST'>"; ?>
            <div class="posi1"> <!--// or posi1/shodisplau -->
                <h1>Recode Details</h1>
                <div id="recode-details" class="box1">
                    <?php
                    echo "<p><strong>ID:</strong> " . $row["gameid"] . "</p>";
                    echo "<p><strong>Name:</strong> " . $row["gamename"] . "</p>";
                    echo "<p><strong>Details:</strong> " . $row["gamedetail"] . "</p>";
                    ?>
                </div>
            </div>
            <div class="posi2"> <!--// or pos2/side -->
                <div class="rating align1 star"> <!--// or rating/rating align1 star -->"
                <input type='radio' id='star5' name='rating4' value='5' /><label for='star5'></label>
                <input type='radio' id='star4' name='rating4' value='4' /><label for='star4'></label>
                <input type='radio' id='star3' name='rating4' value='3' /><label for='star3'></label>
                <input type='radio' id='star2' name='rating4' value='2' /><label for='star2'></label>
                <input type='radio' id='star1' name='rating4' value='1' /><label for='star1'></label>
                </div>
                <br>
                <input type="submit" value="Submit_rating">
            </div>
        </form>
    </div>
<?php 
    $db = new mysqli('localhost', 'root', '', 'rating');
    if (!$db) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $gid = $row['gameid'];
    $gname= $row['gamename'];
    $rating = $_POST['rating4'];

    // Prepare the SQL query
    $sql2 = "INSERT INTO game (no, gameid, gamename, rating) VALUES ('', '$gid', '$gname', '$rating')";
    // $check = mysqli_query($db, $sql2);
    $check = $db->query($sql2);

    if ($check) {
        echo "Data Transfer Successfully";
    } else {
        echo " Transfer Failed";
    }
  
    // // Prepare the statement
    // $stmt = $db->prepare($sql2);
  
    // // Bind the parameters
    // $stmt->bind_param('sss', $name, $email, $message);
  
    // // Execute the query
    // $stmt->execute();
  
    // // Check if the query was successful
    // if ($stmt->affected_rows === 1) {
    //   echo "Message submitted successfully!";
    // } else {
    //   echo "Error submitting message.";
    // }
  
    // // Close the statement and database connection
    // $stmt->close();
    $db->close(); 
?>
</body>
</html>