<!doctype html>
<html lang='en'>
<head><title>Project 1</title>
    <meta charset='uft-8'>
</head>
<body>
    <h1>Project One: Matching Pennies</h1>
    <h2>Mechanics</h2>
    <p>Player A picks either odd or even and Player B defaults to the opposing choice. <br> 
Both players flip a penny. If both pennies match the result is even, the <br> 
player that chose even wins. If the pennies land on different sides the result is <br>
odd and the player that chose odd wins.<p>

    <h2>Results</h2>
    <p>Player A chooses <?php echo $playerApick ?><br>
    Player B chooses <?php echo $playerBpick ?> (by default)<br>
    Player A flips their penny. Player A gets <?php echo $APennyLands ?><br>
    Player B flips their penny. Player B gets <?php echo $BPennyLands ?><br>
    The result from the pennies is <?php echo $result ?><br>
    The winner is <?php echo $winner ?><br>

</body>
</html>


