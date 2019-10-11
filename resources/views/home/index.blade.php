@extends('template')

@section('content')

<div class="container">
    <div class="py-5 text-center">
        
        <h2>Welcome to the Poker calculator and Phrase Analyser</h2>
    </div>

    <div class="row">
        <div class="col-md-8 order-md-1" >
            <ult>
                <li><a href="{{ URL::to('pokercalculator/') }}">Poker chance calculator</a></li>
                <li><a href="{{ URL::to('phraseanalyser/') }}">Phrase analyser</a></li>
            </ult>
        </div>
    </div>
</div>

@endsection