<?php
interface selectBlood
{
    public function select();
    public function update($id, $value);
    public function delete($id);
    public function find($id);
    public function insert($bg);
}

class blood implements selectBlood
{
    public $variable;
    public function __construct()
    {
        $this->variable = new bloodGroup();
    }
    public function select()
    {
        return $this
            ->variable
            ->selectBloodGroup();
    }
    public function update($id, $value)
    {
        return $this
            ->variable
            ->update($id, $value);
    }
    public function delete($id)
    {
        return $this
            ->variable
            ->delete($id);
    }
    public function find($id)
    {
        return $this
            ->variable
            ->find($id);
    }
    public function insert($bg)
    {
        return $this
            ->variable
            ->insert($bg);
    }
}
$bloodGroup = new blood();
?>
