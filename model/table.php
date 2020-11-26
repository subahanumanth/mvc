<?php
class table
{
    public static $instance;
    public static function getInstance()
    {
        return table::$instance = new table();
    }
    private function __construct()
    {

    }
    public function save($value, $tableName, $columnName)
    {
        $conn = db::connection();
        $insert = "insert into {$tableName} ({$columnName},is_deleted) values('$value',1)";
        mysqli_query($conn, $insert);
        db::close($conn);
    }
    public function get($tableName, $columnName, $name)
    {
        $conn = db::connection();
        $key = - 1;
        $query = "select * from {$tableName} where is_deleted = 1";
        $row = mysqli_query($conn, $query);
        if (mysqli_num_rows($row) > 0)
        {
            while ($rows = mysqli_fetch_assoc($row))
            {
                $key++;
                $list[$key]['id'] = $rows['id'];
                $list[$key][$name] = $rows[$columnName];
            }
        }
        db::close($conn);
        return $list;
    }
    public function delete($id, $tableName)
    {
        $conn = db::connection();
        $query = "update {$tableName} set is_deleted = 0 where id=$id";
        mysqli_query($conn, $query);
        db::close($conn);
    }
    public function find($id, $tableName, $columnName)
    {
        $conn = db::connection();
        $query = "select * from {$tableName} where id=$id";
        $row = mysqli_query($conn, $query);
        if (mysqli_num_rows($row) > 0)
        {
            while ($rows = mysqli_fetch_assoc($row))
            {
                $list = $rows[$columnName];
            }
        }
        db::close($conn);
        return $list;
    }
    public function update($id, $value, $tableName, $columnName)
    {
        $conn = db::connection();
        $query = "update {$tableName} set {$columnName} = '$value' where id=$id";
        mysqli_query($conn, $query);
        db::close($conn);
    }
    public function check($id, $columnName)
    {
        $conn = db::connection();
        $query = "select {$columnName} from detail";
        $row = mysqli_query($conn, $query);
        if (mysqli_num_rows($row) > 0)
        {
            while ($rows = mysqli_fetch_assoc($row))
            {
                if ($id == $rows[$columnName])
                {
                    return true;
                    break;
                }
                else
                {
                    continue;
                }
            }
        }
        db::close($conn);
    }
    public function checkArea($id)
    {
        $conn = db::connection();
        $query = "select area_of_interest from area_of_interest";
        $row = mysqli_query($conn, $query);
        if (mysqli_num_rows($row) > 0)
        {
            while ($rows = mysqli_fetch_assoc($row))
            {
                if ($id == $rows['area_of_interest'])
                {
                    return true;
                    break;
                }
                else
                {
                    continue;
                }
            }
        }
        db::close($conn);
    }
}


