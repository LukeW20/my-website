<?php

class blogPost extends PHPUnit_Framework_TestCase{
    public function testGetBlogPosts(){
        $blogposts['blog'] = new blogPost('My Blog', $blogtext[0], '28th Sept 2016', 'Luke Winsley');
    }
}