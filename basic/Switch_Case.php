<?php 
 $color = strtolower(readline("ENTER A colour\n"));

 switch ($color) {
  case "red":
    echo"stop";
    break;
    case "orange":
    echo"Get ready to stop";
    break;
    case "green":
    echo"Get ready for go";
    break;
    deafult("you are out of syllabus");
 }
 