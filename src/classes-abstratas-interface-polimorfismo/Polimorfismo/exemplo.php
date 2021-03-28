<?php
interface Shape 
{
    public function getType();
    public function getArea();
}

class Square implements Shape
{
    private $width;
    private $height;

    public function __construct($l, $a)
    {
        $this->width = $l;
        $this->height = $a;
    }

    public function getType()
    {
        return 'Quadrado';
    }

    public function getArea()
    {
        return $this->width * $this->height;
    }
}

class Circle implements Shape
{
    private $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function getType()
    {
        return 'Circulo';
    }

    public function getArea()
    {
        return pi() * ( $this->radius * $this->radius );
    }
}

$square = new Square(5,5);
$circle = new Circle(7);

$objects = [$circle, $square];

foreach ($objects as $object) {
    $area = $object->getArea();
    $type = $object->getType();

    echo "AREA: " . $type . ' - ' . $area . PHP_EOL;
}