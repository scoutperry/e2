<?php
$penny_value = .01;
$nickel_value = .05;
$dime_value = .1;
$quarter_value = .25;

$pennies = 100;
$nickels = 25;
$dimes = 100;
$quarters = 34;

$total = ($pennies * $penny_value) + ($nickels * $nickel_value) + ($dimes * $dime_value) + ($quarters * $quarter_value);

?>
<!DOCTYPE html>
<html lang='en'>
<head>

    <title>PNPiggy Bank</title>
    <meta charset='utf-8'>

</head>

<body>

    <img alt='PHPiggy Bank Logo' src='https://s3.amazonaws.com/making-the-internet/php-piggy-bank-logo@2x.png' style='width:202px;'>

    <p>
        You have $<?php echo $total; ?> in your piggy bank.
    </p>

</body>
</html>
