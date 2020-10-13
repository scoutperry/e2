<?php
$APenny = rand(0, 1);
$BPenny = rand(0, 1);

session_start();
$Apick= $_GET['Apick'];

if ($Apick == 'odd') {
    $Bpick = 'even';
} else {
    $Bpick = 'odd';
}


if ($APenny == 0) {
    $APennyLands = "heads";
} else {
    $APennyLands = "tails";
}

if ($BPenny == 0) {
    $BPennyLands = "heads";
} else {
    $BPennyLands = "tails";
}

if ($APenny == $BPenny) {
    $result = "even";
} else {
    $result = "odd";
}


if ($result == $Apick) {
    $winner = "You win!";
} else {
    $winner = "Sorry, maybe next time";
}


$_SESSION['throw'] = [
    'Apick' => $Apick,
    'Bpick' => $Bpick,
    'APennyLands' => $APennyLands,
    'BPennyLands' => $BPennyLands,
    'result' => $result,
    'winner' => $winner,
];

header('Location:index.php');

require 'index-view.php';