<?php

interface Animal
{
    public function sound();
    public function run();
}

class Dog implements Animal
{
    public function run()
    {
        return "Dog is running";
    }

    public function sound()
    {
        return "AUAUAU";
    }
}

$dog = new Dog();

print $dog instanceof Dog;

print "\n";

print $dog instanceof Animal;

print "\n";

print $dog->run();
print $dog->sound();
