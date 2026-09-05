<?php

    // $users = [
    //     "username" => "Sonu143Sonalika",
    //     "password" => "244466666",
    //     "role" => "Super Senior Tester"
    // ];

    // $users["salary"] = 12000;

    // print_r($users);


    $employe = [
        "employe_id" => "143",
        "employe_name" => "mandal ji",
        "employe_salary" => "20 lpa",
        "employe_role" => "developer",
        "employe_adress"=> ["city"=>"ranchi",
                           "state" => "jharkhand"]
    ];

    $employe["employe_departement"] = "tester";
   print_r($employe);
     print_r($employe["employe_adress"]);
    print_r($employe["employe_adress"]["state\n"]);
  
          
    // array count
$total=count($employe);
echo"$total\n";

// array search

$array=[10,20,30,40,3];
echo array_search(3,$array);

// sort
  sort($array);
  print_r( $array);

//   r sort returning in desending order\n
rsort($array);
print_r( $array);


// associated array values ka bases mai
asort($employe);
print_r( $employe);


// arsort desending order mai
 arsort($employe);
print_r( $employe);

// k sort key basic
ksort($employe);
print_r( $employe);

