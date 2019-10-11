<?php

namespace App\Repositories\Contracts;

interface CardsRepositoryInterface
{
	/**
	 * Perform save cards
	 * @param  array  $items
	 * @return void
	 */
	public function save(array $items);

	/**
	 * Update last card to read status
	 * @return void
	 */
	public function setLastCardAsRead();

	/**
	 * Return the last card
	 * @return $this
	 */
	public function getNextCard();

	/**
	 * Get the position where the card of user is
	 * @param  string $card
	 * @return $this
	 */
	public function getUserCardPosition(string $card);

	/**
	 * Before start new challenge, truncate table
	 * 
	 * @return void
	 */
	public function clearTable();
}