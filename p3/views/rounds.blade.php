@extends('templates.master')

@section('title')
Matching Pennies - {{ $round['id'] }}

@endsection

@section('content')

<div id='round-show'>
    <h2>Round {{ $round['id'] }}: {{ $round['winner'] }}</h2>

    <div class>{{ $round['name'] }} choose {{ $round['aPick'] }}</div>
    <div class>Player B chose {{ $round['bPick'] }}</div>
    <div class>The first penny landed on {{ $round['aPenny'] }}</div>
    <div class>The second penny landed on {{ $round['bPenny'] }}</div>
    <div class>The result from the pennies was {{ $round['result'] }}</div>
    <div class>Which made {{ $round['winner'] }} the winner</div>
    <div class>{{ $round['time'] }}</div>


</div>


<div><a href='/history'>&larr; Return to all rounds</a>
</div>
<div><a href='/'>&larr; Return to the game</a>
</div>


@endsection