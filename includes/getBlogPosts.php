<?php
require('includes/classes/blogPost.php');

$blogTextTemp = file_get_contents('articalstorage.txt');
$blogtext = explode('*', $blogTextTemp);

$blogposts = [];

$blogposts['my-php-blog'] = new blogPost('My PHP Blog', $blogtext[0], '28th Sept 2016', 'Luke Winsley');
$blogposts['my-java-script-blog'] = new blogPost('My Java-Script Blog', $blogtext[1], '28th Sept 2016', 'Luke Winsley');
$blogposts['my-html-blog'] = new blogPost('My HTML Blog', $blogtext[2], '28th Sept 2016', 'Luke Winsley');
$blogposts['my-datebases-blog'] = new blogpost ('My Database Blog', $blogtext[3], '28th Sept 2016', 'Luke Winsley');