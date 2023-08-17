<?php

/*
 * Task 4: Build a set of animal classes that demonstrate polymorphism by overriding a method for making sounds.
 */
class Animal
{
    public function makeSound()
    {
        return "Some generic sound";
    }
}

class Dog extends Animal
{
    public function makeSound()
    {
        return "Woof woof!";
    }
}

class Cat extends Animal
{
    public function makeSound()
    {
        return "Meow meow!";
    }
}

$animals = [new Animal(), new Dog(), new Cat()];

foreach ($animals as $animal) {
    echo $animal->makeSound() . PHP_EOL;
}
