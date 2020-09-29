<?php
$APenny = rand(0,1);
$BPenny = rand(0,1);
$playerA = "odd";
$playerB = "even";
$choices = [
    'even',
    'odd',
];

shuffle($choices);
$playerApick = array_pop($choices);
$playerBpick = array_shift($choices);

if($APenny == 0) {
    $APennyLands = "heads";
} else {
    $APennyLands = "tails";
}

if($BPenny == 0) {
    $BPennyLands = "heads";
} else {
    $BPennyLands = "tails";
}

if($APenny == $BPenny) {
    $result = "even";
} else {
    $result = "odd";
}


if ($result == $playerApick){
    $winner = "Player A";
}else{
    $winner = "Player B";
}



require 'index-view.php';



