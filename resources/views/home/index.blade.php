@extends('template')

@section('content')

<div class="container">
    <div class="py-5 text-center">
        
        <h2>Welcome to the Poker calculator and Phrase Analyser</h2>
        <p class="lead">choose one of the links below</p>
    </div>

    <div class="row">
        <div class="col-md-8 order-md-1" >
            <ult>
                <li><a href="{{ URL::to('cards/') }}">Poker chance calculator</a></li>
                <li><a href="{{ URL::to('phrase/') }}">Phrase analyser</a></li>
            </ult>
        </div>
    </div>
</div>

@endsection