<?php

/**
 * Este é o polimorfismo
 *  de sobreposição que o PHP suporta:
 */
abstract class Printer
{
    abstract public function toPrint();
}

class HpPrinter extends Printer
{
    public function toPrint()
    {
        return "HP Printing data...";
    }
}

class EpsonPrinter extends Printer
{
    public function toPrint()
    {
        return "Epson Printing data...";
    }
}

$printer = new EpsonPrinter();
print $printer->toPrint();