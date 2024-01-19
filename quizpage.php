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
            background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSP7gXOgkTyDVOOsXXTuQywB3sKWHTINSKPQg&usqp=CAU);
            background-position: center top;
            background-size: 133%;
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
    font-size: 22px;
}
div img {
    width: 350px;
    height: 180px;
}
    </style>
</head>

<body>
<?php require'inc/header.html'; ?>
<main>
        <div id="pop_up">
            <div class="rating" class="align1" >
                <a href="quiz.html">
                    <img src="https://53.fs1.hubspotusercontent-na1.net/hub/53/hubfs/google-quiz.jpg?width=595&height=400&name=google-quiz.jpg" alt="छवि" class="image" class="imgstyle1" id="game3">
                </a>
                <div class="krina" style="background-color:  rgb(243, 182, 85);"><a href="display2.html" style="padding-right: 25%; text-decoration: none;">rating</a>  <a href="quiz.html" style="text-decoration: none;">play</a></div>
            </div>

            <div class="rating" class="align1">
                <a href="http://localhost:3000/htdocs/game/newgame/annihilate-dev/index.html">
                <img src="https://is3-ssl.mzstatic.com/image/thumb/Purple3/v4/cb/61/5e/cb615e98-4f3a-0ac8-6c09-b2ee31200f6c/pr_source.jpg/750x750bb.jpeg" alt="छवि" class="image" class="imgstyle1" id="game3"></a>
                <div class="krina" style="background-color:  rgb(243, 182, 85);">
                    <a href="display2.html"style="padding-right: 25%; text-decoration: none;">rating</a> 
                    <a href="game/newgame/AstroMath-main/index.html" style="text-decoration: none;">play</a></div>
            </div>

            <div class="rating" class="align1">
                <a href="">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS4fVcR9ghN1cKsXvl6xMcLy8HG2H3nFgRzlw&usqp=CAU" alt="छवि" class="image" class="imgstyle1"></a>
                <div class="krina" style="background-color:  rgb(243, 182, 85);">
                    <a href="display2.html" style="padding-right: 25%; text-decoration: none;">rating</a>
                    <a href="game/newgame/Fifteen-Puzzle-main/index.html" style="text-decoration: none;">play</a></div>
            </div>

            <div class="rating" class="align1">
                <a href="">
                <img src="https://webdevtrick.com/wp-content/uploads/tic-tac-toe-javascript.jpg" alt="छवि" class="image" class="imgstyle1"></a>
                <div class="krina" style="background-color:  rgb(243, 182, 85);">
                    <a href="display2.html" style="padding-right: 25%; text-decoration: none;">rating</a>
                    <a href="game/newgame/JavaScript-Tic-Tac-Toe-Project-master/index.html" style="text-decoration: none;">play</a></div>
            </div>

            <div class="rating" class="align1">
                <a href="">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSsUB1oqSM1bBbHWY2Qk1duUCgH_2DbiQ4T0w&usqp=CAU" alt="छवि" class="image" class="imgstyle1"></a>
                <div class="krina" style="background-color:  rgb(243, 182, 85);">
                    <a href="display2.html" style="padding-right: 25%; text-decoration: none;">rating</a>
                    <a href="game/newgame/snake-master/index.html" style="text-decoration: none;">play</a></div>
            </div>

            <div class="rating" class="align1">
                <a href="">
                <img src="https://res.cloudinary.com/practicaldev/image/fetch/s--Kvjyw99r--/c_imagga_scale,f_auto,fl_progressive,h_420,q_auto,w_1000/https://dev-to-uploads.s3.amazonaws.com/uploads/articles/8b4kt6o06cedssslhx57.png" alt="छवि" class="image" class="imgstyle1"></a>
                <div class="krina" style="background-color:  rgb(243, 182, 85);">
                    <a href="display2.html" style="padding-right: 25%; text-decoration: none;">rating</a>
                    <a href="game/newgame/snake.js-master/index.html" style="text-decoration: none;">play</a></div>
            </div>

            <div class="rating" class="align1">
                <a href="">
                <img src="https://lh3.googleusercontent.com/vCXlKRTRhu8dKRxGkN66nqzhoToDRbxznDp7SGhHAXKeWRQeRkx6NgHXyetEXTqZ683yNf9LINI94XBe1eDgDMeQ=w640-h400-e365-rj-sc0x00ffffff" alt="छवि" class="image" class="imgstyle1"></a>
                <div class="krina" style="background-color:  rgb(243, 182, 85);">
                    <a href="display2.html" style="padding-right: 25%; text-decoration: none;">rating</a>
                    <a href="game/newgame/easiest-js-game-main/index.html" style="text-decoration: none;">play</a></div>
            </div>

            <div class="rating" class="align1">
                <a href="">
                <img src="https://i.pinimg.com/originals/6e/d2/bb/6ed2bbe78d8c0bc396e2081b8eabdf46.jpg" alt="छवि" class="image" class="imgstyle1"></a>
                <div class="krina" style="background-color:  rgb(243, 182, 85);">
                    <a href="display2.html" style="padding-right: 25%; text-decoration: none;">rating</a>
                    <a href="game/newgame/towers_game2d-master/index.html" style="text-decoration: none;">play</a></div>
            </div>
    </div>
</form>
</main>
<?php require'inc/footer.html'; ?>
</body>

</html>
