<?php
session_start();
$Apick= $_GET['Apick'];
$APenny = flipPenny();
$BPenny = flipPenny();
$Bpick= ($Apick == 'odd') ? 'even' : 'odd';
$result = ($APenny == $BPenny) ? "even" : "odd";
$winner = ($result == $Apick) ? "You win!" : "Player B wins. Would you like to try again?";

function flipPenny() {
    $penny = ['heads', 'tails'];
    return $penny[rand(0,1)];
}

$_SESSION['throw'] = [
    'Apick' => $Apick,
    'Bpick' => $Bpick,
    'APenny' => $APenny,
    'BPenny' => $BPenny,
    'result' => $result,
    'winner' => $winner,
];

header('Location:index.php');
require 'index-view.php';