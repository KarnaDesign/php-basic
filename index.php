<?php

require_once("router.php");

?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style/style.css">
</head>

<body>

<nav id="pageHeader" class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <ul>
            <li><a href="index.php?page=home">Home</a></li>
            <li><a href="index.php?page=news">News</a></li>
            <li><a href="index.php?page=about">About</a></li>
            <li><a href="index.php?page=products">Products</a></li>
        </ul>
    </div>
</nav>
<div id="wrapper">


    <?php getPage(); ?>

</div>
<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>