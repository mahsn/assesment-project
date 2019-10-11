<?php

namespace App\Repositories;

use App\Repositories\Contracts\CardsRepositoryInterface;
use App\Models\Cards;

class CardsRepository implements CardsRepositoryInterface
{

	/** @const */
	const CARD_READ = 0;

	/** @const */
	const QUERY_LIMIT = 1;

	/** @var \App\Models\Cards $model */
	private $model;

	/**
	 * repository constructor
	 * 
	 * @param Cards $model
	 */
	public function __construct(Cards $model)
	{
		$this->model = $model;
	}

    /**
     * Perform save cards
     * @param array $items
     * @return bool|void
     */
	public function save(array $items)
	{
		$this->clearTable();

		foreach($items as $item) {
			try {
				$cards = new $this->model($item);
				$cards->save();
			} catch (Exception $e) {
				throw new Exception($e->getMessage());
			}
		}

		return true;
	}

	/**
	 * Return the last card
	 * @return $this
	 */
	public function getNextCard()
	{
		$card = $this->model::where('card_read', self::CARD_READ)
    				->orderBy('id', 'ASC')
    				->limit(self::QUERY_LIMIT)
    				->get();

    	return $card;
	}

	/**
	 * Get the position where the card of user is
	 * @param  string $card
	 * @return $this
	 */
	public function getUserCardPosition(string $card)
	{
		$card = $this->model::getUserCardPosition($card);

		return $card;
	}

	/**
	 * Update last card to read status
	 * @return void
	 */
	public function setLastCardAsRead()
	{
		$card = $this->model::getLastRead();
		$card->card_read = true;
		$card->save();

	}

    /**
     * Before start new challenge, truncate table
     *
     * @return bool|void
     */
	public function clearTable()
	{
	    try {
            $this->model::truncate();
        } catch (\Exception $e) {
            throw new Exception($e->getMessage());
        }
		return true;
	}
}