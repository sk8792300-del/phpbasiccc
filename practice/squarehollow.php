<?php 
for($i=0;$i<6;$i++){
  for($j=0;$j<5;$j++){
     if($j==0 || $j==4  || $i==0 || $i==5){
        echo " * ";     
        }
   
  else{
    echo "   ";
  }
  }
   echo"\n";
}