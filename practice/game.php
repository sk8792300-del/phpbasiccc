<?php 

    $choices = ['stone', 'paper', 'scissor'];
    $p_score = 0;
    $c_score = 0;

    $player = strtolower(readline("Choose stone/paper/scissor: "));

    sleep(1);

    if(!in_array($player, $choices)){
        echo "Gracias man! Go to hell! :)";
        exit(0);
    }

    $idx = mt_rand(0, 2);

    $computer = $choices[$idx];

    sleep(1);

    echo "Player choose: $player\n";
    
    sleep(1);
    
    echo "Computer choose: $computer\n";

    sleep(1);

    if($player == $computer){
        echo "It's a draw!\n";
    }elseif(
        ($player == "scissor" && $computer == "paper")||
        ($player == "stone" && $computer == "scissor")||
        ($player == "paper" && $computer == "stone")
    ){
        echo "Player wins!\n";
        $p_score++;
    }else{
        echo "Computer wins!\n";
        $c_score++;
    }