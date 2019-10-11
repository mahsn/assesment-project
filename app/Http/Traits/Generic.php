<?php 

namespace App\Http\Traits;

use App\Http\Controllers\Controller;
use App\Models\Cards;
use App\Repositories\CardsRepository;
use App\Helpers\CardsHelper;

trait Generic
{
	/** @var \App\Helpers\CardsHelper $dataHelper */
	protected $dataHelper;

	/** @var \App\Repositories\CardsRepository $cardsRepository */
	protected $cardsRepository;

	/**
	 * class constructor
	 * @param CardsHelper $dataHelper
	 */
	public function __construct(
		CardsHelper $dataHelper,
		CardsRepository $cardsRepository
	)
	{
		$this->dataHelper = $dataHelper;
		$this->cardsRepository = $cardsRepository;
	}
}