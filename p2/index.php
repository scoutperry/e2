<?php
session_start();
if (isset($_SESSION['throw'])) {
    extract($_SESSION['throw']);
    $readyAnswer = true;
} else {
    $readyAnswer = false;
}

$_SESSION['throw']=null;

require 'index-view.php';