<?php
require_once("includes/config.php");
require_once('includes/classes/PreviewProvider.php');
require_once('includes/classes/CategoryContainers.php');
require_once('includes/classes/Entity.php');
require_once('includes/classes/EntityProvider.php');
require_once('includes/classes/ErrorMessage.php');
require_once('includes/classes/SeasonProvider.php');
require_once('includes/classes/Season.php');
require_once('includes/classes/Video.php');
require_once('includes/classes/VideoProvider.php');
require_once('includes/classes/User.php');

if (!isset($_SESSION["userLoggedIn"])) {
    header("Location: register.php");
}
$userLoggedIn = $_SESSION["userLoggedIn"];

?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <title>Welcome to Medflix</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/style/style.css" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/2a7706ff80.js" crossorigin="anonymous"></script>



    <script src="assets/js/script.js"></script>

</head>

<body>
    <div class="wrapper">
        <?php
        if (!isset($hideNav)) { //watchページのみnavBarを非表示に
            include_once("includes/navBar.php");
        }

        ?>