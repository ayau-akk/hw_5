
<!DOCTYPE html>
<html>
<body>

<?php


class Car
{ 
public  $marka;
public  $driver;
public  $enge;
public  $carClass;

public function start() {
        echo "Поехали<br>";
    }
    
public function stop() {
        echo "Останавливаемся<br>";
    }
    
public function turnRight() {
        echo "Поворот направо<br>";
    }
    
public function turnLeft() {
        echo "Поворот налево<br>";
    }
    
public function __toString() {
        return $this->marka;
        return $this->driver;
        return $this->enge;
        return $this->carClass;
    }
    
}

class Lorry extends Car {
   public $carrying;
}

class sportCar extends Car {
   public $speed;
}
 
$car = new Car();
print_r($car);


class Engine
{
public $power;
public $company;

}
 
$engine = new Engine();
print_r($engine);


class Driver
{
public $fullName;
public $experience;
}
 
$driver = new Driver();
print_r($driver);

class Person extends Driver {
   public $fullName;
}

?> 




</body>
</html>
