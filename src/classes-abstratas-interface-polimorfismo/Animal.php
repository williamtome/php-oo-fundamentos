<?php

/**
 *  Casses abstratas não podem ser instanciadas.
 */
abstract class Animal
{
    private $name;

    public function run()
    {
        return "Animal is running...";
    }

    //  Criando um método abstrato, é obrigatório a classe filha implementá-la.
    abstract public function sound();
}

// Mas as classes filhas podem ser instanciadas
// desde que ela herde da classe abstrata.
class Dog extends Animal
{
    public function sound()
    {
        return "AUAUAUAUAu!!!";
    }
}

$dog = new Dog();
print $dog->run();
print $dog->sound();