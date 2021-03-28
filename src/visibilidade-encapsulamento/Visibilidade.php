<?php

// public
// private
// protected

class Person
{
    public $name;
    protected $sex;
    private $age = 12;

    public function setAge($age)
    {
        return $this->age = $age;
    }

    public function showAge()
    {
        return $this->age;
    }
}

class Woman extends Person
{
    private $age = 30;
    public function showAge()
    {
        return $this->age;
    }
}

$person = new Person();
$person->name = 'William';

$woman = new Woman();
echo $woman->showAge();

echo $person->showAge();
