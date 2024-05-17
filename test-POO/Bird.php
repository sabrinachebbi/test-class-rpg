<?php 
require_once __DIR__ .'/Animal.php';
abstract class Bird  extends Animal{
    protected float $wingSpan;


    public function __construct(string $name, int $age, float $wingSpan){
        parent::__construct($name,$age) ;
        $this->setWingSpan($wingSpan);
    }

    public function getWingSpan(): float{
        return $this->wingSpan;
    
    }
    public function setWingSpan(float $wingSpan){
        $this->wingSpan = $wingSpan;
    }
    public  function makeSound():string{
        return 'sound';
        }
        
         public  function move():string{
            return 'move';
         }
}