@extends('template')

@section('content')

  	<div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="https://image.flaticon.com/icons/svg/82/82872.svg" alt="" width="72" height="72">
        <h2>Your card is <b>{!! $userCard !!}</b> with rank <b>{!! $rank !!}</b></h2>

    </div>

    <div class="container">
        <div class="card-deck mb-3 text-center">
            <div class="card mb-4" style="border:none"></div>
            <div class="card mb-4 box-shadow">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">CURRENT CARD IS <b>{{ $card->card_abbreviation }}</b></h4>
                </div>
                <div class="card-body">
                    <h1 class="card-title pricing-card-title"> {!! $percentage !!} <small class="text-muted">%</small> of chance</h1>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>{{ $current_card }} of 52 Cards</li>

                    </ul>
                    @if($endProcess == false)
                        <a href="{{ URL::to('cards/next/') }}" class="btn btn-lg btn-block btn-primary">Next Card</a>
                    @endif
                </div>
            </div>
            <div class="card mb-4" style="border:none"></div>
        </div>
    </div>


	 @if($endProcess)
	 <script>
		alert('Got it, the chance was ' + {!! $percentage !!} + '%');
        window.location.href = '/cards';
	</script>
	@endif


@endsection
