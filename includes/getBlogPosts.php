<?php
require('includes/classes/blogPost.php');

$blogTextTemp = file_get_contents('articalstorage.txt');
$blogtext = explode('*', $blogTextTemp);

$blogposts = [];

$blogposts['my-php-blog'] = new blogPost('My PHP Blog', $blogtext[0], '28th Sept 2016', 'Luke Winsley');
$blogposts['my-java-script-blog'] = new blogPost('My Java-Script Blog', $blogtext[1], '28th Sept 2016', 'Luke Winsley');
$blogposts['my-html-blog'] = new blogPost('My HTML Blog', $blogtext[2], '28th Sept 2016', 'Luke Winsley');
$blogposts['my-datebases-blog'] = new blogpost ('My Database Blog', $blogtext[3], '28th Sept 2016', 'Luke Winsley');

$blogposts = array_reverse($blogposts );




function getBlogListing($blogposts, $class, $limitBlogPosts = 9999999999){
    $i = 0;
    $x = '';
    foreach($blogposts as $key => $value) {
        $i++;
        if ($i > $limitBlogPosts) {
            break;
        }
        $x.= '<div class=' . $class . '> <h2>' . $value -> title .' </h2> <h4>' . $value -> date .' - ' . $value -> author . '</h4> <p>' . $value -> description . '<a href="articalpage.php?blog=' . $key . '"> Read More... </a> </p> </div>';
    }
    return $x;
}


