<?php
interface bloodGroupController
{
    public function bloodGroup();
}

class bloodGroup implements bloodGroupController
{
    public $variable;
    public function __construct()
    {
        $this->variable = new dropdown();
    }
    public function bloodGroup()
    {
        return $this
            ->variable
            ->bloodGroup();
    }
}
$dropdown = new bloodGroup();
?>
