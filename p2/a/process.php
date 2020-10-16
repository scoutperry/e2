<?php

$choices = array(rock,paper,scissors);
shuffle($choices);
$comPick = array_pop($choices);

session_start();
$Apick= $_GET['Apick'];

if ($Apick == $comPick) {
    $result = 'Its a tie!';
}else if ($Apick == 'scissors') {
    if ($comPick == 'rock'){
        $action = 'Rock beats scissors!';
        $result = 'Player B wins';
    }else if ($comPick == 'paper'){
        $action = 'Scissors cuts paper!';
        $result = 'You win!';
    }
}else if ($Apick == 'rock') {
    if ($comPick == 'paper'){
        $action = 'Paper covers rock!';
        $result = 'Player B wins';
    }else if ($comPick == 'scissors'){
        $action = 'Rock beats scissors!';
        $result = 'You win!';

    }
}else if ($Apick == 'paper') {
    if ($comPick == 'rock'){
        $action = 'Paper covers rock!';
        $result = 'You win!';
    }else if ($comPick == 'scissors'){
        $action = 'Scissors cuts paper!';
        $result = 'Player B wins';

    }
}



$_SESSION['throw'] = [
    'Apick' => $Apick,
    'choices'=> $choices,
    'comPick' => $comPick,
    'action' => $action,
    'result' => $result,
];

header('Location:index.php');

require 'index-view.php';