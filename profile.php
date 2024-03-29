<?php
require_once "includes/securesession.inc.php";
require_once 'includes/orderfunctions.php';
require_once "includes/databasis.inc.php";

// check of user is ingelogd, stuur de user terug naar de login
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    die();
}

$orders = get_order($_SESSION['user_id'], $sqliconn);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css_files/main.css">
    <link rel="stylesheet" href="css_files/profile.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!-- NAVIGATION BAR -->
    <?php include "header.php"; ?>

    <!-- BANNER SECTION -->
    <section id="banner-box">
        <div class="banner-text">
            <h1>Hi, <?php echo $_SESSION['user_name']; ?></h1>
        </div>
    </section>

    <!-- BODY SECTION -->
    <section id="interface-container">
        <div class = "interface-box">
            
                <h1>Functions</h1>

                <div class="function-group">
                    <button><a href="index.php">Home page</a></button>
                </div>

                <div class="function-group">
                    <button><a href="catalog.php">Catalog</a></button>
                </div>

                <div class="function-group">
                    <button><a href="design.php">Design</a></button>
                </div>

                <div class="function-group">
                    <button><a href="aboutus.php">About us page</a></button>
                </div>

                <div class="function-group">
                    <button><a href="faq.php">Faq page</a></button>
                </div>

                <div class="function-group">
                    <button><a href="contact.php">Contact page</a></button>
                </div>

                <form class="button-group" action="includes/deleteacc.inc.php" method="POST">
                    <button type="submit" name="submit">Delete account!</button>
                </form>
        </div>
        <div class ="order-box">
            <div class="scroll">
                <h2>Past orders</h2>
                <?php
                    // check of er een order is in de database
                    if ($orders->num_rows > 0) {
                        // maak associative array, om info eruit te halen
                        while($row = $orders->fetch_assoc()) {
                            echo "<div class='orderoutput'>
                            Ordernum: " . $row["order_code"] . "<br>
                            Ordered: " . $row["order_created"] . "<br>
                            Arrival: " . $row["order_arrival"] . "</div>";
                        }
                    } 
                    // als geen order in database dan display no orders found
                    else {
                        echo "<div>No orders found</div>";
                    }
                ?>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <?php include "footer.php"; ?>

</body>

</html>
