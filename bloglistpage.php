<?php

require('get_explode_content.php');

$array = [];

class blogPost {
    public $title;
    public $text;
    public $description;
    public $date;
    public $author;

    public function __construct($title, $text, $date, $author) {
        $this->title = $title;
        $this->text = $text;
        $this->description = substr($text, 0, 300);
        $this->date = $date;
        $this->author = $author;
    }

    public function getTitle() {
        return $this->title;
    }
}


$array['my-php-blog'] = new blogPost('My PHP Blog', $blogtext[0], '28th Sept 2016', 'Luke Winsley');
$array['my-java-script-blog'] = new blogPost('My Java-Script Blog', $blogtext[1], '28th Sept 2016', 'Luke Winsley');
$array['my-html-blog'] = new blogPost('My HTML Blog', $blogtext[2], '28th Sept 2016', 'Luke Winsley');
$array['my-datebases-blog'] = new blogpost ('My Database Blog', $blogtext[3], '28th Sept 2016', 'Luke Winsley');
?>



<!doctype html>
<html xmlns="http://www.w3.org/1999/html">
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
        <div id="logo"> <img src="images/logo.png" alt="Logo"> </div>
        <div class="navbutton"> <a href="index.php"> Home </a> </div>
        <div class="navbutton"> <a href="aboutme.html"> About Me </a> </div>
        <div class="navbutton"> <a href="portfoliopage.html"> Portfolio </a> </div>
        <div class="navbutton"> <a href="contactpage.html"> Contact </a> </div>
        <div class="navbutton"> <a href="bloglistpage.php"> Blog </a></div>
    </div>

    <div id="header">
        <h1> Welcome to my Blog! </h1>
    </div>

    <div id="container">
        <div id="piccontainer">
            <div class="bloglistpictures"> <p> Image </p> </div>
            <div class="bloglistpictures"> <p> Image </p> </div>
            <div class="bloglistpictures"> <p> Image </p> </div>
            <div class="bloglistpictures"> <p> Image </p> </div>
        </div>
        <div id="blogcontent">

            <?php
            foreach($array as $key => $value) {
                echo '<div class="blogtext"> <h2>' . $value -> title .' </h2> <h4>' . $value -> date .' - ' . $value -> author . '</h4> <p>' . $value -> description . '</p> <a href="articalpage.php?blog=' . $key . '"> Read More... </a> </p> </div>';
//					'<div><a href=articalpage.php?blog=' . $key . '>' . $value->getTitle() . '</a></div>';
            }
            ?>
        </div>
    </div>
</div>
<div id="footer">
    <div id="footercontent"> <p> <a href="mailto:lukewinsley@gmail.com"> Email: lukewinsley@gmail.com </a> <br>
        <a href="https://mobile.twitter.com/LukeWinsley"> Twitter: @LukeWinsley </a> </p>
    </div>
    <div id="copyright"> Copyrighted By Luke Winsley </div>
</div>
</body>
</html>