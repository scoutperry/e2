<?php
$penny = rand(0,1);
$penny2 = rand(0,1);
$playerA = "odd";
$playerB = "even";
$choices = [
    'even',
    'odd',
];
var_dump($choices);

shuffle($choices);
$playerApick = array_pop($choices);



if($penny == $penny2) {
    $result = "even";
} else {
    $result = "odd";
}


if ($result == "odd"){
    $winner = "Player A";
}else{
    $winner = "Player B";
}



require 'index-view.php';

/*if ($result == "odd"){
    $winner = "Player A"
}else{
    $winner = "Player A"
}

<?php echo $penny ?>
<?php echo $penny2 ?>
<?php echo $result ?>*/

