@extends('templates.master')

@section('title')
Matching Pennies
@endsection

@section('content')
@if($app->errorsExist())
<ul class='error alert alert-danger'>
    @foreach($app->errors() as $error)
    <li>{{ $error }}</li>
    @endforeach
    @endif
    <h1>Matching Pennies</h1>
    <h2>Mechanics</h2>
    <ul>
        <li>Player A picks either odd or even and Player B defaults to the opposing choice.</li>
        <li>Both players flip a penny.</li>
        <li>If both pennies match the result is even, the player that chose even wins.</li>
        <li>If the pennies land on different sides the result is odd and the player that chose odd wins.</li>
    </ul>

    <form method='POST' id='round-new' action='/play'>
        <div class='form-group'>
            <label for='name'>Name</label>
            <input type='text' class='form-control' name='name' id='name' value='{{ $app->old("name") }}'>

        </div>
        <div class='form-group'>
            How will the two pennies land? Odd or even?
            <input type='radio' class='form-control' name='aPick' value='odd' id='odd' checked><label
                for='odd'>Odd</label>
            <input type='radio' class='form-control' name='aPick' value='even' id='even'><label for='even'>Even</label>
        </div>
        <button type='submit'>Play!</button>
    </form>
    @if($winner)
    <h2>Results</h2>
    <ul>

        <li>{{ $name }} chose {{ $aPick }}
        </li>
        <li>Player B chooses {{ $bPick }}
        </li>
        <li>You flip your penny. It lands on {{ $aPenny }}
        </li>
        <li>Player B flips their penny. Player B gets {{ $bPenny }}
        </li>
        <li>The result from the pennies is {{ $result }}
        </li>
        <li>{{ $winner }} is the winner!
        </li>
    </ul>
    @endif

    <div><a href='/history'>&larr; See previous rounds</a>
    </div>

    @endsection