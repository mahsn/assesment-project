<?php

namespace App\Http\Controllers\Cards;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Traits\Generic;

class CardCreateController extends Controller
{

	/**
	 * Call generic trait with loaded classes
	 */
	use Generic;

    /**
     * Controller action method
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Exception
     */
    public function index(Request $request)
    {
    	if (!$request->has(['card_number', 'card_suit']))
		    throw new \Exception("Something is wrong! Try again after choose the cars!", 1);

    	// Set user card in session
    	$request->session()->put('card', $request->input('card_number') . $request->input('card_suit'));
        $request->session()->put('rank', $request->input('card_rank'));

    	// Generate all cards with random way
    	$generatedCards = $this->dataHelper->generateAllCards();
    	
    	// Perform action to save via repository
		$this->cardsRepository->save($generatedCards);
    	
    	return redirect('pokercalculator/process');
    }
}
