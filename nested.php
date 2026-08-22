<?php
echo "----------WELCOME TO MY HAUNTED MANSION ADVENTURE-----------";
echo"-------------------\n\n\n\n";
echo"Tum raat mein ek purani haunted mansion ke saamne pahunchte ho.";
$ans = strtolower(readline("Kya tum mansion ke andar jaoge? (yes/no): "));

if($ans == "yes"){

    echo "Tumhe do doors milte hain: red / blue\n";

    $ans = strtolower(readline("Kaunsa door choose karoge? (red/blue): "));

    if($ans == "red"){
       echo "Red door open! Ek dark room milta hai.\n";
         $ans = strtolower(readline("Kya tum room ke andar jaoge? (yes/no): "));

        if($ans == "yes"){
         echo "Waha ek mysterious box hai.\n";
          $ans = strtolower(readline("Kya tum box open karoge? (yes/no): "));

            if($ans == "yes"){
                echo "Box ke andar golden key milti hai!\n";
                 $ans = strtolower(readline("Kya tum key se door open karoge? (yes/no): "));

                if($ans == "yes"){
                  echo "Door ke andar treasure hai!\n";
                     $ans = strtolower(readline("Kya tum treasure loge? (yes/no): "));

                    if($ans == "yes"){
                        echo "YOU WIN 🏆";
                    }
                    else{
                        echo "Tum treasure ko chhodkar safely chale gaye.";
                    }

                }
                else{
                    echo "Tumne door open nahi kiya. Adventure Over!";
                }

            }
            else{
                echo "Tumne box open nahi kiya. Safe Escape!";
            }

        }
        else{
            echo "Tum room mein nahi gaye. Adventure Over!";
        }

    }
    else{
        echo "Blue door open! Tumhe ek ghost dikhta hai 👻";
         $ans = strtolower(readline("Kya tum ghost ke paas jaoge?(yes/no): "));

       if($ans == "yes"){
         echo "Ghost tumse poochta hai: Kya tum treasure chahte ho?(yes/no): ";
          $ans = strtolower(readline());

         if($ans == "yes"){
          echo "Ghost tumhe ek puzzle deta hai.\n";// agar tum use solve karte ho to say(yes/no)
            $ans = strtolower(readline("Kya tum puzzle solve karoge?(yes/no): "));

           if($ans == "yes"){
            echo "Correct answer → treasure → YOU WIN\n";

    }
         else{
           echo "Wrong answer → mansion ka door lock → GAME OVER";
         }

    }
    else{// if answer no
        echo "Ghost tumhe secret exit dikha deta hai → SAFE ESCAPE";

       }

     }
  }

}
else{
    echo "Tum mansion ke andar nahi gaye.\n";
    echo "Tum safely ghar chale gaye. 🏠";
}