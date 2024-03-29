<?php
require_once "includes/securesession.inc.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GreenWear: clothing for you</title>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css_files/main.css">
    <link rel="stylesheet" href="css_files/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!-- NAVIGATION BAR -->
    <?php include "header.php"; ?>
    <!-- BODY SECTION -->
    <div class="mainimage">
        <div class="imgtxt">
            GreenWear
        </div>
    </div>
    <div class="container">
        <div class="txtpart">
            <div class="textbasic">
                <h1>Shop the look</h1>
                <h4>Shop the latest trends in our catalogue. Your unique fashion journey begins here.</h4>
                <br>
            </div>
            <button>
                <a href="catalog.php" class="noline">see more</a>
            </button>
        </div>
        <div class="rightpic">
            <img src="img/p3.jpg">
        </div>
        <div class ="leftpic">
            <img src="img/p1.jpg">
        </div>
        <div class="txtpart">
            <div class="textbasic">
            <h1>Create your own</h1>
            <h4>Shop the latest trends or unleash your creativity with our customizable clothing options.</h4>
            <br>
            </div>
            <button>
                <a href="design.php" class="noline">start creating!</a>
            </button>
        </div>
    </div>
    <!-- FOOTER -->
    <?php include "footer.php"; ?>
</body>

</html>