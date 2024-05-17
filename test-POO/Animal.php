<?php 
abstract class Animal {
    private string $name;
    private int $age;

public function __construct(string $name, int $age){
    $this->setName($name);
    $this->setAge($age);
}
public function getName(): string{
    return $this->name;

}
public function setName(string $name){
    $this->name = $name;
}
public function getAge(): int{
    return $this->age;
}
public function setAge(int $age){
    $this->age = $age;
}

  abstract public  function makeSound():string;
  abstract public  function move():string;
}