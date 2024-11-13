<?php
//  PRAKTIKUM 1 LANGKAH 4
// class Car{
//     public $brand;
//     public function startEngine(){
//         echo "Engine started";
//     }
// }

// $car1 = new Car();
// $car1->brand = "Toyota";

// $car2 = new Car();
// $car2->brand = "Honda";

// $car1->startEngine();
// echo "<br>" . $car2->brand;  



//------PRAKTIKUM 1 LANGKAH 6 INHERITANCE------
// class Animal {
//     protected $name;

//     public function __construct($name){
//         $this->name = $name;
//     }

//     public function eat(){
//         echo $this->name . " is eating. <br>";
//     }

//     public function sleep(){
//         echo $this->name . " is sleeping. <br>";
//     }
// }

// class Cat extends Animal{
//     public function meow(){
//         echo $this->name . " says meow!<br>";
//     }
// }

// class Dog extends Animal{
//     public function bark(){
//         echo $this->name . " says bark!<br>";
//     }
// }

// $cat = new Cat("Whiskers");
// $dog = new Dog("Doggy");

// $cat->eat();
// $dog->sleep();
// $cat->meow();
// $dog->bark();



//------PRAKTIKUM 1 LANGKAH 7 POLIMORFISME------
// interface Shape{
//     public function calculateArea();
// }

// class Circle implements Shape{
//     private $radius;

//     public function __construct($radius){
//         $this->radius = $radius;
//     }

//     public function calculateArea(){
//         return pi() * pow($this->radius, 2);
//     }
// }

// class Rectangle implements Shape{
//     private $width;
//     private $height;

//     public function __construct($width, $height){
//         $this->width = $width;
//         $this->height = $height;
//     }

//     public function calculateArea(){
//         return $this->width * $this->height;
//     }
// }

// function printArea(Shape $shape){
//     echo "Area: " . $shape->calculateArea() . "<br>";
// }

// $circle = new Circle(5);
// $rectangle = new Rectangle(4, 6);

// printArea($circle);
// printArea($rectangle);



//------PRAKTIKUM 1 LANGKAH 8 ENKAPSULASI------
// class Car{
//     private $model;
//     private $color;

//     public function __construct($model, $color){
//         $this->model = $model;
//         $this->color = $color;
//     }
//     public function getModel(){
//         return $this->model;
//     }

//     public function getColor(){
//         return $this->color;
//     }

//     public function setColor($color){
//         $this->color = $color;
//     }
// }
// $car = new Car("Toyota", "Blue");
// echo "Model: " . $car->getModel() . "<br>";
// echo "Color: " . $car->getColor() . "<br>";

// $car->setColor("Red");
// echo "Updated Color: " . $car->getColor() . "<br>";



//------PRAKTIKUM 1 LANGKAH 9 ABSTRAK------
// abstract class Shape{
//     abstract public function calculateArea();
// }

// class Circle extends Shape{
//     private $radius;

//     public function __construct($radius){
//         $this->radius = $radius;
//     }

//     public function calculateArea(){
//         return pi() * pow($this->radius, 2);
//     }
// }

// class Rectangle extends Shape{
//     private $width;
//     private $height;

//     public function __construct($width, $height){
//         $this->width = $width;
//         $this->height = $height;
//     }

//     public function calculateArea(){
//         return $this->width * $this->height;
//     }
// }

// $circle = new Circle(5);
// $rectangle = new Rectangle(4, 6);

// echo "Area of Circle: " . $circle->calculateArea() . "<br>";
// echo "Area of Rectangle: " . $rectangle->calculateArea() . "<br>";



//------PRAKTIKUM 1 LANGKAH 10 INTERFACE------
// interface Shape{
//     public function calculateArea();
// }

// interface Color{
//     public function getColor();
// }

// class Circle implements Shape, Color{
//     private $radius;
//     private $color;

//     public function __construct($radius, $color){
//         $this->radius = $radius;
//         $this->color = $color;
//     }

//     public function calculateArea(){
//         return pi() * pow($this->radius, 2);
//     }

//     public function getColor(){
//         return $this->color;
//     }
// }

// $circle = new Circle(5, "Blue");
// echo"Area of Circle: " . $circle->calculateArea() . "<br>";
// echo"Color of Circle: " . $circle->getColor() . "<br>";



//------PRAKTIKUM 1 LANGKAH 11 CONSTRUCTOR DESTRUCTOR------
// Class Car{
//     private $brand;

//     //constructor
//     public function __construct($brand){
//         echo"A new car is created.<br>";
//         $this->brand = $brand;
//     }

//     public function getBrand(){
//         return $this->brand;
//     }

//     //destructor
//     public function __destruct(){
//         echo"The car is destroyed.<br>";
//     }
// }

// $car = new Car("Toyota");
// echo"Brand: " . $car -> getBrand() . "<br>";



//------PRAKTIKUM 1 LANGKAH 12 ENKAPSULASI DAN MODIFIER------
class Animal{
    public $name;
    protected $age;
    private $color;

    public function __construct($name, $age, $color){
        $this->name = $name;
        $this->age = $age;
        $this->color = $color;
    }

    public function getName(){
        return $this->name;
    }

    protected function getAge(){
        return $this->age;
    }

    private function getColor(){
        return $this->color;
    }
}

$animal = new Animal("Dog", 3, "Brown");
echo "Name: " . $animal->name . "<br>";
echo "Age: " . $animal->getAge() . "<br>";
echo "Color: " . $animal->getColor() . "<br>";

?>