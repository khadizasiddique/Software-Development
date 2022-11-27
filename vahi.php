<?php
class car {
  public $name;
  public $color;
  public $driver;
  public function __construct($name, $color,$driver) {
    $this->name = $name;
    $this->color = $color;
    $this->driver = $driver;
  }
  public function intro() {
    echo "The car brand is {$this->name} ,  color  {$this->color} and driver {$this->driver}.";
  }
}

// Strawberry is inherited from Fruit
class suzuki extends car {
  public function message() {
    echo "The car informations we have:<br> ";
  }
}
$strawberry = new suzuki("suzuki", "red","purok");
$strawberry->message();
$strawberry->intro();

echo "<br>";

class toyota extends car {
    public function message() {
      #echo "The car informations we have:<br> ";
    }
  }
  $strawberry = new toyota("toyota", "yellow","roton");
  $strawberry->message();
  $strawberry->intro();

  echo "<br>";


  class ode extends car {
    public function message() {
      #echo "The car informations we have:<br> ";
    }
  }
  $strawberry = new ode("Audi", "black","shamsul");
  $strawberry->message();
  $strawberry->intro();



  
class bike {
  public $name;
  public $color;
  public $rider;
  public function __construct($name, $color,$rider) {
    $this->name = $name;
    $this->color = $color;
    $this->rider = $rider;


  }
  public function intro() {
    echo "The bike brand is {$this->name} ,color  {$this->color}, rider {$this->rider}.";
  }
}

echo "<br>";


// Strawberry is inherited from Fruit
class yamha extends bike {
  public function message() {
    echo "The bike informations we have:<br> ";
  }
}
$strawberry = new yamha("yamha", "black" ,"esha");
$strawberry->message();
$strawberry->intro();

echo "<br>";

class hero extends bike {
    public function message() {
      #echo "The car informations we have:<br> ";
    }
  }
  $strawberry = new hero("hero", "blue","Mahi");
  $strawberry->message();
  $strawberry->intro();


  echo "<h5><a href='index.php'>Go back to menu</a></h5>";


?>

