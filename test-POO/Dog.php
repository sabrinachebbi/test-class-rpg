<?php 
require_once __DIR__.'/Mammal.php ';

final class Dog extends Mammal{
    private string $breed;


    public function __construct(string $name, int $age, string $furColor, string $tuskLength,string $breed){
        parent::__construct($name,$age,$furColor,$tuskLength) ;
        $this->setBreed($breed);
    }
    public function getBreed(): string {
        return $this->breed;
    }
    public function setBreed($breed){
        $this->breed = $breed;
    }


    public function bark():string{
        return $this->breed;

    }
   
}