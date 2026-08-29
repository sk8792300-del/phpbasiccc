<?php
   $x=18;
  $age=readline("ENTER YOUR AGE:");
  if($age>=18){
      echo"Access Granted";
  }
  else{
   $y = $x - $age;
   echo"how many years are left until they turn 18 :=$y years"; 
    
  }