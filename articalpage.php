<?php

$id = $_GET['blog'];

require('includes/getBlogPosts.php');

$blogpost = $blogposts[$id];
?>


<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" type="text/css" href="css/mainbody.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
    <link rel="stylesheet" type="text/css" href="css/global.css">

    <title> Luke Winsley </title>
</head>

<body>
<div id="wrapper">
    <div id="navbar">
        <div id="logo"> <img src="images/logo.png" alt="logo"> </div>
        <div class="navbutton"> <a href="index.php"> Home </a> </div>
        <div class="navbutton"> <a href="aboutme.html"> About Me </a> </div>
        <div class="navbutton"> <a href="portfoliopage.html"> Portfolio </a> </div>
        <div class="navbutton"> <a href="contactpage.html"> Contact </a> </div>
        <div class="navbutton"> <a href="bloglistpage.php"> Blog </a> </div>
    </div>

    <div id="header">
        <?php
        echo "<h1>" . $blogpost->title . "</h1>";
        ?>
    </div>

    <div id="articalcontainer">
        <div id="articalpageimg"> <img src="images/blogphoto.jpg" alt="Blogger Essentials"> </div>
        <?php
                 echo "<div id='articalpagecontent'> <h3>" . $blogpost->date . " - " . $blogpost->author . "</h3> <p>$blogpost->text</p> </div>";
        ?>
    </div>
    <div id="backbutton">
        <div> <a href="bloglistpage.php"> Back </a> </div>
    </div>
    </div>
    <div id="footer">
        <div id="footercontent"> <p> <a href="mailto:lukewinsley@gmail.com"> Email: lukewinsleygmail.com </a> <br>
            <a href="https://www.twitter.com/LukeWinsley"> Twitter: @LukeWinsley </a> </p>
        </div>
        <div id="copyright"> Copyrighted By Luke Winsley </div>
    </div>
</body>
</html>
