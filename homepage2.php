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
            background-repeat: no-repeat;
            background-position: center top;
            background-size: 140%;
            color: aliceblue;
        }
        .imgsize{
            width: 100px;
            height: 100px;
            border-radius: 2%;
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
            perspective: 500px;
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

        .rating img {
            width: 220px;
            height: 150px;
        }

        .krina {
            padding: 15px;
            text-align: center;
            border-radius: 10%;
            margin-left: 70px;
            font-size: 22px;
        }
    </style>
</head>

<body>
    <?php require'inc/header.html'; ?>
    <script>
        document.getElementById("hi").innerHTML =`<div class="rating" class="align1">
            <img src="https://www.primarygames.com/arcade/action/ninjaaction/logo200.png" alt="छवि"
                class="image" class="imgstyle1">
            <div class="krina" style="background-color:  rgb(244, 153, 198);"><a href="display2.html"
                    style="padding-right: 25%; color: #bb260f; text-decoration: none;"> rating</a> <a
                    href="https://www.mathplayground.com/logic_ninja_action.html"
                    style="color: #bb260f; text-decoration: none;">play</a>
                </div>
        </div>`;
    </script>
    <main>
        <form action="rating4.php" method="post">
            <div id="pop_up">

                <div class="rating" class="align1" id="gameno1">
                    <a href="http://localhost:3000/gamefinal/newgame/annihilate-dev/index.html">
                        <img src="https://global.discourse-cdn.com/standard17/uploads/threejs/optimized/3X/2/f/2feb30f47257cd5419318ee0aa21a09957223378_2_690x414.jpeg" alt="छवि" class="image" class="imgstyle1">
                    </a>
                    <div class="krina" style="background-color:  rgb(244, 153, 198);">
                        <a href="display3.php?id=1" style="padding-right: 25%; color: #bb260f; text-decoration: none;"> rating</a> 
                        <a href="http://localhost:3000/gamefinal/newgame/annihilate-dev/index.html" style="color: #bb260f; text-decoration: none;">play</a></div>
                    </div>
                
                <div class="rating " class="align1" id="gameno2">
                    <a href="http://localhost:3000/gamefinal/newgame/Asteroid-js-master/index.html">
                        <img src="https://www.marketjs.com/shell/article/retro-html5-games/shoot-the-asteroids.jpg" alt="छवि" class="image" class="imgstyle1">
                    </a>
                    <div class="krina" style="background-color:  rgb(54, 78, 55);">
                        <a href="display3.php?id=2"style="padding-right: 25%; color: #0fbb1d; text-decoration: none;">rating</a>
                        <a href="http://localhost:3000/gamefinal/newgame/Asteroid-js-master/index.html"style="color: #0fbb1d; text-decoration: none;">play</a></div>
                </div>

                <div class="rating" class="align1" id="gameno3">
                    <a href="http://localhost:3000/game/newgame/annihilate-dev/index.html">
                    <img src="https://is3-ssl.mzstatic.com/image/thumb/Purple3/v4/cb/61/5e/cb615e98-4f3a-0ac8-6c09-b2ee31200f6c/pr_source.jpg/750x750bb.jpeg" alt="छवि" class="image" class="imgstyle1" id="game3"></a>
                    <div class="krina" style="background-color:  rgb(243, 182, 85);">
                        <a href="display2.html"style="padding-right: 25%; text-decoration: none;">rating</a> 
                        <a href="http://localhost:3000/gamefinal/newgame/AstroMath-main/index.html" style="text-decoration: none;">play</a></div>
                </div>

                <div class="rating" class="align1" id="gameno4">
                    <a href="http://localhost:3000/gamefinal/newgame/Black-Hole-master/index.html">
                    <img src="https://m.media-amazon.com/images/I/71e05T6M4PL.png"alt="छवि" class="image" class="imgstyle1" id="game3">
                </a>
                    <div class="krina" style="background-color:  rgb(243, 182, 85);">
                        <a href="display2.html"style="padding-right: 25%; text-decoration: none;">rating</a> 
                        <a href="http://localhost:3000/gamefinal/newgame/Black-Hole-master/index.html" style="text-decoration: none;">play</a></div>
                </div>

                <div class="rating" class="align1" id="gameno5">
                    <a href="http://localhost:3000/gamefinal/newgame/Captain-of-Guerilla-master/captain_of_guerilla/index.html">
                    <img src="https://png.pngtree.com/background/20230513/original/pngtree-halloween-pixel-game-picture-image_2511262.jpg" alt="छवि" class="image" class="imgstyle1">
                </a>
                    <div class="krina" style="background-color:  rgb(107, 127, 245);">
                        <a href="display2.html" style="padding-right: 25%; text-decoration: none;">rating</a>
                        <a href="http://localhost:3000/gamefinal/newgame/Captain-of-Guerilla-master/captain_of_guerilla/index.html" style="text-decoration: none;">play</a></div>
                </div>

                <div class="rating" class="align1" id="gameno6">
                    <a href="http://localhost:3000/gamefinal/newgame/Captain-of-Guerilla-master/captain_of_guerilla/index.html">
                    <img src="https://lh3.googleusercontent.com/vCXlKRTRhu8dKRxGkN66nqzhoToDRbxznDp7SGhHAXKeWRQeRkx6NgHXyetEXTqZ683yNf9LINI94XBe1eDgDMeQ=w640-h400-e365-rj-sc0x00ffffff" alt="छवि" class="image" class="imgstyle1"></a>
                    <div class="krina" style="background-color:  rgb(107, 127, 245);">
                        <a href="display2.html" style="padding-right: 25%; text-decoration: none;">rating</a>
                        <a href="http://localhost:3000/gamefinal/newgame/Captain-of-Guerilla-master/captain_of_guerilla/index.html" style="text-decoration: none;">play</a></div>
                </div>

                <div class="rating" class="align1" id="gameno7">
                    <a href="">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS4fVcR9ghN1cKsXvl6xMcLy8HG2H3nFgRzlw&usqp=CAU" alt="छवि" class="image" class="imgstyle1"></a>
                    <div class="krina" style="background-color:  rgb(107, 127, 245);">
                        <a href="display2.html" style="padding-right: 25%; text-decoration: none;">rating</a>
                        <a href="http://localhost:3000/gamefinal/newgame/Fifteen-Puzzle-main/index.html" style="text-decoration: none;">play</a></div>
                </div>

                <div class="rating" class="align1" id="gameno8">
                    <a href="http://localhost:3000/gamefinal/newgame/flappy-vinny-main/index.html">
                    <img src="https://wallpapercave.com/wp/wp6956947.png" alt="छवि" class="image" class="imgstyle1"></a>
                    <div class="krina" style="background-color:  rgb(107, 127, 245);">
                        <a href="display2.html" style="padding-right: 25%; text-decoration: none;">rating</a>
                        <a href="http://localhost:3000/gamefinal/newgame/flappy-vinny-main/index.html" style="text-decoration: none;">play</a></div>
                </div>

                <div class="rating" class="align1" id="gameno9">
                    <a href="http://localhost:3000/gamefinal/newgame/flat-candies-master/index.html">
                    <img src="https://i.imgur.com/78L31hj.png" alt="छवि" class="image" class="imgstyle1"></a>
                    <div class="krina" style="background-color:  rgb(107, 127, 245);">
                        <a href="display2.html" style="padding-right: 25%; text-decoration: none;">rating</a>
                        <a href="http://localhost:3000/gamefinal/newgame/flat-candies-master/index.html" style="text-decoration: none;">play</a></div>
                </div>

                <div class="rating" class="align1" id="gameno10">
                    <a href="http://localhost:3000/gamefinal/newgame/JavaScript-Tic-Tac-Toe-Project-master/index.html">
                    <img src="https://webdevtrick.com/wp-content/uploads/tic-tac-toe-javascript.jpg" alt="छवि" class="image" class="imgstyle1"></a>
                    <div class="krina" style="background-color:  rgb(107, 127, 245);">
                        <a href="display2.html" style="padding-right: 25%; text-decoration: none;">rating</a>
                        <a href="http://localhost:3000/gamefinal/newgame/JavaScript-Tic-Tac-Toe-Project-master/index.html" style="text-decoration: none;">play</a></div>
                </div>
            </div>
        </form>
    </main>
    <?php require 'inc/footer.html'; ?>
</body>

</html>