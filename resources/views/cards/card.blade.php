@extends('template')

@section('content')

<div class="container">
    <div class="py-5 -center">
        <h2>Choose your card!</h2>
    </div>

    <div class="row">
        <div class="col-md-8 order-md-1" >
            <form method="POST" action="{{ URL::to('pokercalculator/create/') }}" class="needs-validation">
            	 {{ csrf_field() }}
                <div class="mb-3">
                    <label for="username">Card Numbers</label>
                    <div class="input-group">
                        <select class="custom-select d-block w-100" id="card_name" name="card_number" required>
                            <option value="">Choose a value</option>
                            {!! $cardNumbers !!}
                        </select>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="username">Card Suits</label>
                    <div class="input-group">
                        <select class="custom-select d-block w-100" id="card_suit" name="card_suit" required>
                            <option value="">Choose a value</option>
                            {!! $cardSuits !!}
                        </select>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="username">Card Rank</label>
                    <div class="input-group">
                        <select class="custom-select d-block w-100" id="card_rank" name="card_rank" required>
                            <option value="">Choose a value</option>
                            {!! $cardRank !!}
                        </select>
                    </div>
                </div>
                <button class="btn btn-primary btn-lg btn-block" type="submit">Start Calculator</button>
            </form>
        </div>
    </div>
</div>

@endsection