<?php

/*
 * Task 1: Create classes to represent geometric shapes, including circles and rectangles. Implement methods for area calculation.
 */

class Shape
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function calculateArea()
    {
        // To be implemented by subclasses
    }
}

class Circle extends Shape
{
    private $radius;

    public function __construct($radius)
    {
        parent::__construct("Circle");
        $this->radius = $radius;
    }

    public function calculateArea()
    {
        return 3.14 * $this->radius * $this->radius;
    }
}

class Rectangle extends Shape
{
    private $width;
    private $height;

    public function __construct($width, $height)
    {
        parent::__construct("Rectangle");
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea()
    {
        return $this->width * $this->height;
    }
}

$circle = new Circle(5);
echo $circle->getName() . " Area: " . $circle->calculateArea() . PHP_EOL;

$rectangle = new Rectangle(4, 6);
echo $rectangle->getName() . " Area: " . $rectangle->calculateArea() . PHP_EOL;
