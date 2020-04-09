<?php
interface areaOfInterestController {
  public function areaOfInterest ();
}

class areaOfInterest implements areaOfInterestController {
  public $variable;
  public function __construct () {
    $this->variable = new dropdown ();
  }
  public function areaOfInterest () {
   return $this->variable->areaOfInterest ();
  }
}
$dropdown = new areaOfInterest();
?>
