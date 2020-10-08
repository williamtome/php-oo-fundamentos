<?php


class Car
{
    private $color;
    private $year;

    public function __construct($color, $year)
    {
        $this->color = $color;
        $this->year = $year;
    }
    
    public function run()
    {
        return 'Car is running...' . PHP_EOL;
    }

    public function stop()
    {
        return 'Car is stopped...' . PHP_EOL;
    }

    /**
     * @param mixed $color
     */
    public function setColor(string $color)
    {
        $this->color = $color;
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color. PHP_EOL;
    }

    /**
     * @param mixed $year
     */
    public function setYear(int $year)
    {
        $this->year = $year;
    }

    /**
     * @return mixed
     */
    public function getYear()
    {
        return $this->year. PHP_EOL;
    }

    public function __destruct()
    {
        print 'Removing object ' . __CLASS__ . PHP_EOL;
    }
}

$car = new Car('Green', 2010);
$car2 = new Car('Blue', 1994);

//$car->setColor('Red');
echo $car->getColor();
echo $car2->getYear();
//$car->setYear(1995);
//echo $car->getYear();
//echo $car->run();
//echo $car->stop();