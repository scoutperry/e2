@extends('templates.master')

@section('title')
Matching Pennies - {{ $round['id'] }}

@endsection

@section('content')

<!--@if($app->errorsExist())
<ul class='error alert alert-danger'>
    @foreach($app->errors() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
@elseif($confirmationName)
<div class='alert alert-success'>
    Thank you, {{ $confirmationName }} for your review!
</div>
@endif -->

<div id='round-show'>
    <h2>Round {{ $round['id'] }}: {{ $round['winner'] }}</h2>

    <!--   <p class='round-description'>
        {{ $round['description'] }}
    </p> -->
    <div class>You choose {{ $round['Apick'] }}</div>
    <div class>Player B chose {{ $round['Bpick'] }}</div>
    <div class>The first penny landed on {{ $round['APenny'] }}</div>
    <div class>The second penny landed on {{ $round['BPenny'] }}</div>
    <div class>The result from the pennies was {{ $round['result'] }}</div>
    <div class>Which made {{ $round['winner'] }} the winner</div>
    <div class>{{ $round['time'] }}</div>


</div>


<div><a href='/history'>&larr; Return to all rounds</a>
</div>
<div><a href='/'>&larr; Return to the game</a>
</div>


@endsection