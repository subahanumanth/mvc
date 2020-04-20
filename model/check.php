<?php
class check
{
    public static $instance;
    public static function getInstance()
    {
        return check::$instance = new check();
    }
    private function __construct()
    {

    }
    public function select($id)
    {
        $conn = db::connection();
        $row = mysqli_query($conn, "select *from detail where id=$id");
        if (mysqli_num_rows($row) > 0)
        {
            while ($rows = mysqli_fetch_assoc($row))
            {
                $list['id'] = $rows['id'];
                $list['first_name'] = $rows['first_name'];
                $list['last_name'] = $rows['last_name'];
                $list['date_of_birth'] = $rows['date_of_birth'];
                $list['gender'] = $rows['gender'];
                $list['profile_picture'] = $rows['profile_picture'];
                $list['rights'] = $rows['rights'];
            }
        }
        db::close($conn);
        return $list;
    }

    public function selectNamePassword($name, $password)
    {
        $list = [];
        $conn = db::connection();
        $row = mysqli_query($conn, "select * from detail where first_name='$name'");
        if (mysqli_num_rows($row) > 0)
        {
            while ($rows = mysqli_fetch_assoc($row))
            {
                $list['id'] = $rows['id'];
                $list['first_name'] = $rows['first_name'];
                $list['last_name'] = $rows['last_name'];
                $list['date_of_birth'] = $rows['date_of_birth'];
                $list['details_of_graduation'] = $rows['details_of_graduation'];
                $list['blood_group'] = $rows['blood_group'];
                $list['gender'] = $rows['gender'];
                $list['profile_picture'] = $rows['profile_picture'];
                $list['password'] = $rows['password'];
                $list['rights'] = $rows['rights'];
                if (password_verify($password, $list['password']))
                {
                    return $list;
                }
            }
        }
        db::close($conn);
    }
    public function selectBloodGroup($id)
    {
        $conn = db::connection();
        $row = mysqli_query($conn, "select b.blood_group from detail d join blood_group b on d.blood_group = b.id and d.id=$id");
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
    public function selectDetailsOfGraduation($id)
    {
        $conn = db::connection();
        $row = mysqli_query($conn, "select de.details_of_graduation from detail d join details_of_graduation de on d.details_of_graduation=de.id and d.id=$id");
        if (mysqli_num_rows($row) > 0)
        {
            while ($rows = mysqli_fetch_assoc($row))
            {
                $list = $rows['details_of_graduation'];
            }
        }
        db::close($conn);
        return $list;
    }
    public function selectAreaOfInterest($id)
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
    public function selectEmail($id)
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
    public function selectMobile($id)
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
}

$check = check::getInstance();
?>
