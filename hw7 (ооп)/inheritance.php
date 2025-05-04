<?php

class Post {
    private $title;
    private $text;

    public function __construct(string $title, string $text) {
        $this -> title = $title;
        $this -> text = $text;
    }

    public function getTitle(): string {
        return $this -> title;
    }

    public function setTitle($title) {
        $this -> title = $title;
    }

    public function getText(): string {
        return $this -> text;
    }

    public function setText($text) {
        $this -> text = $text;
    }
}

class Lesson extends Post {
    private $homework;
    
    public function __construct(string $title, string $text, string $homework) {
        parent::__construct($title, $text);
        $this -> homework = $homework;
    }
    
    public function getHomework(): string {
        return $this -> homework;
    }
    
    public function setHonework($homework) {
        $this -> homework = $homework;
    }
}

class PaidLesson extends Lesson {
    private $price;
    
    public function __construct(string $title, string $text, string $homework, float $price) {
        parent::__construct($title, $text, $homework);
        $this -> price = $price;
    }
    
    public function getPrice(): float {
        return $this -> price;
    }
    
    public function setPrice($price) {
        $this -> price = $price;
    }   
}

$somePaidLesson = new PaidLesson('Урок о наследовании в PHP',
                                  'Лол, кек, чебурек',
                              'Ложитесь спать, утро вечера мудреннее',
                                 99.90);
var_dump($somePaidLesson);