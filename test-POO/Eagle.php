<?php 
require_once __DIR__ .'/Animal.php';
require_once __DIR__ .'/Bird.php';

class Eagle extends Bird
{
    private float $flightSpeed;


    public function __construct(string $name, int $age, float $wingSpan,float $flightSpeed)
    {
        parent::__construct($name, $age, $wingSpan);
        $this->setFlightSpeed($flightSpeed);
    }

    public function getFlightSpeed(): float {
        return $this->flightSpeed;
    }
    public function setFlightSpeed($flightSpeed){
        $this->flightSpeed = $flightSpeed;
    }


    public function hunt():string{
        return "Hunting...";
    }
}