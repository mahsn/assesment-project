<?php

namespace App\Http\Controllers\Phrase;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Mahsn\PhraseAnalyser\PhraseProcessor;

class ProcessController extends Controller
{
    /** @var \Mahsn\PhraseAnalyser\PhraseProcessor $phraseHelper */
    protected $phraseHelper;

    /**
     * class constructor
     * 
     * @param PhraseProcessor $phraseHelper
     */
    public function __construct(
        PhraseProcessor $phraseHelper
    )
    {
        $this->phraseHelper = $phraseHelper;
    }

    /**
     * Controller action method
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request)
    {
        if ($request->has('message')) {
            $phrase = strtolower($request->input('message'));

            $collection = $this->phraseHelper->processor($phrase);

            return view('phrase.process', [
                'collection' => $collection,
                'phrase' => $phrase
            ]);
        }

        return redirect('/phrase');
    }
}
