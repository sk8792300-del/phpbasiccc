<?php
 
 $total_amount=readline("Enter a number");
 if($total_amount >= 500){
    $discount = $total_amount * 0.20; 
}
elseif($total_amount >= 200   &&  $total_amount <=499 ){
    $discount = $total_amount * 0.10; 
}
else{
    echo"NO DISCOUNT MADAM JI";
}
$final_amount=$total_amount - $discount;
echo"total_amount=$total_amount\n";
 echo"discount =  $discount\n" ;
 echo"final_amount=$final_amount";