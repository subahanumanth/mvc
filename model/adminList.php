<?php
class adminList
{
    public static $instance;
    public $name;
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
        try
        {
            if (!isset($conn))
            {
                throw new Exception("Database Connectivity Error at model/". basename(__FILE__) . " in showAllDetail() function");
            }
        }
        catch(Exception $e)
        {
                error_log("[" . date("F j,Y,g:i") . "]" . $e->getMessage() . "\n", 3, sprintf("%s/log/error.php", $_SERVER['DOCUMENT_ROOT']));
        }

        $row = mysqli_query($conn, "select *from detail where id != $id");
        $key = - 1;
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
                $list[$key]['picture'] = $rows['profile_picture'];
                $list[$key]['profilePicture'] = sprintf("uploads/%s", $list[$key]['picture']);
                $list[$key]['rights'] = $rows['rights'];
            }
        }
        db::close($conn);
        return $list;
    }
    public function showAllEmail($id, $i)
    {
        $list = [];
        $conn = db::connection();
        if ($i == 0)
        {
            try
            {
                if (!isset($conn))
                {

                    throw new Exception("Database Connectivity Error at model/". basename(__FILE__) ." in showAllEmail() function");
                }
            }
            catch(Exception $e)
            {
                error_log("[" . date("F j,Y,g:i") . "]" . $e->getMessage() . "\n", 3, sprintf("%s/log/error.php", $_SERVER['DOCUMENT_ROOT']));
            }
        }
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
    public function showAllMobile($id, $i)
    {
        $list = [];
        $conn = db::connection();
        if ($i == 0)
        {
            try
            {
                if (!isset($conn))
                {
                    throw new Exception("Database Connectivity Error at model/". basename(__FILE__) ." in showAllMobile() function");
                }
            }
            catch(Exception $e)
            {
                error_log("[" . date("F j,Y,g:i") . "]" . $e->getMessage() . "\n", 3, sprintf("%s/log/error.php", $_SERVER['DOCUMENT_ROOT']));
            }
        }
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

    public function showAllBloodGroup($id, $i)
    {
        $conn = db::connection();
        if ($i == 0)
        {
            try
            {
                if (!isset($conn))
                {
                    throw new Exception("Database Connectivity Error at model/". basename(__FILE__) . " in showAllBloodGroup() function");
                }
            }
            catch(Exception $e)
            {
                error_log("[" . date("F j,Y,g:i") . "]" . $e->getMessage() . "\n", 3, sprintf("%s/log/error.php", $_SERVER['DOCUMENT_ROOT']));
            }
        }
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
    public function showAllDetailsOfGraduation($id, $i)
    {
        $conn = db::connection();
        if ($i == 0)
        {
            try
            {
                if (!isset($conn))
                {
                    throw new Exception("Database Connectivity Error at model/". basename(__FILE__) . " in showAllDetailsOfGraduation() function");
                }
            }
            catch(Exception $e)
            {
                error_log("[" . date("F j,Y,g:i") . "]" . $e->getMessage() . "\n", 3, sprintf("%s/log/error.php", $_SERVER['DOCUMENT_ROOT']));
            }
        }
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
    public function showAllAreaOfInterest($id, $i)
    {
        $conn = db::connection();
        if ($i == 0)
        {
            try
            {
                if (!isset($conn))
                {
                    throw new Exception("Database Connectivity Error at model/". basename(__FILE__) . " in showAllAreaOfInterest() function");
                }
            }
            catch(Exception $e)
            {
                error_log("[" . date("F j,Y,g:i") . "]" . $e->getMessage() . "\n", 3, sprintf("%s/log/error.php", $_SERVER['DOCUMENT_ROOT']));
            }
        }
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
        return sprintf("%s %s", $firstName, $lastName);
    }

    public function delete($id)
    {
        $conn = db::connection();
        mysqli_autocommit($conn, false);
        mysqli_commit($conn);

        $query = "delete from email where user_id=$id";
        mysqli_query($conn, $query);
        $statusEmail = mysqli_affected_rows($conn);

        $query = "delete from mobile where user_id=$id";
        mysqli_query($conn, $query);
        $statusMobile = mysqli_affected_rows($conn);

        $query = "delete from area_of_interest where user_id=$id";
        mysqli_query($conn, $query);
        $statusArea = mysqli_affected_rows($conn);

        $query = "delete from detail where id=$id";
        mysqli_query($conn, $query);
        $statusDetail = mysqli_affected_rows($conn);
        try
        {
            if ($statusEmail < 1)
            {
                $error = "Error in Deleting Email";                
                throw new Exception("Error in Deleting Email at model/". basename(__FILE__) . " in delete() function");
            }
            
            else if ($statusMobile < 1)
            {
                $error = "Error in Deleting Mobile Number";                            
                throw new Exception("Error in Deleting Mobile Number at model/". basename(__FILE__) . " in delete() function");
            }
            
            else if ($statusArea < 1)
            {
                $error = "Error in Deleting Area Of Interest";                            
                throw new Exception("Error in Deleting Area Of Interest at model/". basename(__FILE__) . " in delete() function");
            }
            
            else if ($statusDetail < 1)
            {
                $error = "Error in Deleting Details";                            
                throw new Exception("Error in Deleting Details at model/". basename(__FILE__) . " in delete() function");
            }                                    
        }
        catch(Exception $e)
        {
                error_log("[" . date("F j,Y,g:i") . "]" . $e->getMessage() . "\n", 3, sprintf("%s/log/error.php", $_SERVER['DOCUMENT_ROOT']));
            mysqli_rollback($conn);
            return $error;
        }

        if ($statusEmail >= 1 && $statusMobile >= 1 && $statusArea >= 1 && $statusDetail >= 1)
        {
            mysqli_commit($conn);
            return true;
        }
        else
        {
            return false;
        }
        db::close($conn);
    }
    public function deleteDetail($id)
    {
        $conn = db::connection();
        $query = "delete from detail where id=$id";
        $row = mysqli_query($conn, $query);
        if(mysqli_affected_rows($conn) > 0) 
        {
            return true;
        }
        else
        {
            return false;
        }
        db::close($conn);
        return sprintf("%s %s", $firstName, $lastName);
    }    

}

?>

