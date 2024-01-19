<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adventure Page</title>
    <link rel="stylesheet" href="rating1.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <style>
        body {
            background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTGs0j2OLloRmF11k-YtrMqMcjkUbWG8EK_jg&usqp=CAU);
            background-size: 100%;
            color: aliceblue;
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

.krina{
    padding: 15px;
    text-align: center;
    border-radius: 10%;
    margin-left: 70px;
}
div img {
    width: 250px;
    height: 180px;
}
    </style>
</head>

<body>
    <?php require'inc/header.html'; ?>
<main>
    <form action="rating3.php" method="post">
        <div id="pop_up">
        
            <div class="rating" class="align1">
                <a href="quiz.html">
                <img src="https://m.media-amazon.com/images/I/71e05T6M4PL.png"alt="छवि" class="image" class="imgstyle1" id="game3"></a>
                <div class="krina" style="background-color:  rgb(107, 127, 245);">
                    <a href="display2.html"style="padding-right: 25%; text-decoration: none;">rating</a> 
                    <a href="game/newgame/Black-Hole-master/index.html" style="text-decoration: none;">play</a></div>
            </div>
        
            <div class="rating" class="align1">
                <a href="">
                <img src="https://wallpapercave.com/wp/wp6956947.png" alt="छवि" class="image" class="imgstyle1"></a>
                <div class="krina" style="background-color:  rgb(107, 127, 245);">
                    <a href="display2.html" style="padding-right: 25%; text-decoration: none;">rating</a>
                    <a href="game/newgame/flappy-vinny-main/index.html" style="text-decoration: none;">play</a></div>
            </div>

            <div class="rating" class="align1">
                <a href="">
                <img src="https://i.imgur.com/78L31hj.png" alt="छवि" class="image" class="imgstyle1"></a>
                <div class="krina" style="background-color:  rgb(107, 127, 245);">
                    <a href="display2.html" style="padding-right: 25%; text-decoration: none;">rating</a>
                    <a href="game/newgame/flat-candies-master/index.html" style="text-decoration: none;">play</a></div>
            </div>

            <div class="rating" class="align1">
                <a href="">
                <img src="https://img.itch.zone/aW1hZ2UvMjUwNzkwLzExOTg2ODAucG5n/315x250%23c/ZKBoj5.png" alt="छवि" class="image" class="imgstyle1"></a>
                <div class="krina" style="background-color:  rgb(107, 127, 245);">
                    <a href="display2.html" style="padding-right: 25%; text-decoration: none;">rating</a>
                    <a href="game/newgame/Ludum-Dare-41-master/index.html" style="text-decoration: none;">play</a></div>
            </div>

            <div class="rating" class="align1">
                <a href="">
                <img src="https://i.pinimg.com/originals/6e/d2/bb/6ed2bbe78d8c0bc396e2081b8eabdf46.jpg" alt="छवि" class="image" class="imgstyle1"></a>
                <div class="krina" style="background-color:  rgb(107, 127, 245);">
                    <a href="display2.html" style="padding-right: 25%; text-decoration: none;">rating</a>
                    <a href="game/newgame/towers_game2d-master/index.html" style="text-decoration: none;">play</a></div>
            </div>

            <div class="rating" class="align1">
                <img src="https://www.marketjs.com/shell/article/retro-html5-games/shoot-the-asteroids.jpg" alt="छवि" class="image" class="imgstyle1">
                <div class="krina" style="background-color:  rgb(107, 127, 245);">
                    <a href="display2.html"style="padding-right: 25%; color: text-decoration: none;">rating</a>
                    <a href="game/newgame/Asteroid-js-master/index.html"
                    style=" text-decoration: none;">play</a></div>
            </div>

            <div class="rating" class="align1">
                <a href="">
                <img src="https://lh3.googleusercontent.com/vCXlKRTRhu8dKRxGkN66nqzhoToDRbxznDp7SGhHAXKeWRQeRkx6NgHXyetEXTqZ683yNf9LINI94XBe1eDgDMeQ=w640-h400-e365-rj-sc0x00ffffff" alt="छवि" class="image" class="imgstyle1"></a>
                <div class="krina" style="background-color:  rgb(107, 127, 245);">
                    <a href="display2.html" style="padding-right: 25%; text-decoration: none;">rating</a>
                    <a href="game/newgame/easiest-js-game-main/index.html" style="text-decoration: none;">play</a></div>
            </div>

            <div class="rating" class="align1">
                <a href="">
                <img src="https://w0.peakpx.com/wallpaper/843/88/HD-wallpaper-sea-war-game-war-ship-sea.jpg" alt="छवि" class="image" class="imgstyle1"></a>
                <div class="krina" style="background-color:  rgb(107, 127, 245);">
                    <a href="display2.html" style="padding-right: 25%; text-decoration: none;">rating</a>
                    <a href="game/newgame/sea_war-master/index.html" style="text-decoration: none;">play</a></div>
            </div>
    </div>
</form>
</main>
    <?php require'inc/footer.html'; ?>
</body>

</html>
