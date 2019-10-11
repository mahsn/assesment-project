<?php

namespace App\Http\Controllers\Cards;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Helpers\CardsHelper;

class CardController extends Controller
{

	/** @var \App\Helpers\CardsHelper $dataHelper */
	protected $dataHelper;
	
	/**
	 * class constructor
	 * @param CardsHelper $dataHelper [description]
	 */
	public function __construct(CardsHelper $cardsHelper)
	{
		$this->cardsHelper = $cardsHelper;
	}

    /**
     * Controller action
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('cards.card', [
        	'cardNumbers' => $this->cardsHelper->getCardOptions(),
        	'cardSuits' => $this->cardsHelper->getCardSuitOptions(),
        	'cardRank' => $this->cardsHelper->getCardRankOptions()
        ]);
    }
}
