<?php
require("../model/adminList.php");
require("../model/newUser.php");
require("../model/db.php");
use PHPUnit\Framework\TestCase;

class sampleTest extends TestCase
{
    public $user;
    public function setUp () : void
    {
         $this->user = adminList::getInstance();
         $this->newUser = newUser::getInstance();
    }
    public function testCheckEmailIsCorrect () 
    {
         $email = $this->user->showAllEmail (370, 0);
         $this->assertEquals($email, "suba@gmail.com");
    }
    public function testCheckEmailIsNotCorrect () 
    {
         $email = $this->user->showAllEmail (370, 0);
         $this->assertNotEquals($email, "hanu@gmail.com");
    }
    public function testCheckMobileIsCorrect () 
    {
         $mobile = $this->user->showAllMobile (370, 0);
         $this->assertEquals($mobile, "9999999999");
    }
    public function testCheckMobileIsNotCorrect () 
    {
         $mobile = $this->user->showAllMobile (370, 0);
         $this->assertNotEquals($mobile, "999999999");
    }
    public function testCheckBloodGroupIsCorrect () 
    {
         $bloodGroup = $this->user->showAllBloodGroup (370, 0);
         $this->assertEquals($bloodGroup, "A+ve");
    }
    public function testCheckBloodGroupIsNotCorrect () 
    {
         $bloodGroup = $this->user->showAllBloodGroup (370, 0);
         $this->assertNotEquals($bloodGroup, "A+v");
    }
    public function testCheckDetailsOfGraduationIsCorrect () 
    {
         $detailsOfGraduation = $this->user->showAllDetailsOfGraduation (370, 0);
         $this->assertEquals($detailsOfGraduation, "B.des");
    }
    public function testCheckDetailsOfGraduationIsNotCorrect () 
    {
         $detailsOfGraduation = $this->user->showAllDetailsOfGraduation (370, 0);
         $this->assertNotEquals($detailsOfGraduation, "B.de");
    }
    public function testCheckAreaOfInterestIsCorrect () 
    {
         $areaOfInterest = $this->user->showAllAreaOfInterest (370, 0);
         $this->assertEquals($areaOfInterest, "Gaming");
    }
    public function testCheckAreaOfInterestIsNotCorrect () 
    {
         $areaOfInterest = $this->user->showAllAreaOfInterest (370, 0);
         $this->assertNotEquals($areaOfInterest, "Gamin");
    }
    public function testCheckFullNameIsCorrect () 
    {
         $fullName = $this->user->selectName (370);
         $this->assertEquals($fullName, "hanu suba");
    }
    public function testCheckFullNameIsNotCorrect () 
    {
         $fullName = $this->user->selectName (370);
         $this->assertNotEquals($fullName, "hanu sub");
    }
    public function testDetailIsInserted () 
    {
         $detail = ['firstName'=>'hanumanth', 'lastName'=>'suba', 'date'=>'2020-11-04',               'detailsOfGraduation'=>3,'bloodGroup'=>24,'gender'=>'male','profilePicture'=>"/controller",'password'=>'Hanu@1234',0];
         $result = $this->newUser->insertDetail ($detail);
         $this->assertTrue($result);
    }
    public function testDetailIsNotInserted () 
    {
         $noData = null;
         $result = $this->newUser->insertDetail ($noData);
         $this->assertFalse($result);
    }
    public function testDetailIsDeleted () 
    {
         $result = $this->user->deleteDetail (411);
         $this->assertTrue($result);
    }
    public function testDetailIsNotDeleted () 
    {
         $result = $this->user->deleteDetail (394);
         $this->assertFalse($result);
    }
}
