<?php

class Animal
{
    public $name;

    public function sleep()
    {
        return $this->name . ' are sleeping... zzzz' . PHP_EOL;
    }
}

class Dog extends Animal
{
    public function sleep()
    {
        print parent::sleep();
        return 'DOG is sleeping yet!';
    }
}

class Bird extends Animal
{

}

$dog = new Dog();
$dog->name = 'Ted';
print $dog->sleep();

print PHP_EOL;

$bird = new Bird();
$bird->name = 'Passaro';
print $bird->sleep();