<?php
include (sprintf("%s/model/adminList.php", dirname(__DIR__,2)));
include (sprintf("%s/model/newUser.php", dirname(__DIR__,2)));
include (sprintf("%s/model/db.php", dirname(__DIR__,2)));

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
         $email = $this->user->showAllEmail (654, 0);
         $this->assertEquals($email, "suba@gmail.com");
    }
    public function testCheckEmailIsNotCorrect () 
    {
         $email = $this->user->showAllEmail (654, 0);
         $this->assertNotEquals($email, "hanu@gmail.com");
    }
    public function testCheckMobileIsCorrect () 
    {
         $mobile = $this->user->showAllMobile (654, 0);
         $this->assertEquals($mobile, "9442131842");
    }
    public function testCheckMobileIsNotCorrect () 
    {
         $mobile = $this->user->showAllMobile (654, 0);
         $this->assertNotEquals($mobile, "999999999");
    }
    public function testCheckBloodGroupIsCorrect () 
    {
         $bloodGroup = $this->user->showAllBloodGroup (654, 0);
         $this->assertEquals($bloodGroup, "O+ve");
    }
    public function testCheckBloodGroupIsNotCorrect () 
    {
         $bloodGroup = $this->user->showAllBloodGroup (654, 0);
         $this->assertNotEquals($bloodGroup, "A+v");
    }
    public function testCheckDetailsOfGraduationIsCorrect () 
    {
         $detailsOfGraduation = $this->user->showAllDetailsOfGraduation (654, 0);
         $this->assertEquals($detailsOfGraduation, "B.des");
    }
    public function testCheckDetailsOfGraduationIsNotCorrect () 
    {
         $detailsOfGraduation = $this->user->showAllDetailsOfGraduation (654, 0);
         $this->assertNotEquals($detailsOfGraduation, "bhbg");
    }
    public function testCheckAreaOfInterestIsCorrect () 
    {
         $areaOfInterest = $this->user->showAllAreaOfInterest (654, 0);
         $this->assertEquals($areaOfInterest, "Reading");
    }
    public function testCheckAreaOfInterestIsNotCorrect () 
    {
         $areaOfInterest = $this->user->showAllAreaOfInterest (654, 0);
         $this->assertNotEquals($areaOfInterest, "Gamin");
    }
    public function testCheckFullNameIsCorrect () 
    {
         $fullName = $this->user->selectName (654);
         $this->assertEquals($fullName, "subahanu manth");
    }
    public function testCheckFullNameIsNotCorrect () 
    {
         $fullName = $this->user->selectName (654);
         $this->assertNotEquals($fullName, "buyjby");
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
         $result = $this->user->deleteDetail (668);
         $this->assertTrue($result);
    }
    public function testDetailIsNotDeleted () 
    {
         $result = $this->user->deleteDetail (668);
         $this->assertFalse($result);
    }
}
