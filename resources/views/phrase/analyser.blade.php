@extends('template')

@section('content')

<div class="container">
    <div class="py-5 text-center">
        <h2>Phrase Analyser!</h2>
    </div>

    <div class="row">
        <div class="col-md-8 order-md-1" >
            <form method="POST" action="{{ URL::to('phraseanalyser/process/') }}" class="needs-validation">
            	 {{ csrf_field() }}
                
                <div class="mb-3">
                    <label for="username">Digite a text to analise</label>
                    <div class="input-group">
                        <textarea name="message" class="form-control" rows="5" maxlength="255" required></textarea>
                    </div>
                </div>
                <button class="btn btn-primary btn-lg btn-block" type="submit">Analise</button>
            </form>
        </div>
    </div>
</div>

@endsection