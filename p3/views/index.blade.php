@extends('templates.master')

@section('title')
Test
@endsection

@section('content')

<h2>Test</h2>


<form method='POST' action='/play'>
    <div>
        Choose odd or even
        <input type='radio' name='Apick' value='odd' id='odd' checked><label for='odd'>Odd</label>
        <input type='radio' name='Apick' value='even' id='even'><label for='even'>Even</label>
    </div>
    <button type='submit'>Begin</button>
</form>
@if($winner)
<h2>Results</h2>
<ul>
    <li>You chose {{ $Apick }}
    </li>
    <li>Player B chooses {{ $Bpick }}
    </li>
    <li>You flip your penny. It lands on {{ $APenny }}
    </li>
    <li>Player B flips their penny. Player B gets {{ $BPenny }}
    </li>
    <li>The result from the pennies is {{ $result }}
    </li>
    <li>{{ $winner }} is the winner!
    </li>
</ul>
@endif



@endsection