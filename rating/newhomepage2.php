<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Action Game Page</title>
    <link rel="stylesheet" href="rating1.css" />
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <style>
    body {
        background-image: url(https://img.freepik.com/free-vector/dark-hexagonal-background-with-gradient-color_79603-1409.jpg?size=626&ext=jpg&ga=GA1.1.386372595.1698192000&semt=ais);
        background-position: center top;
        background-size: 133%;
        color: aliceblue;
    }

    h1 {
        color: red;
        padding: 1%;
        text-align: center;
    }

    nav {
        background-color: rgb(23, 25, 49);
        padding: 1.5%;
        margin: 2%;
        margin-bottom: 4%;
        border: 5px;
        border-radius: 30px 30px;
    }

    nav ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        display: inline;
        margin-right: 20cm;
    }

    nav ul li {
        display: inline;
        padding: 10px;
    }

    nav ul li a {
        color: aliceblue;
        text-decoration: none;
        font-size: large;
    }

    .button-style {
        background: #0ff;
        background: linear-gradient(90deg, #11e9ec, #1de4e4 50%, #32ebee);
        border: 5px solid #10c0c6;
        border-radius: 1000px;
        box-shadow: 0 1px #13d2d9;
        padding: 9px 22px;
        color: #fff;
        display: inline-block;
        font: normal bold 14px/1 "Roboto", sans-serif;
        text-align: center;
        text-shadow: 1px 1px #c4c4c4;
    }

    .anime:hover {
        color: #0ff;
        transform: scale(9, 9);
    }

    .button-one {
        padding: 10px 2px;
        border-radius: 10%;
        box-shadow: -3px 3px 3px #C4A31C;
    }

    .button-one::after {
        box-shadow: rgb(23, 25, 49);
        background-color: #C4A31C;
        color: black;
    }

    .button-two {
        padding: 10px;
        border-radius: 10%;
        box-shadow: -3px 3px 3px #3ec41c;
    }

    .button-three {
        padding: 10px;
        border-radius: 10%;
        box-shadow: -3px 3px 3px #1e49c0;
    }

    img {
        margin-top: 50px;
        margin-left: 80px;
        border-radius: 20%;
    }

    .image {
        max-width: 250px;
        max-height: 250px;
        display: inline;
    }

    #pop_up {
        perspective: 500px;
        display: inline-block;
    }

    #pop_up img {
        transition: 100ms;
        box-shadow: 0px 0px 0px rgba(0, 0, 0, 0);
    }

    #pop_up img:hover {
        transform: translate3d(10px, 0px, 20px);
        box-shadow: 10px 15px 15px rgb(10, 150, 200);
    }

    .imgstyle1 {
        width: 300px;
        height: 200px;
        align-items: center;
        padding: 8%;
    }

    .align1 {
        position: absolute;
    }

    .rating {
        display: inline-block;
    }

    .rating>div {
        margin-bottom: 20px;
        background-color: #303030;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.3);
    }

    .rating input {
        display: none;
    }

    .krina {
        padding: 15px;
        text-align: center;
        border-radius: 10%;
        margin-left: 70px;
        font-size: 22px;
        text-align: flex;
        margin-top: 10px;
    }

    .fotpage {
        transition: none;
        color: #fff;
        text-decoration: none;
        font-size: 25px;
        padding-right: 15px;
    }
    </style>
</head>
<?php
try {
    $host = "localhost";
    $dbname = "gamelogin";
    $username = "root";
    $password = "";
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $g1 = "SELECT gamename FROM ( SELECT gamename, AVG(rating) AS avg_rating
        FROM ratinggame
        GROUP BY gamename
        ORDER BY avg_rating DESC
        LIMIT 1
    ) AS max_avg_rating_game;
"  ;
    $stmt1 = $pdo->query($g1);
    $result1 = $stmt1->fetch(PDO::FETCH_ASSOC);
    $rat1 = $result1['gamename'];
    $g2 ="SELECT gamename
    FROM (
        SELECT gamename, AVG(rating) AS avg_rating
        FROM ratinggame
        GROUP BY gamename
        ORDER BY avg_rating DESC
        LIMIT 1 OFFSET 1
    ) AS second_highest_avg_rating_game;
" ;
    $stmt2 = $pdo->query($g2);
    $result2 = $stmt2->fetch(PDO::FETCH_ASSOC);
    $rat2= $result2['gamename']  ;

    $g3 =  "SELECT gamename
    FROM (
        SELECT gamename, AVG(rating) AS avg_rating
        FROM ratinggame
        GROUP BY gamename
        ORDER BY avg_rating DESC
        LIMIT 1 OFFSET 2
    ) AS third_highest_avg_rating_game;";
    $stmt3 = $pdo->query($g3);
    $result3 = $stmt3->fetch(PDO::FETCH_ASSOC);
    $rat3 = $result3['gamename']  ;

    $g4 ="SELECT gamename
    FROM (
        SELECT gamename, AVG(rating) AS avg_rating
        FROM ratinggame
        GROUP BY gamename
        ORDER BY avg_rating DESC
        LIMIT 1 OFFSET 3
    ) AS fourth_highest_avg_rating_game;";
    $stmt4 = $pdo->query($g4);
    $result4 = $stmt4->fetch(PDO::FETCH_ASSOC);
     $rat4 = $result4['gamename']  ;

    $g5 = "SELECT gamename
    FROM (
        SELECT gamename, AVG(rating) AS avg_rating
        FROM ratinggame
        GROUP BY gamename
        ORDER BY avg_rating DESC
        LIMIT 1 OFFSET 4
    ) AS fifth_highest_avg_rating_game;";
    $stmt5 = $pdo->query($g5);
    $result5 = $stmt5->fetch(PDO::FETCH_ASSOC);
     $rat5 = $result5['gamename']  ;

    $g6 ="SELECT gamename
    FROM (
        SELECT gamename, AVG(rating) AS avg_rating
        FROM ratinggame
        GROUP BY gamename
        ORDER BY avg_rating DESC
        LIMIT 1 OFFSET 5
    ) AS sixth_highest_avg_rating_game;";
    $stmt6 = $pdo->query($g6);
    $result6 = $stmt6->fetch(PDO::FETCH_ASSOC);
     $rat6 = $result6['gamename']  ;

    $g7 ="SELECT gamename
    FROM (
        SELECT gamename, AVG(rating) AS avg_rating
        FROM ratinggame
        GROUP BY gamename
        ORDER BY avg_rating DESC
        LIMIT 1 OFFSET 6
    ) AS seventh_highest_avg_rating_game;";
    $stmt7 = $pdo->query($g7);
    $result7 = $stmt7->fetch(PDO::FETCH_ASSOC);
     $rat7 = $result7['gamename']  ;

    $g8 ="SELECT gamename
    FROM (
        SELECT gamename, AVG(rating) AS avg_rating
        FROM ratinggame
        GROUP BY gamename
        ORDER BY avg_rating DESC
        LIMIT 1 OFFSET 7
    ) AS eightth_highest_avg_rating_game;";
    $stmt8 = $pdo->query($g8);
    $result8 = $stmt8->fetch(PDO::FETCH_ASSOC);
     $rat8 = $result8['gamename']  ;

    $g9 ="SELECT gamename
    FROM (
        SELECT gamename, AVG(rating) AS avg_rating
        FROM ratinggame
        GROUP BY gamename
        ORDER BY avg_rating DESC
        LIMIT 1 OFFSET 8
    ) AS nineth_highest_avg_rating_game;";
    $stmt9 = $pdo->query($g9);
    $result9 = $stmt9->fetch(PDO::FETCH_ASSOC);
     $rat9 = $result9['gamename']  ;

    $g10 = "SELECT gamename
    FROM (
        SELECT gamename, AVG(rating) AS avg_rating
        FROM ratinggame
        GROUP BY gamename
        ORDER BY avg_rating DESC
        LIMIT 1 OFFSET 9
    ) AS tenth_highest_avg_rating_game;";
    $stmt10 = $pdo->query($g10);
    $result10 = $stmt10->fetch(PDO::FETCH_ASSOC);
     $rat10 = $result10['gamename']  ;
    
    $g11 = "SELECT gamename
    FROM (
        SELECT gamename, AVG(rating) AS avg_rating
        FROM ratinggame
        GROUP BY gamename
        ORDER BY avg_rating DESC
        LIMIT 1 OFFSET 10
    ) AS elevan_highest_avg_rating_game;";
    $stmt11 = $pdo->query($g11);
    $result11 = $stmt11->fetch(PDO::FETCH_ASSOC);
     $rat11 = $result11['gamename']  ; 
    
    $g12 = "SELECT gamename
    FROM (
        SELECT gamename, AVG(rating) AS avg_rating
        FROM ratinggame
        GROUP BY gamename
        ORDER BY avg_rating DESC
        LIMIT 1 OFFSET 11
    ) AS twelve_highest_avg_rating_game;";
    $stmt12 = $pdo->query($g12);
    $result12 = $stmt12->fetch(PDO::FETCH_ASSOC);
     $rat12 = $result12['gamename']  ; 
    
    $g13 = "SELECT gamename
    FROM (
        SELECT gamename, AVG(rating) AS avg_rating
        FROM ratinggame
        GROUP BY gamename
        ORDER BY avg_rating DESC
        LIMIT 1 OFFSET 13
    ) AS thirtinth_highest_avg_rating_game;";
    $stmt13 = $pdo->query($g13);
    $result13 = $stmt13->fetch(PDO::FETCH_ASSOC);
     $rat13 = $result13['gamename']; 
    
    $g14 = "SELECT gamename
    FROM (
        SELECT gamename, AVG(rating) AS avg_rating
        FROM ratinggame
        GROUP BY gamename
        ORDER BY avg_rating DESC
        LIMIT 1 OFFSET 14
    ) AS fourtine_highest_avg_rating_game;";
    $stmt14 = $pdo->query($g14);
    $result14 = $stmt14->fetch(PDO::FETCH_ASSOC);
     $rat14 = $result14['gamename']; 
    
    $g15 = "SELECT gamename
    FROM (
        SELECT gamename, AVG(rating) AS avg_rating
        FROM ratinggame
        GROUP BY gamename
        ORDER BY avg_rating DESC
        LIMIT 1 OFFSET 14
    ) AS fifteen_highest_avg_rating_game;";
    $stmt15 = $pdo->query($g15);
    $result15 = $stmt15->fetch(PDO::FETCH_ASSOC);
     $rat15 = $result15['gamename']  ; 
    
    $g16 = "SELECT gamename
    FROM (
        SELECT gamename, AVG(rating) AS avg_rating
        FROM ratinggame
        GROUP BY gamename
        ORDER BY avg_rating DESC
        LIMIT 1 OFFSET 15
    ) AS sixteen_highest_avg_rating_game;";
    $stmt16 = $pdo->query($g16);
    $result16 = $stmt16->fetch(PDO::FETCH_ASSOC);
     $rat16 = $result16['gamename']  ; 
    
    $g17 = "SELECT gamename
    FROM (
        SELECT gamename, AVG(rating) AS avg_rating
        FROM ratinggame
        GROUP BY gamename
        ORDER BY avg_rating DESC
        LIMIT 1 OFFSET 16
    ) AS seventeen_highest_avg_rating_game;";
    $stmt17 = $pdo->query($g17);
    $result17 = $stmt17->fetch(PDO::FETCH_ASSOC);
    $rat17 = $result17['gamename']  ; 
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>

<body>
    <header>
        <img src="https://img.freepik.com/free-vector/detailed-esports-gaming-logo_79603-1792.jpg?size=338&ext=jpg&ga=GA1.1.386372595.1698278400&semt=ais"
            alt="Game arena" style="width: 95px; position: absolute;">
        <h1 style="padding-top: 5%"><big><b>WELCOME TO ACTION GAMES</b></big></h1>
        <nav>
            <ul>
                <li><a href="homepage2.html" class="button-one anime">Home</a></li>
                <li><a href="quizpage.html" class="button-two anime">Quiz</a></li>
                <li><a href="Action2.html" class="button-three anime">Action</a></li>
            </ul>
        </nav>
    </header>
    <script src="games.js"></script>
    <main>
        <form action="rating4.php" method="post">
            <div id="pop_up">
                <div id="<?php echo $rat1 ?>" style="display: inline; position:relative;"></div>
                <div id="<?php echo $rat2 ?>" style="display: inline; position:relative;"></div>
                <div id="<?php echo $rat3 ?>" style="display: inline; position:relative;"></div>
                <div id="<?php echo $rat4 ?>" style="display: inline; position:relative;"></div>
                <div id="<?php echo $rat5 ?>" style="display: inline; position:relative;"></div>
                <div id="<?php echo $rat6 ?>" style="display: inline; position:relative;"></div>
                <div id="<?php echo $rat7 ?>" style="display: inline; position:relative;"></div>
                <div id="<?php echo $rat8 ?>" style="display: inline; position:relative;"></div>
                <div id="<?php echo $rat9 ?>" style="display: inline; position:relative;"></div>
                <div id="<?php echo $rat10 ?>" style="display: inline; position:relative;"></div>
                <div id="<?php echo $rat11 ?>" style="display: inline; position:relative;"></div>
                <div id="<?php echo $rat12 ?>" style="display: inline; position:relative;"></div>
                <div id="<?php echo $rat13 ?>" style="display: inline; position:relative;"></div>
                <div id="<?php echo $rat14 ?>" style="display: inline; position:relative;"></div>
                <div id="<?php echo $rat15 ?>" style="display: inline; position:relative;"></div>
                <div id="<?php echo $rat16 ?>" style="display: inline; position:relative;"></div>
                <div id="<?php echo $rat17 ?>" style="display: inline; position:relative;"></div>
            </div>
        </form>
    </main>
    <center>
        <footer>
            <p>let the world play</p>
            <br>
            <a class="fotpage anime" href="http://localhost:3000/htdocs/game/krina/About1.html">About</a>
            <a class="fotpage anime" href="">Developers</a>
            <a class="fotpage anime" href="">contact</a>
        </footer>
    </center>
</body>

</html>