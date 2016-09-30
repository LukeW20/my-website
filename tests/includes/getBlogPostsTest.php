<?php

require_once '../../includes/getBlogPosts.php';

class getBlogPostTest extends PHPUnit_Framework_TestCase{

    public function testGetBlogListinGgood()
    {
        $blogtext = ['ssajddajdjdh'];
        $blogposts['blog'] = new blogPost('My Blog', $blogtext[0], '28th Sept 2016', 'Luke Winsley');
        $variable = getBlogListing($blogposts, 'class', 99);
        $variable2 = '<div class=class> <h2>My Blog </h2> <h4>28th Sept 2016 - Luke Winsley</h4> <p>ssajddajdjdh</p> <a href="articlepage.php?blog=blog"> Read More... </a> </div>';
        $this->assertEquals($variable, $variable2);
    }

    public function testGetBlogListingBad()
    {
        $blogtext = ['ssajddajdjdh'];
        $blogposts['blog'] = new blogPost('My Blog', $blogtext[0], '28th Sept 2016', 'Luke Winsley');
        $variable = getBlogListing($blogposts, 'class', 99);
        $variable2 = 'dfskdfhskdfjhsf';
        $this->assertNotEquals($variable, $variable2);
    }
}