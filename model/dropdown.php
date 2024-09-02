<?php
class dropdown
{
    public function bloodGroup()
    {
        $key = - 1;
        $conn = db::connection();
        $query = "select *from blood_group where is_deleted=1";
        $row = mysqli_query($conn, $query);
        if (mysqli_num_rows($row) > 0)
        {
            while ($rows = mysqli_fetch_assoc($row))
            {
                $key++;
                $list[$key]['id'] = $rows['id'];
                $list[$key]['bloodGroup'] = $rows['blood_group'];
            }
        }
        db::close($conn);
        return $list;
    }
    public function detailsOfGraduation()
    {
        $key = - 1;
        $conn = db::connection();
        $query = "select *from details_of_graduation where is_deleted = 1";
        $row = mysqli_query($conn, $query);
        if (mysqli_num_rows($row) > 0)
        {
            while ($rows = mysqli_fetch_assoc($row))
            {
                $key++;
                $list[$key]['id'] = $rows['id'];
                $list[$key]['detailsOfGraduation'] = $rows['details_of_graduation'];
            }
        }
        db::close($conn);
        return $list;
    }
    public function areaOfInterest()
    {
        $key = - 1;
        $conn = db::connection();
        $query = "select *from admin_area_of_interest where is_deleted=1";
        $row = mysqli_query($conn, $query);
        if (mysqli_num_rows($row) > 0)
        {
            while ($rows = mysqli_fetch_assoc($row))
            {
                $key++;
                $list[$key]['id'] = $rows['id'];
                $list[$key]['areaOfInterest'] = $rows['area_of_interest'];
            }
        }
        db::close($conn);
        return $list;
    }
}


