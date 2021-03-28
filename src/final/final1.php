<?php

/**
 * Classe declarada como final, els não pode ser extendida,
 * ou seja, as classes filhas não podem herdar uma classe final.
 */
final class User
{
    private $name;
    public function getName()
    {
        return $this->name;
    }

    public function setName(string $name)
    {
        return $this->name = $name;
    }
}

class Administrator extends User
{

}

$adm = new Administrator();
$adm->setName('Admin');
print $adm->getName();