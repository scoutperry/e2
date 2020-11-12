<!doctype html>
<html lang='en'>

<head>
    <title>Project 2</title>
    <meta charset='uft-8'>
</head>

<body>
    <h1>Project Two: Matching Pennies</h1>
    <h2>Mechanics</h2>
    <ul>
        <li>Player A picks either odd or even and Player B defaults to the opposing choice.</li>
        <li>Both players flip a penny.</li>
        <li>If both pennies match the result is even, the player that chose even wins.</li>
        <li>If the pennies land on different sides the result is odd and the player that chose odd wins.</li>
    </ul>

    <form method='GET' action='process.php'>
        <div>
            Choose odd or even
            <input type='radio' name='Apick' value='odd' id='odd' checked><label for='odd'>Odd</label>
            <input type='radio' name='Apick' value='even' id='even'><label for='even'>Even</label>
        </div>
        <button type='submit'>Begin</button>
    </form>
    <?php if ($readyAnswer) { ?>
    <h2>Results</h2>
    <ul>
        <li>You chose <?php echo $Apick ?>
        </li>
        <li>Player B chooses <?php echo $Bpick ?>
        </li>
        <li>You flip your penny. It lands on <?php echo $APenny?>
        </li>
        <li>Player B flips their penny. Player B gets <?php echo $BPenny ?>
        </li>
        <li>The result from the pennies is <?php echo $result ?>
        </li>
        <li><?php echo $winner ?>
        </li>
    </ul>

    <?php } ?>

</body>

</html>