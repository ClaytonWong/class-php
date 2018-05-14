<?php
  # Declare a class
  class Car {
    // Property
    public $colour = 'Pink';

    /* Method */
    function return_colour() {
      return $this->colour;
    }
  }

  // Create object from class
  $vehicle = new car;
  var_dump($vehicle);
?>
