<?php


class Car
{
    private $color;
    private $year;

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
}

$car = new Car();

$car->setColor('Red');
echo $car->getColor();
$car->setYear(1995);
echo $car->getYear();
echo $car->run();
echo $car->stop();