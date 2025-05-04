<?php

abstract class HumanAbstract {
    private $name;

    public function __construct(string $name) {
        $this -> name = $name;
    }

    public function getName(): string {
        return $this -> name;
    }

    abstract public function getGreetings(): string;
    abstract public function getMyNameIs(): string;

    public function introduceYourself(): string {
        return $this -> getGreetings() . '! ' . $this -> getMyNameIs() . 
        ' ' . $this -> getName() . '.';
    }
}

class RussianHuman extends HumanAbstract {
    private $name;
    
    public function __construct(string $name) {
        parent::__construct($name);
    }

    public function getGreetings(): string {
        return 'Привет';
    }

    public function getMyNameIs(): string {
        return 'Меня зовут ' . $this -> name;
    }
}

class EnglishHuman extends HumanAbstract {
    private $name;
    
    public function __construct(string $name) {
        parent::__construct($name);
    }

    public function getGreetings(): string {
        return 'Hello';
    }

    public function getMyNameIs(): string {
        return 'My name is ' . $this -> name;
    }
}

$Ivan = new RussianHuman('Иван');
$Bob = new EnglishHuman('Bob');

echo $Ivan -> introduceYourself() . "<br>";
echo $Bob -> introduceYourself() . "<br>";