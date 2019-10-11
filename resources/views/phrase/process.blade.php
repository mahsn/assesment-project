@extends('template')

@section('content')

<div class="container">
    <div class="py-5 text-center">
        <h2>Phrase Analyser!</h2>
        <p class="lead">Results found for phrase: <strong>{{ $phrase }}</strong></p>
    </div>

    <div class="row">
        <div class="col-md-12 order-md-1">

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Character(#)</th>
                        <th scope="col">Total Occurence</th>
                        <th scope="col">Info</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach($collection as $key => $value)
                    <tr>
                        <th scope="row">{{ $key }}</th>
                        <td> {{ $value['occurrences'] }} </td>
                        <td> 
                            Before: <strong>{{ implode(', ', $value['before']) }}</strong>
                          - After: <strong>{{ implode(', ', $value['after']) }}</strong>
                          - Distance <strong>{{ $value['distance'] }}</strong>
                        </td>
                    </tr>
                  @endforeach
                </tbody>
            </table>
            <ul>
                <li>N/A: No matching characters were found.</li>
            </ul>
        </div>
    </div>
</div>
@endsection