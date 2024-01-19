<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Action Game Page</title>
    <link rel="stylesheet" href="rating1.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <style>
        p {
            color: black;
        }
        body {
            background-color: #1e49c0;
            background-image: url(/Image/actionbg.jpg);
            background-size: 100%;
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
        }

        #pop_up {
            perspective:500px;
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

.rating input {
  display: none;
}
    </style>
</head>

<body>

   <header>
    <img src="/image/insta.png" alt="Game arena" style="height: 55px;">
     <h1><big><b>WELCOME TO ACTION GAMES</b></big></h1>
    <nav>
        <ul>
            <li><a href="http://127.0.0.1:5500/HTML/game/Gamehome.html" class="button-one anime">Home</a></li>
            <li><a href="" class="button-two anime">Quiz</a></li>
            <li><a href="http://127.0.0.1:5500/html/Action.html" class="button-three anime">Action</a></li>
        </ul>
    </nav>
   </header>
<main>
    <?php 
    $conn = mysqli_connect("localhost","root","","rating");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT `no`, `gameid`, `gamename`, `gamedetail` FROM `gamedetail1`";
    $result = $conn->query($sql);

    if ($result->num_rows>0) {
        while ($row = $result->fetch_assoc()) {
            $gid = $row["gameid"];
            $gname = $row["gamename"];
        }
    } else {
        echo "<tr><td colspan='3'>No records found</td></tr>";
    }
    ?>
    <form action="display3.php" method="post">
        <div id="pop_up">
            <div class="rating" class="align1" <?php $game1="ninja play"; ?>>
                <img src="https://www.primarygames.com/arcade/action/ninjaaction/logo200.png" alt="छवि" class="image" class="imgstyle1" name="game1">
                <a href='display3.php?id=1'>rating</a>
                <!-- <div class="stars" class="rating1">
                    <input type="radio" id="star5_1" name="rating1" value="1" /><label for="star5_1"></label>
                    <input type="radio" id="star4_1" name="rating1" value="2" /><label for="star4_1"></label>
                    <input type="radio" id="star3_1" name="rating1" value="3" /><label for="star3_1"></label>
                    <input type="radio" id="star2_1" name="rating1" value="4" /><label for="star2_1"></label>
                    <input type="radio" id="star1_1" name="rating1" value="5" /><label for="star1_1"></label>
                </div> -->
            </div>
            <div class="rating" class="align1">
                <img src="https://www.gamespot.com/a/uploads/original/1552/15524586/3774263-613605-assassins-creed-valhalla-patch.jpg" alt="छवि" class="image" class="imgstyle1" name="game2">
                <a href="display3.php?id=2">rating</a>
                    <!--<div class="stars" class="rating1">
                    <input type="radio" id="star5_2" name="rating2" value="1" /><label for="star5_2"></label>
                    <input type="radio" id="star4_2" name="rating2" value="2" /><label for="star4_2"></label>
                    <input type="radio" id="star3_2" name="rating2" value="3" /><label for="star3_2"></label>
                    <input type="radio" id="star2_2" name="rating2" value="4" /><label for="star2_2"></label>
                    <input type="radio" id="star1_2" name="rating2" value="5" /><label for="star1_2"></label>
                </div> -->
            </div>
            
            <div class="rating" class="align1" >
                <img src="https://staticg.sportskeeda.com/editor/2019/03/cedbb-15534102082658-800.jpg" alt="छवि" class="image" class="imgstyle1" id="game3">
                <a href="display3.php?id=3">rating</a>
            <!-- <div class="stars" class="rating1">
              <input type="radio" id="star5_3" name="rating3" value="1" /><label for="star5_3"></label>
              <input type="radio" id="star4_3" name="rating3" value="2" /><label for="star4_3"></label>
              <input type="radio" id="star3_3" name="rating3" value="3" /><label for="star3_3"></label>
              <input type="radio" id="star2_3" name="rating3" value="4" /><label for="star2_3"></label>
              <input type="radio" id="star1_3" name="rating3" value="5" /><label for="star1_3"></label>
            </div> -->
        </div>
        <div class="rating" class="align1">
            <img src="https://assets.mspimages.in/gear/wp-content/uploads/2023/01/actio-games.jpg" alt="छवि" class="image" class="imgstyle1">
            <a href="display3.php?id=4">rating</a>
            <!-- <div class="stars" class="rating1">
                <input type="radio" id="star5_4" name="rating4" value="1" /><label for="star5_4"></label>
                <input type="radio" id="star4_4" name="rating4" value="2" /><label for="star4_4"></label>
                <input type="radio" id="star3_4" name="rating4" value="3" /><label for="star3_4"></label>
                <input type="radio" id="star2_4" name="rating4" value="4" /><label for="star2_4"></label>
                <input type="radio" id="star1_4" name="rating4" value="5" /><label for="star1_4"></label>
            </div> -->
        </div>
    </div>
</form>
</main>
<center>
    <footer>
    <img src=" " alt="gamelogo">
    <p>let the world play</p>
    <br>
    <a href="">About</a>
    <a href="">Developers</a>
    <a href="">contact</a>
    </footer>
</center>
</body>

</html>
