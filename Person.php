<?php
class Person
{
  private $name;
  private $lastname;
  private $age;
  private $hp;
  private $mother;
  private $father;

  function __construct($name, $lastname, $age, $mother, $father)
  {
    $this->name = $name;
    $this->lastname = $lastname;
    $this->age = $age;
    $this->mother = $mother;
    $this->father = $father;
    $this->hp = 100;
  }
  function sayHi($name)
  {
    return "Hi $name, I`m " . $this->name;
  }
  function setHp($hp)
  {
    if ($this->hp + $hp >= 100) $this->hp = 100;
    else $this->hp = $this->hp + $hp;
  }
  function getHp()
  {
    return $this->hp;
  }
  function getName()
  {
    return $this->name;
  }
  function getLastname()
  {
    return $this->lastname;
  }
  function getAge()
  {
    return $this->age;
  }
  function getMother()
  {
    return $this->mother;
  }
  function getFather()
  {
    return $this->father;
  }
  function getInfo(){
    return "
    <h3>A few words about myself:</h3><br>"."My name is: ".$this->getName()."<br> My lastname is: ".$this->getLastname().
    "<br> I am: ".$this->getAge().
    "<br> My father is: ".$this->getFather()->getName()."<br> My mother is: ". $this->getMother()->getName() . 
    "<br> My grandfathers are: ".$this->getMother()->getFather()->getName(). ",".$this->getFather()->getFather()->getName(). 
    "<br> My grandmothers are:" .$this->getMother()->getMother()->getName(). ",".$this->getFather()->getMother()->getName();

  }
}
// Здоровье человека не может быть выше 100
$igor = new Person("Igor", "Petrov", 68);
$egor = new Person("Egor", "Ivanov", 67);
$nina = new Person("Nina", "Petrova", 65);
$lina = new Person("Lina", "Ivanova", 63);
$alex = new Person("Alex", "Ivanov", 42,$lina,$egor);
$olga = new Person("Olga", "Ivanova", 42, $nina, $igor);
$valera = new Person("Valera", "Ivanov", 15, $olga, $alex);

echo $valera->getInfo() . "<br>";

// echo $valera->getName() . "<br>";
// //echo $valera->mother->getName(); Так работать не будет, только через геттер

// echo $valera->getFather()->getName() . "<br>"; 
// echo $valera->getMother()->getName() . "<br>"; //Получаем маму Валеры

// echo $valera->getMother()->getFather()->getName(). "<br>";//Получаем дедушку Валеры
// echo $valera->getMother()->getMother()->getName(). "<br>";

// echo $valera->getFather()->getFather()->getName(). "<br>";
// echo $valera->getFather()->getMother()->getName(). "<br>";

// $igor = new Person("Igor", "Petrov", 38);
// echo $alex->sayHi($igor->name);
// $alex->name = "Alex";
// echo $alex->name;
// $medKit = 50;

// $alex->setHp(-30); //Упал
// echo $alex->getHp() . "<br>";
// $alex->setHp($medKit);
// echo $alex->getHp();
// Задача на практическую часть:
// Создать как минимум 2 бабушки, 2 дедушки по линии каждого из родителей.
// Вывести на экран информацию о всей родне сына
