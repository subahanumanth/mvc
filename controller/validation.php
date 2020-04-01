<?php

class validate {
    public $details;
    public $error;
    public $correctDetails;
    public function __construct ($values) {
        $this->details = $values;
    }
    public function validation() {
        if (isset($this->details['submit'])) {
            if (!empty($this->details['firstName']) and preg_match("/^[a-zA-Z ]*$/", $this->details['firstName']) and strlen($this->details['firstName'])>3  and strlen($this->details['firstName'])<20 and ctype_alpha($this->details['firstName'])) {
                $this->correctDetails['firstName'] = $this->details['firstName'];
            } else {
                $this->error["firstError"] = " *Enter Valid First Name";
            }

            if (!empty($this->details['lastName']) and preg_match("/^[a-zA-Z ]*$/", $this->details['lastName']) and strlen($this->details['lastName'])<10 and ctype_alpha($this->details['lastName'])) {
                $this->correctDetails['lastName'] = $this->details['lastName'];
            } else {
                $this->error["lastError"] = " *Enter Valid Last Name";
            }

            if (!empty($this->details['areaOfInterest'])) {
                $this->correctDetails['areaOfInterest'] = $this->details['areaOfInterest'];
            } else {
                $this->error['areaOfInterestError']  = "*Select Area Of Interest";
            }

            if (!empty($this->details['date'])) {
                $this->correctDetails['date'] = $this->details['date'];
            } else {
                $this->error['dateError']  = "*Select Date";
            }

            if (!empty($this->details['detailsOfGraduation'])) {
                $this->correctDetails['detailsOfGraduation'] = $this->details['detailsOfGraduation'];
            } else {
                $this->error['detailsOfGraduationError']  = "*Select Details Of Graduation";
            }

            if ($this->details['bloodGroup'] != "") {
                $this->correctDetails['bloodGroup'] = $this->details['bloodGroup'];
            } else {
                $this->error['bloodGroupError']  = "*Select Blood Group";
            }

            if ($this->details['gender'] != "") {
                $this->correctDetails['gender'] = $this->details['gender'];
            } else {
                $this->error['genderError']  = "*Select Gender";
            }

            $this->details['emailn'] = explode(',',$this->details['email']);
            for ($i=0; $i<count($this->details['emailn']); $i++) {
                    $email = $this->details['emailn'][$i];
                    if (!empty($email)) {
                    $this->correctDetails['email'][$i] = $email;
                } else {
                    $this->error["emailError"] = " *Enter Valid Email ID";
                }
            }
            $this->details['mobileNew'] = explode(',',$this->details['mobile']);
            for ($i=0; $i<count($this->details['mobileNew']); $i++) {
                if (!empty($this->details['mobileNew'][$i])) {
                    $this->correctDetails['mobile'][$i] = $this->details['mobileNew'][$i];
                } else {
                    $this->error['mobileError']  = "*Enter Valid Mobile Number";
                }
            }
            if (!empty($this->details['password']) and preg_match("/^(?=[^\d]*\d)(?=[A-Z\d ]*[^A-Z\d ]).{8,}$/", $this->details['password'])) {
                $this->correctDetails['password'] = $this->details['password'];
            } else {
                $this->error['passwordError']  = "*Password must be a minimum of 8 characters and contain at least one capital letter, a number and a special character and one small letter.";
            }

            if($this->details['password'] != $this->details['cpassword']) {
                $this->error['cpasswordError'] = "*Enter Correct Password";
            } else {
                $this->error['cpasswordError'] == "";
            }

            if(empty($_FILES['profile']['name'])) {
                $this->error['profileError'] = "*please upload your profile picture";
            } else {
                $this->error['profileError'] == "";
            }

            if($this->error["firstError"] == "" and $this->error["lastError"] == "" and $this->error['areaOfIntrestError'] == "" and $this->error['dateError'] == "" and $this->error['detailsOfGraduationError'] == "" and $this->error['bloodGroupError'] == "" and $this->error['genderError'] == ""  and $this->error["emailError"] == ""  and $this->error['mobileError'] == "" and $this->error['passwordError'] == "" and $this->error['cpasswordError'] == "" and $this->error['profileError'] == "") {
              $targetDir = $_FILES['profile']['name'];
              $targetFile = "./controller/uploads/".$targetDir;
              move_uploaded_file($_FILES['profile']['tmp_name'] , $targetFile);
              $this->correctDetails['profilePicture'] = $targetFile;
              return $this->correctDetails;
            }
        }
    return $this->error;
    }
}
$obj = new validate($_POST);
$error = $obj->validation();
include("./model/new.php");
$newUser->insertDetail($error);
$id = $newUser->fetchid();
$newUser->insertEmail($id, $error['email']);
$newUser->insertMobile($id, $error['mobile']);
$newUser->insertAreaOfInterest($id, $error['areaOfInterest']);
?>
