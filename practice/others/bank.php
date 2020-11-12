<?php
$penny_value = .01;
$nickel_value = .05;
$dime_value = .1;
$quarter_value = .25;
$half_dollar_value = .5;

$pennies = 300;
$nickels = 5;
$dimes = 0;
$quarters = 125;
$half_dollars = 33;

$total = ($pennies * $penny_value) + ($nickels * $nickel_value) + ($dimes * $dime_value) + ($quarters * $quarter_value) + ($half_dollars * $half_dollar_value);

require 'bank-view.php';

