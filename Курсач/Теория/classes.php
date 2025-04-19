<?php 

    // ООП - объекты и взаимодействие между собой
    // Интерфейс взаимодействия с классом - его публичные методы и свойства

class Cat {
    public $name;
    public $color;
    public $weight;


    private $Name;
    private $Color;
    private $Weight;

    public function setName(string $name) {
        $this->Name = $name;
    }

    public function getName() {
        return $this->Name;
    }

    public function sayMeow() {
        return "Meow! I'm $this->name";
    }
}

class Lion extends Cat {
    public function canRoar() {
        return 'Roar!';
    }
}

$p = PHP_EOL;

$cat1 = new Cat();
$cat2 = new Cat();

$lion = new Lion();

$cat1->name = "Murka";
$cat2->name = 'Vaska';

$cat1->setName('Murka');
$cat2->setName('Vaska');

var_dump($cat1).$p;

echo $cat1->sayMeow().$p;

var_dump($lion).$p;

