<?php

require_once '../../../includes/classes/blogPost.php';

class blogPostTest extends PHPUnit_Framework_TestCase{
    public function testConstruct(){
    $testPost = new blogPost('title', 'text', 'date', 'author');
    $this->assertInstanceOf(blogPost::class, $testPost);
}

    /**
     * @expectedException PHPUnit_Framework_Error
     */
    public function testConstructMalform(){
        $array =[];
        $testPost = new blogPost('title', $array, 'date', 'author');
    }


    public function testGetTitleGood(){
        $testPost = new blogPost('title', 'text', 'date', 'author');
        $value1 = 'title';
        $value2 = $testPost->getTitle();
        $this->assertEquals($value1, $value2);
    }

    public function testGetTitleBad()
    {
        $testPost = new blogPost('title', 'text', 'date', 'author');
        $value1 = 'gsfgdfg';
        $value2 = $testPost->getTitle();
        $this->assertNotEquals($value1, $value2);
    }

}