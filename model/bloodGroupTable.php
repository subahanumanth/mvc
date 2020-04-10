<?php
class bloodGroup
{
    public function insert($bg)
    {
        $conn = db::connection();
        $insert = "insert into blood_group (blood_group,is_deleted) values('$bg',1)";
        mysqli_query($conn, $insert);
        db::close($conn);
    }
    public function selectBloodGroup()
    {
        $conn = db::connection();
        $i = - 1;
        $query = "select * from blood_group where is_deleted = 1";
        $row = mysqli_query($conn, $query);
        if (mysqli_num_rows($row) > 0)
        {
            while ($rows = mysqli_fetch_assoc($row))
            {
                $i++;
                $list[$i]['id'] = $rows['id'];
                $list[$i]['bloodGroup'] = $rows['blood_group'];
            }
        }
        db::close($conn);
        return $list;
    }
    public function delete($id)
    {
        $conn = db::connection();
        $query = "update blood_group set is_deleted = 0 where id=$id";
        mysqli_query($conn, $query);
        db::close($conn);
    }
    public function find($id)
    {
        $conn = db::connection();
        $query = "select blood_group from blood_group where id=$id";
        $row = mysqli_query($conn, $query);
        if (mysqli_num_rows($row) > 0)
        {
            while ($rows = mysqli_fetch_assoc($row))
            {
                $list = $rows['blood_group'];
            }
        }
        db::close($conn);
        return $list;
    }
    public function update($id, $value)
    {
        $conn = db::connection();
        $extract = "select * from blood_group where id=$id";
        $row = mysqli_query($conn, $extract);
        if (mysqli_num_rows($row) > 0)
        {
            while ($rows = mysqli_fetch_assoc($row))
            {
                $bg = $rows['blood_group'];
            }
        }
        $query = "update blood_group set blood_group = '$value' where id=$id";
        mysqli_query($conn, $query);
        $update = "update detail set blood_group = '$value' where blood_group = '$bg'";
        mysqli_query($conn, $update);
        db::close($conn);
    }
}
?>
