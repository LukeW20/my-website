<?php

/**
 * Created by PhpStorm.
 * User: academy
 * Date: 29/09/2016
 * Time: 09:11
 */
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