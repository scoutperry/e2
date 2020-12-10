@extends('templates.master')

@section('title')
Matching Pennies - All Rounds

@endsection

@section('content')

<h2>Matching Pennies - All Rounds</h2>
<div id='round-index'>
    @foreach($rounds as $round)
    <a href='/round?id={{ $round['id'] }}'>
        <div class='round'>
            <div class='round-name'>Round {{ $round['id'] }}: {{ $round['winner'] }}</div>
        </div>
    </a>
    @endforeach
</div>
<div><a href='/'>&larr; Return to the game</a>
</div>

@endsection