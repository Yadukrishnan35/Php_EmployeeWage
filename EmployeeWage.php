<?php

class EmpWages{
   function welcomeMsg(){
       echo "Welcome to employee wage problem"."\n";
   }
   function empCheck(){
      $number =rand(0,1);
       if($number==1){
           echo "Employee is present";
       }
       else{
           echo "Employee is Absent";
       }

   }
}
$empWage = new EmpWages();
$empWage->welcomeMsg();
$AttendanceCheck = new EmpWages();
$AttendanceCheck->empCheck();

?>
