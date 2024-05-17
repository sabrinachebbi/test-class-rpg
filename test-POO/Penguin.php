<?php 
require_once __DIR__ .'/Animal.php';
require_once __DIR__ .'/Bird.php';

final class Penguin extends Bird
{
    private float $swimSpeed;


    public function __construct(string $name, int $age, float $wingSpan,float $swimSpeed)
    {
        parent::__construct($name, $age, $wingSpan);
        $this->swimSpeed = $swimSpeed;
    }




    public function swim():string
    {
      return "swiming";

    }
}