<?php

namespace App\Http\Controllers\Phrase;

use App\Http\Controllers\Controller;

class AnalyserController extends Controller
{

    /**
     * Controller action method
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
    	return view('phrase.analyser');
    }
}
