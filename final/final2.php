<?php

class User
{
    private $name;
    public function getName()
    {
        return $this->name;
    }

    /**
     * Método declarado como final não pode ser
     * sobrescrito pela classe filha.
     */
    public final function setName(string $name)
    {
        return $this->name = $name;
    }
}

class Administrator extends User
{
    public function setName(string $name)
    {
        return 'teste';
    }
}

$adm = new Administrator();
$adm->setName('Admin');
print $adm->getName();