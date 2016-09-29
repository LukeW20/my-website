<?php

require '../../../includes/classes/blogPost.php';

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








///  testing that the image url GETs correctly
//  public function testGetImageGood()
//{
//    $testPost = new blogPost('stuff', 'stuff', 'this is an image', 'this is the body of the blog post. It should be fairly long', 'this is just a summary. Short');
//    $value1 = 'stuff';
//    $value2 = $testPost->getImage();
//    $this->assertEquals($value1, $value2);
//
//}
//
////  testing that the image url isn't pulling through incorrect information
//  public function testGetImageBad()
//{
//    $testPost = new blogPost('stuff', 'image1.jpg', 'this is an image', 'this is the body of the blog post. It should be fairly long', 'this is just a summary. Short');
//    $value1 = 'stuff';
//    $value2 = $testPost->getImage();
//    $this->assertNotEquals($value1, $value2);
//
//}
//
////  testing that the alt text for images GETs correctly
//  public function testGetImageAltGood()
//{
//    $testPost = new blogPost('stuff', 'image1.jpg', 'stuff', 'this is the body of the blog post. It should be fairly long', 'this is just a summary. Short');
//    $value1 = 'stuff';
//    $value2 = $testPost->getImageAlt();
//    $this->assertEquals($value1, $value2);
//
//}
//
////  testing that the image alt text isn't pulling through incorrect information
//  public function testGetImageAltBad()
//{
//    $testPost = new blogPost('pizza', 'image1.jpg', 'this is an image', 'this is the body of the blog post. It should be fairly long', 'this is just a summary. Short');
//    $value1 = 'stuff';
//    $value2 = $testPost->getImageAlt();
//    $this->assertNotEquals($value1, $value2);