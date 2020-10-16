<!doctype html>
<html lang='en'>

<head>
    <title>Project 2.5</title>
    <meta charset='uft-8'>
</head>

<body>
    <h1>Project Two: Rock Paper Scissors</h1>
    <h2>Mechanics</h2>
    <ul>
        <li>Players can choose between 'Rock', 'Paper', or 'Scissors'</li>
        <li>The outcome depends on each player's choice:</li>
        <li>Paper covers rock, so paper wins against rock</li>
        <li>Scissors cuts paper, so scissors wins against paper</li>
        <li>Rock beats scissors, so rock wins against scissors</li>
        <li>If both players choose the same item, it's a tie</li>


    </ul>
    <form method='GET' action='process.php'>
        <div>
            Choose 'Rock,' 'Paper,' 'Scissors;'
            <input type='radio' name='Apick' value='rock' id='rock' checked><label for='rock'>Rock</label>
            <input type='radio' name='Apick' value='paper' id='paper'><label for='paper'>Paper</label>
            <input type='radio' name='Apick' value='scissors' id='scissors'><label for='scissors'>Scissors</label>
        </div>
        <button type='submit'>Begin</button>
    </form>
    <?php if ($readyAnswer) { ?>
    <h2>Results</h2>
    <ul>
        <li>You chose <?php echo $Apick ?>
        </li>
        <li>Player B chooses <?php echo $comPick?>
        </li>
        <?php if ($action) { ?>
        <li><?php echo $action ?>
        </li>
        <?php } ?>
        <li><?php echo $result ?>
        </li>
    </ul>

    <?php } ?>

</body>

</html>