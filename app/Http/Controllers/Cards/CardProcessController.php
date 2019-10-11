<?php

namespace App\Http\Controllers\Cards;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Traits\Generic;


class CardProcessController extends Controller
{

	/**
	 * Call generic trait with loaded classes
	 */
	use Generic;

    /**
     * Controller action method
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request)
    {
    	// Get card selected by user in session
    	$userCard = $request->session()->get('card');

    	// Get card rank selected by user in session
    	$userCardRank = $request->session()->get('rank');

    	// Get next card to show
    	$card = $this->cardsRepository->getNextCard();

    	// Get currently percentage
    	$percentage = $this->getCardPercentage($card->first()->id);

    	return view('cards.process', [
    		'current_card' => $card->first()->id,
    		'card' => $card->first(),
    		'rank' => $userCardRank,
    		'userCard' => $userCard,
    		'percentage' => $percentage,
    		'endProcess' => ($card->first()->card_abbreviation == $userCard) ? true : false
    	]);
    }

    /**
     * @param  int $actualCardId
     * @return int
     */
    public function getCardPercentage($actualCardId)
    {
    	$percentage = intval($actualCardId) / 52 * 100;

    	return round($percentage, 2);
    }
}
