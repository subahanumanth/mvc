<?php

class bloodGroup
{
    public $instance;
    public function __construct ()
    {
        $this->instance = new dropdown ();
    }
    public function dropdown ()
    {
        return $this->instance->bloodGroup ();
    }
}

class areaOfInterest
{
    public $instance;
    public function __construct ()
    {
        $this->instance = new dropdown ();
    }
    public function dropdown ()
    {
        return $this->instance->areaOfInterest ();
    }
}

class detailsOfGraduation
{
    public $instance;
    public function __construct ()
    {
        $this->instance = new dropdown ();
    }
    public function dropdown ()
    {
        return $this->instance->detailsOfGraduation ();
    }
}

$bloodGroup = new bloodGroup ();
$areaOfInterest = new areaOfInterest ();
$detailsOfGraduation = new detailsOfGraduation ();
