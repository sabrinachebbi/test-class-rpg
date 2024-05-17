<?php
require_once __DIR__ . '/Mammal.php ';

class Elephant extends Mammal
{
    private float $tuskLength;


    public function __construct(string $name, int $age, string $furColor, float $tuskLength)
    {
        parent::__construct($name, $age, $furColor);
        $this->setTuskLength($tuskLength);
    }

    public function getTuskLength(): float {
        return $this->tuskLength;
    }
    public function setTuskLength($tuskLength){
        $this->tuskLength = $tuskLength;
    }


    public function trumpet(): string
    {
        return $this->tuskLength;
    }
}
