<?php
# Quiz game
echo "...........WELCOME TO QUIZ GAME.............\n";
echo "RULE FOR GAMES\n 1. The rule is very simple..\n 2.For y corret answer +1 point\n 3.For rong answer -1point\n 4.Whose score is more he/she will be winner\n";
echo "let's start the quiz competition\n\n\n";
$playing = strtolower(readline("Do you want to play?"));

if ($playing != "yes") {
    exit;
}

echo "okay! Let's play :";
$score = 0;

$answer = strtolower(readline(
    "1)What does CPU stand for?\n\n" .
    "a) central procesing unit\t" .
    "b) central programming unit\n" .
    "c) central processing unit\t" .
    "d) all the answer is wrong\n"
));

if ($answer == "a") {
    echo "correct answer!:\n\n";
    $score += 1; # score += 1 => score = score + 1$
} else {
    echo "BETTER LUCK NEXT TIME\n\n";
}
$answer = strtolower(readline("2)What does GPU stands for?\n a)graphical processing unit\tb)graphics programming unit \n c)graphics processing unit\t d)game process unit\n"));

if ($answer == "c") {
    echo "correct answer:\n\n\n";
    $score += 1;
} else {
    echo "BETTER LUCK NEXT TIME\n\n";
}
$answer = strtolower(readline("3)What does RAM stands for?\n\n a)read acess memory \t b)random access memory \n c)read only memory\t d)all the answer is rong\n"));

if ($answer == "b") {
    echo "correct answer:\n\n";
    $score += 1;
} else {
    echo "BETTER LUCK NEXT TIME\n\n";
}
$answer = strtolower(readline("4)What does ROM stands for? \n\n a)graphics processing unit\tb)central programming unit \n c)random only memory\t d)read only memory\n"));

if ($answer == "d") {
    echo "correct answer:\n\n";
    $score += 1;
} else {
    echo "BETTER LUCK NEXT TIME\n\n";
}
echo"........qudratic equation.........\n\n";

$answer = strtolower(readline("5)x²-5x+6=0?\n\n a)2,3 \t b)3,4 \n c)4,5 \t d)3,5"));
if ($answer == "a") {
    echo "correct answer:\n\n";
    $score += 1;
} else {
    echo "BETTER LUCK NEXT TIME\n\n";
}

$answer = strtolower(readline("6)x²-7x+12=0?\n\n a)5,3 \t b)3,4 \n c)4,6 \t d)3,5"));
if ($answer == "b") {
    echo "correct answer:\n\n";
    $score += 1;
} else {
    echo "BETTER LUCK NEXT TIME\n\n";
}


$answer = strtolower(readline("7)x²-9x+12=0?\n\n a)5,3 \t b)4,4 \n c)4,5 \t d)3,5"));
if ($answer == "c") {
    echo "correct answer:\n\n";
    $score += 1;
} else {
    echo "BETTER LUCK NEXT TIME\n\n";
}


$answer = strtolower(readline("8)x²-8x+15=0?\n\n a)2,3 \t b)3,4 \n c)4,5 \t d)3,5"));
if ($answer == "d") {
    echo "correct answer:\n\n";
    $score += 1;
} else {
    echo "BETTER LUCK NEXT TIME\n\n";
}


$answer = strtolower(readline("9)x²-10x+21=0?\n\n a)2,3 \t b)3,7 \n c)4,5 \t d)3,5"));
if ($answer == "b") {
    echo "correct answer:\n\n";
    $score += 1;
} else {
    echo "BETTER LUCK NEXT TIME\n\n";
}


echo "You got $score questions correct answer!\n";
echo "You score is: " . (($score / 4) * 100) . "%.\n";