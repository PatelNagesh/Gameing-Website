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
            background-image: url(https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/798fc33f-5338-426c-95ef-0dce36f68da0/d758mbq-3e6c2f7d-9887-4049-b362-a37dc3f28c70.png/v1/fit/w_828,h_466,q_70,strp/background_gaming__website__by_fnkk_d758mbq-414w-2x.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9OTAwIiwicGF0aCI6IlwvZlwvNzk4ZmMzM2YtNTMzOC00MjZjLTk1ZWYtMGRjZTM2ZjY4ZGEwXC9kNzU4bWJxLTNlNmMyZjdkLTk4ODctNDA0OS1iMzYyLWEzN2RjM2YyOGM3MC5wbmciLCJ3aWR0aCI6Ijw9MTYwMCJ9XV0sImF1ZCI6WyJ1cm46c2VydmljZTppbWFnZS5vcGVyYXRpb25zIl19.yP3sGWj_9ppEPyxI6iR7Kg3TAfwh15t32lAFi-spvT8);
            background-repeat: no-repeat;
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
    font-size: 22px;
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
                <a href="">
                <img src="https://store-images.s-microsoft.com/image/apps.49885.14325729045794215.44c449b4-3aa0-405a-b598-394166f67f72.ed5abef9-16d1-4b9d-b357-0ca4a8bdbab7?mode=scale&q=90&h=1080&w=1920" alt="छवि" class="image" class="imgstyle1"></a>
                <div class="krina" style="background-color:  rgb(107, 127, 245);">
                    <a href="display2.html" style="padding-right: 25%; text-decoration: none;">rating</a>
                    <a href="game/newgame/Straighten-Rifle-main/index.html" style="text-decoration: none;">play</a></div>
            </div>
            
        <div class="rating" class="align1">
            <img src="https://global.discourse-cdn.com/standard17/uploads/threejs/optimized/3X/2/f/2feb30f47257cd5419318ee0aa21a09957223378_2_690x414.jpeg" alt="छवि" class="image" class="imgstyle1">
            <div class="krina" style="background-color:  rgb(107, 127, 245);">
                <a href="display2.html" style="padding-right: 25%; text-decoration: none;"> rating</a> 
                <a href="game/newgame/annihilate-dev/index.html" style="text-decoration: none;">play</a></div>
            </div>

            <div class="rating" class="align1">
            <a href="">
            <img src="https://png.pngtree.com/background/20230513/original/pngtree-halloween-pixel-game-picture-image_2511262.jpg" alt="छवि" class="image" class="imgstyle1"></a>
            <div class="krina" style="background-color:  rgb(107, 127, 245);">
                <a href="display2.html" style="padding-right: 25%; text-decoration: none;">rating</a>
                <a href="game/newgame/Captain-of-Guerilla-master/index.html" style="text-decoration: none;">play</a></div>
        </div>

        <div class="rating" class="align1">
            <img src="https://www.marketjs.com/shell/article/retro-html5-games/shoot-the-asteroids.jpg" alt="छवि" class="image" class="imgstyle1">
            <div class="krina" style="background-color:  rgb(54, 78, 55);">
                <a href="display2.html"style="padding-right: 25%; color: #0fbb1d; text-decoration: none;">rating</a>
                <a href="game/newgame/Asteroid-js-master/index.html"style="color: #0fbb1d; text-decoration: none;">play</a></div>
        </div>

        <div class="rating" class="align1">
            <a href="">
            <img src="https://img.itch.zone/aW1hZ2UvMjUwNzkwLzExOTg2ODAucG5n/315x250%23c/ZKBoj5.png" alt="छवि" class="image" class="imgstyle1"></a>
            <div class="krina" style="background-color:  rgb(107, 127, 245);">
                <a href="display2.html" style="padding-right: 25%; text-decoration: none">rating</a>
                <a href="game/newgame/Ludum-Dare-41-master/index.html" style="text-decoration: none;">play</a></div>
        </div>

        <div class="rating" class="align1">
            <a href="">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQl2dow0iN8RXjMWJ3OPxzVsgzOrYqCX38pFg&usqp=CAU" alt="छवि" class="image" class="imgstyle1"></a>
            <div class="krina" style="background-color:  rgb(107, 127, 245);">
                <a href="display2.html" style="padding-right: 25%; text-decoration: none;">rating</a>
                <a href="game/newgame/RoadFighter-master/index.html" style="text-decoration: none;">play</a></div>
        </div>

        <div class="rating" class="align1">
            <a href="">
            <img src="https://w0.peakpx.com/wallpaper/843/88/HD-wallpaper-sea-war-game-war-ship-sea.jpg" alt="छवि" class="image" class="imgstyle1"></a>
            <div class="krina" style="background-color:  rgb(107, 127, 245);">
                <a href="display2.html" style="padding-right: 25%; text-decoration: none;">rating</a>
                <a href="game/newgame/sea_war-master/index.html" style="text-decoration: none;">play</a></div>
        </div>

        <div class="rating" class="align1">
            <a href="">
            <img src="https://i.pinimg.com/originals/6e/d2/bb/6ed2bbe78d8c0bc396e2081b8eabdf46.jpg" alt="छवि" class="image" class="imgstyle1"></a>
            <div class="krina" style="background-color:  rgb(107, 127, 245);">
                <a href="display2.html" style="padding-right: 25%; text-decoration: none;">rating</a>
                <a href="game/newgame/towers_game2d-master/index.html" style="text-decoration: none;">play</a></div>
        </div>    
    </div>
</form>
</main>
    <?php require'inc/footer.html'; ?>
</body>

</html>