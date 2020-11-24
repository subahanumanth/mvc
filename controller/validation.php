<?php
class validate
{
    public $details;
    public $nameExist;
    public $emailExist=[];
    public $mobileExist=[];   
    public $id;
    public $error;
    public $correctDetails;
    public function __construct($values, $nameExist, $emailExist, $mobileExist, $id=null)
    {
        $this->details = $values;
        $this->nameExist = $nameExist;
        $this->emailExist = $emailExist;        
        $this->mobileExist = $mobileExist;      
        $this->id = $id;
    }
    public function validation()
    {
        if (isset($this->details['submit']))
        {
            if (!empty($this->details['firstName']) and preg_match("/^[a-zA-Z ]*$/", $this->details['firstName']) and strlen($this->details['firstName']) > 3 and strlen($this->details['firstName']) < 20 and ctype_alpha($this->details['firstName']) and $this->nameExist == "false")
            {
                $this->correctDetails['firstName'] = $this->details['firstName'];
                $this->error["firstError"] = "";
            }
            else if($this->nameExist == "true" and !isset($this->id)){
                $this->error["firstError"] = " *Name Already Exists";                
            }             
            else
            { 
                $this->error["firstError"] = " *Enter Valid First Name";
            }           

            if (!empty($this->details['lastName']) and preg_match("/^[a-zA-Z ]*$/", $this->details['lastName']) and strlen($this->details['lastName']) < 10 and ctype_alpha($this->details['lastName']))
            {
                $this->correctDetails['lastName'] = $this->details['lastName'];
            }
            else
            {
                $this->error["lastError"] = " *Enter Valid Last Name";
            }

            if (!empty($this->details['areaOfInterest']))
            {
                $this->correctDetails['areaOfInterest'] = $this->details['areaOfInterest'];
            }
            else
            {
                $this->error['areaOfInterestError'] = "*Select Area Of Interest";
            }

            if (!empty($this->details['date']))
            {
                $this->correctDetails['date'] = $this->details['date'];
            }
            else
            {
                $this->error['dateError'] = "*Select Date";
            }

            if (!empty($this->details['detailsOfGraduation']))
            {
                $this->correctDetails['detailsOfGraduation'] = $this->details['detailsOfGraduation'];
            }
            else
            {
                $this->error['detailsOfGraduationError'] = "*Select Details Of Graduation";
            }

            if ($this->details['bloodGroup'] != "")
            {
                $this->correctDetails['bloodGroup'] = $this->details['bloodGroup'];
            }
            else
            {
                $this->error['bloodGroupError'] = "*Select Blood Group";
            }

            if ($this->details['gender'] != "")
            {
                $this->correctDetails['gender'] = $this->details['gender'];
            }
            else
            {
                $this->error['genderError'] = "*Select Gender";
            }
            if(in_array("true",$this->emailExist)) {
                $checkEmail = "true";
            }
            else {
                $checkEmail = "false";
            }
            $this->details['emailn'] = explode(", ", $this->details['email']);
            for ($i = 0;$i < count($this->details['emailn']);$i++)
            {
                $email = $this->details['emailn'][$i];
                if (!empty($email) and filter_var($email, FILTER_VALIDATE_EMAIL) and $checkEmail == "false")
                {
                    $this->correctDetails['email'][$i] = $this->details['emailn'][$i];
                }
                else if($checkEmail == "true" and !isset($this->id)) 
                {
                    $this->error["emailError"] = " *Email ID Already Exists";                    
                }
                else
                {
                    $this->error["emailError"] = " *Enter Valid Email ID";
                }
            }
            if(in_array("true",$this->mobileExist)) {
                $checkMobile = "true";
            }
            else {
                $checkMobile = "false";
            }
            $this->details['mobileNew'] = explode(', ', $this->details['mobile']);
            for ($i = 0;$i < count($this->details['mobileNew']);$i++)
            {
                $mobile = $this->details['mobileNew'][$i];
                if (!empty($this->details['mobileNew'][$i]) and preg_match('/^[0-9]{10}+$/', $mobile) and $checkMobile == "false")
                {
                    $this->correctDetails['mobile'][$i] = $this->details['mobileNew'][$i];
                }
                else if($checkMobile == "true" and !isset($this->id)) 
                {
                    $this->error["mobileError"] = " *Mobile Number Already Exists";                    
                }                
                else
                {
                    $this->error['mobileError'] = "*Enter Valid Mobile Number";
                }
            }
            if (!empty($this->details['password']) and preg_match("/^(?=[^\d]*\d)(?=[A-Z\d ]*[^A-Z\d ]).{8,}$/", $this->details['password']) or isset($this->id))
            {
                $this->correctDetails['password'] = $this->details['password'];
            }
            else
            {
                $this->error['passwordError'] = "*Password must be a minimum of 8 characters and contain at least one capital letter, a number and a special character and one small letter.";
            }

            if ($this->details['password'] != $this->details['cpassword'])
            {
                $this->error['cpasswordError'] = "*Enter Correct Password";
            }
            else
            {
                $this->error['cpasswordError'] == "";
            }
            session_start();
            if(isset($this->id)) {
                $this->correctDetails['id'] = 2; 
            }
            if(!empty($_FILES['profile']['name'])) {
                $_SESSION['profile'] = $_FILES['profile'];
            }

            $targetFile = "./controller/uploads/". $_SESSION['profile']['name'];
            $extensions = ["png","jpg","jpeg"];
            $ext = end(explode(".",$_SESSION['profile']['name']));

            if(in_array($ext, $extensions) == 1) 
            { 
                move_uploaded_file($_SESSION['profile']['tmp_name'], $targetFile);
                $this->correctDetails['profilePicture'] = $targetFile;
                $_SESSION['set'] = 0;
                $this->error['profileError'] = "";
            }
            else if(empty($_SESSION['profile']['name']))
            {
                $this->error['profileError'] = "No Profile Picture Selected";                
            }
            else if(in_array($ext, $extensions) != 1)
            {
                $this->error['profileError'] = "Only Jpg,Jpeg and Png File Extensions are allowed";
            }
           
            if (isset($_SESSION['name']))
            { 
                
                if ($this->error["firstError"] == "" and $this->error["lastError"] == "" and $this->error['areaOfIntrestError'] == "" and $this->error['dateError'] == "" and $this->error['detailsOfGraduationError'] == "" and $this->error['bloodGroupError'] == "" and $this->error['genderError'] == "" and $this->error["emailError"] == "" and $this->error['mobileError'] == "" and $this->error['profileError'] == "")
                {

                    $this->correctDetails['val'] = 2;
                    return $this->correctDetails;
                }
            }
            if (!isset($_SESSION['name']))
            {
                if ($this->error["firstError"] == "" and $this->error["lastError"] == "" and $this->error['areaOfIntrestError'] == "" and $this->error['dateError'] == "" and $this->error['detailsOfGraduationError'] == "" and $this->error['bloodGroupError'] == "" and $this->error['genderError'] == "" and $this->error["emailError"] == "" and $this->error['mobileError'] == "" and $this->error['passwordError'] == "" and $this->error['cpasswordError'] == "" and $this->error['profileError'] == "")
                {
                    $this->correctDetails['val'] = 3;
                    session_destroy();
                    return $this->correctDetails;
                }
            }
        }
        return $this->error;
    }
}
$obj = new validate($_POST, $nameExist, $emailExist, $mobileExist, $url[1]);
$error = $obj->validation();

if (isset($url[1]) and isset($_POST['submit']))
{
    $newUser->updateDetail($id, $error, $list['profilePicture'], $password);
    $newUser->updateEmail($id, $error['email']);
    $newUser->updateMobile($id, $error['mobile']);
    $newUser->updateAreaOfInterest($id, $error['areaOfInterest']);
}
else
{
    $newUser->insertDetail($error);
    $id = $newUser->fetchid();
    $newUser->insertEmail($id, $error['email']);
    $newUser->insertMobile($id, $error['mobile']);
    $newUser->insertAreaOfInterest($id, $error['areaOfInterest']);
}

?>
