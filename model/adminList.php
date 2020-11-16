<?php
class adminList
{
    public static $instance;
    public static function getInstance()
    {
        return adminList::$instance = new adminList();
    }
    private function __construct()
    {

    }
    public function showAllDetail($id)
    { 
        $conn = db::connection();
        try {
            if(isset($conn)) {

            } else {
                throw new Exception("Database Error");
            }
        }
        catch (Exception $e) {
            echo $e->getMessage();
        }   

        $row = mysqli_query($conn, "select *from detail where id != $id");
        $key = -1;
        if (mysqli_num_rows($row) > 0)
        {
            while ($rows = mysqli_fetch_assoc($row))
            {
                $key++;
                $list[$key]['id'] = $rows['id'];
                $list[$key]['firstName'] = $rows['first_name'];
                $list[$key]['lastName'] = $rows['last_name'];
                $list[$key]['dateOfBirth'] = $rows['date_of_birth'];
                $list[$key]['detailsOfGraduation'] = $rows['details_of_graduation'];
                $list[$key]['bloodGroup'] = $rows['blood_group'];
                $list[$key]['gender'] = $rows['gender'];
                $list[$key]['profilePicture'] = $rows['profile_picture'];
                $list[$key]['rights'] = $rows['rights'];
            }
        }
        db::close($conn);
        return $list;
    }
    public function showAllEmail($id)
    {
        $list = [];
        $conn = db::connection();
        $row = mysqli_query($conn, "select email_id from email where user_id=$id");
        if (mysqli_num_rows($row) > 0)
        {
            while ($rows = mysqli_fetch_assoc($row))
            {
                $list[] = $rows['email_id'];
            }
        }
        db::close($conn);
        return implode(',', $list);
    }
    public function showAllMobile($id)
    {
        $list = [];
        $conn = db::connection();
        $row = mysqli_query($conn, "select mobile from mobile where user_id=$id");
        if (mysqli_num_rows($row) > 0)
        {
            while ($rows = mysqli_fetch_assoc($row))
            {
                $list[] = $rows['mobile'];
            }
        }
        db::close($conn);
        return implode(',', $list);
    }

    public function selectName($id)
    {
        $conn = db::connection();
        $query = "select *from detail where id=$id";
        $row = mysqli_query($conn, $query);
        if (mysqli_num_rows($row) > 0)
        {
            while ($rows = mysqli_fetch_assoc($row))
            {
                $firstName = $rows['first_name'];
                $lastName = $rows['last_name'];
            }
        }
        db::close($conn);
        return $firstName . " " . $lastName;
    }
    public function showAllBloodGroup($id)
    {
        $conn = db::connection();
        $query = "select b.blood_group from detail d join blood_group b on d.blood_group = b.id and d.id=$id";
        $row = mysqli_query($conn, $query);
        if (mysqli_num_rows($row) > 0)
        {
            while ($rows = mysqli_fetch_assoc($row))
            {
                $bloodGroup = $rows['blood_group'];
            }
        }
        db::close($conn);
        return $bloodGroup;
    }
    public function showAllDetailsOfGraduation($id)
    {
        $conn = db::connection();
        $query = "select de.details_of_graduation from detail d join details_of_graduation de on d.details_of_graduation=de.id and d.id=$id";
        $row = mysqli_query($conn, $query);
        if (mysqli_num_rows($row) > 0)
        {
            while ($rows = mysqli_fetch_assoc($row))
            {
                $dog = $rows['details_of_graduation'];
            }
        }
        db::close($conn);
        return $dog;
    }
    public function showAllAreaOfInterest($id)
    {
        $conn = db::connection();
        $query = "select ad.area_of_interest from detail d join area_of_interest a on a.user_id=d.id and a.user_id=$id join admin_area_of_interest ad on a.area_of_interest=ad.id";
        $row = mysqli_query($conn, $query);
        if (mysqli_num_rows($row) > 0)
        {
            while ($rows = mysqli_fetch_assoc($row))
            {
                $aoi[] = $rows['area_of_interest'];
            }
        }
        db::close($conn);
        $aoi = implode(",", $aoi);
        return $aoi;
    }
    public function deleteEmail($id)
    {
        $conn = db::connection();
        $query = "delete from email where user_id=$id";
        $row = mysqli_query($conn, $query);
        db::close($conn);
    }
    public function deleteMobile($id)
    {
        $conn = db::connection();
        $query = "delete from mobile where user_id=$id";
        $row = mysqli_query($conn, $query);
        db::close($conn);
    }
    public function deleteAreaOfInterest($id)
    {
        $conn = db::connection();
        $query = "delete from area_of_interest where user_id=$id";
        $row = mysqli_query($conn, $query);
        db::close($conn);
    }
    public function deleteDetail($id)
    {
        $conn = db::connection();
        $query = "delete from detail where id=$id";
        $row = mysqli_query($conn, $query);
        db::close($conn);
    }
    public function sortByName ($id) {
        $conn = db::connection();
        $row = mysqli_query($conn, "select * from detail where id != $id order by first_name");
        $key = -1;
        if (mysqli_num_rows($row) > 0)
        {
            while ($rows = mysqli_fetch_assoc($row))
            {
                $key++;
                $list[$key]['id'] = $rows['id'];
                $list[$key]['firstName'] = $rows['first_name'];
                $list[$key]['lastName'] = $rows['last_name'];
                $list[$key]['dateOfBirth'] = $rows['date_of_birth'];
                $list[$key]['detailsOfGraduation'] = $rows['details_of_graduation'];
                $list[$key]['bloodGroup'] = $rows['blood_group'];
                $list[$key]['gender'] = $rows['gender'];
                $list[$key]['profilePicture'] = $rows['profile_picture'];
                $list[$key]['rights'] = $rows['rights'];
            }
        }
        db::close($conn);
        return $list;
    }
    public function sortByGender ($id) {
        $conn = db::connection();
        $row = mysqli_query($conn, "select * from detail where id != $id order by gender");
        $key = -1;
        if (mysqli_num_rows($row) > 0)
        {
            while ($rows = mysqli_fetch_assoc($row))
            {
                $key++;
                $list[$key]['id'] = $rows['id'];
                $list[$key]['firstName'] = $rows['first_name'];
                $list[$key]['lastName'] = $rows['last_name'];
                $list[$key]['dateOfBirth'] = $rows['date_of_birth'];
                $list[$key]['detailsOfGraduation'] = $rows['details_of_graduation'];
                $list[$key]['bloodGroup'] = $rows['blood_group'];
                $list[$key]['gender'] = $rows['gender'];
                $list[$key]['profilePicture'] = $rows['profile_picture'];
                $list[$key]['rights'] = $rows['rights'];
            }
        }
        db::close($conn);
        return $list;
    }
    public function showAllName($id, $searchName = null)
    { 
        echo $searchName;
        $conn = db::connection();
        $row = mysqli_query($conn, "select *from detail where id != $id and first_name like '{$searchName}%'");
        $key = -1;
        if (mysqli_num_rows($row) > 0)
        {
            while ($rows = mysqli_fetch_assoc($row))
            {
                $key++;
                $list[$key]['id'] = $rows['id'];
                $list[$key]['firstName'] = $rows['first_name'];
                $list[$key]['lastName'] = $rows['last_name'];
                $list[$key]['dateOfBirth'] = $rows['date_of_birth'];
                $list[$key]['detailsOfGraduation'] = $rows['details_of_graduation'];
                $list[$key]['bloodGroup'] = $rows['blood_group'];
                $list[$key]['gender'] = $rows['gender'];
                $list[$key]['profilePicture'] = $rows['profile_picture'];
                $list[$key]['rights'] = $rows['rights'];
            }
        }
        db::close($conn);
        return $list;
    }
    public function fetchData ($id) {
        $conn = db::connection();
        $row = mysqli_query($conn, "select id from detail");
        if (mysqli_num_rows($row) > 0) {
            while ($row = mysqli_fetch_assoc($row)) {
                if($id == $row['id']) {
                    return true;
                    break;
                } 
            }
        }
    }

}


?>
