<?php
interface detailsOfGraduationController
{
    public function detailsOfGraduation();
}

class detailsOfGraduation implements detailsOfGraduationController
{
    public $variable;
    public function __construct()
    {
        $this->variable = new dropdown();
    }
    public function detailsOfGraduation()
    {
        return $this
            ->variable
            ->detailsOfGraduation();
    }
}
$dropdown = new detailsOfGraduation();
?>
