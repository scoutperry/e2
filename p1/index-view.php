<!doctype html>
<html lang='en'>
<head><title>Project 1</title>
    <meta charset='uft-8'>
</head>
<body>
    <h1>Project One: Matching Pennies</h1>
    <h2>Mechanics</h2>
    <ul>
        <li>Player A picks either odd or even and Player B defaults to the opposing choice.</li>
        <li>Both players flip a penny.</li>
        <li>If both pennies match the result is even, the player that chose even wins.</li>
        <li>If the pennies land on different sides the result is odd and the player that chose odd wins.</li>
    </ul>
    <h2>Results</h2>
    <ul>
        <li>Player A chooses <?php echo $playerApick ?></li>
        <li>Player B chooses <?php echo $playerBpick ?> (by default)</li>
        <li>Player A flips their penny. Player A gets <?php echo $APennyLands ?></li>
        <li>Player B flips their penny. Player B gets <?php echo $BPennyLands ?></li>
        <li>The result from the pennies is <?php echo $result ?></li>
        <li>The winner is <?php echo $winner ?></li>
    </ul>
</body>
</html>


=