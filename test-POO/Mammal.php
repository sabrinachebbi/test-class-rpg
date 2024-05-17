<?php
require_once __DIR__ . '/Animal.php';
abstract class Mammal  extends Animal
{
    protected string $furColor;

    public function __construct(string $name, int $age, string $furColor)
    {
        parent::__construct($name, $age);
        $this->setName($furColor);
    }

    public function getFurColor(): string
    {
        return $this->furColor;
    }
    public function setFurColor(string $furColor)
    {
        $this->furColor = $furColor;
    }
    public  function makeSound(): string
    {
        return 'sound';
    }

    public  function move(): string
    {
        return 'move';
    }
}
