<?php 

interface CalculateArea {
    public function calculateArea(): float;
}

class Rectangle implements CalculateArea {
    private $a;
    private $b;

    public function __construct(int $a, int $b) {
        $this->a = $a;
        $this->b = $b;
    }

    public function calculateArea(): float {
        return $this->a * $this->b;
    }   
}

class Square implements CalculateArea {
    private $a;

    public function __construct(int $a) {
        $this->a = $a;
    }

    public function calculateArea(): float {
        return pow($this->a, 2);
    }
}

class Circle implements CalculateArea {
    private $r;

    const Pi = 3.1416;

    public function __construct(int $r) {
        $this->r = $r;
    }

    public function calculateArea(): float {
        return self::Pi * pow($this->r, 2);
    }
}

class Triangle implements CalculateArea{
    private $a;
    private $h;

    public function __construct(int $a, int $h) {
        $this->a = $a;
        $this->h = $h;
    }

    public function calculateArea(): float {
        return $this->a * $this->h / 2;
    }
}

$array = [
    'rectangle' => new Rectangle(3, 4),
    'square' => new Square(3),
    'circle' => new Circle(2),
    'triangle' => new Triangle(2, 4),
];

foreach ($array as $figure) {
    if ($figure instanceof CalculateArea) {
        echo $figure->calculateArea().PHP_EOL;
    }
    else echo "Class doesn't have interface CalculateArea".PHP_EOL;
}


