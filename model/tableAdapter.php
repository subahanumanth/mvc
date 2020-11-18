<?php

class tableAdapter
{
    private $variable;
    public function __construct()
    {
        $this->variable = table::getInstance ();
    }
    public function save($value, $tableName, $columnName)
    {
        return $this
            ->variable
            ->save($value, $tableName, $columnName);
    }
    public function get($tableName, $columnName, $name)
    {
        return $this
            ->variable
            ->get($tableName, $columnName, $name);
    }
    public function delete($id, $tableName)
    {
        return $this
            ->variable
            ->delete($id, $tableName);
    }
    public function find($id, $tableName, $columnName)
    {
        return $this
            ->variable
            ->find($id, $tableName, $columnName);
    }
    public function update($id, $value, $tableName, $columnName)
    {
        return $this
            ->variable
            ->update($id, $value, $tableName, $columnName);
    }
    public function check($id, $columnName)
    {
        return $this
            ->variable
            ->check($id, $columnName);
    }
    public function checkArea ($id)  
    {
        return $this
            ->variable
            ->checkArea($id);
    }
}
$table = new tableAdapter ();
?>
