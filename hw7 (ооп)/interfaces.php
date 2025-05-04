<?php

interface CalculateSquare {
    public function calculateSquare(): float;
}

class Rectangle implements CalculateSquare {
    private $a;
    private $b;

    public function __construct(int $a, int $b) {
        $this -> a = $a;
        $this -> b = $b;
    }

    public function calculateSquare(): float {
        return $this -> a * $this -> b;
    }   
}

class Square implements CalculateSquare {
    private $a;

    public function __construct(int $a) {
        $this -> a = $a;
    }

    public function calculateSquare(): float {
        return pow($this -> a, 2);
    }
}

class Circle implements CalculateSquare {
    private $r;

    private const Pi = 3.1416;

    public function __construct(int $r) {
        $this -> r = $r;
    }

    public function calculateSquare(): float {
        return self::Pi * pow($this -> r, 2);
    }
}

// implements CalculateSquare
class Triangle {
    private $a;
    private $h;

    public function __construct(int $a, int $h) {
        $this -> a = $a;
        $this -> h = $h;
    }

    // public function CalculateSquare(): float {
    //     return $this -> a * $this -> h / 2;
    // }
}

$array = [
    'rectangle' => new Rectangle(6, 9),
    'square' => new Square(4),
    'circle' => new Circle(8),
    'triangle' => new Triangle(12, 16),
];

foreach ($array as $figure) {
    if ($figure instanceof CalculateSquare) {
        echo 'Площадь фигуры равна ' . $figure->calculateSquare() . "<br>
        Фигура относится к классу " . get_class($figure) . "<br><br>";
    }
    else echo 'Объект класса ' . get_class($figure) . ' не реализует интерфейс CalculateSquare.';
}