<?php

namespace App\Helpers;

class CardsHelper
{
	/** @const */
	const CARD_NUMBERS = [
		'A', '2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K'
	];

	/** @const */
	const CARD_SUITS = [
		'C' => 'Clubs',
		'D' => 'Diamonds',
		'H' => 'Hearts',
		'S' => 'Spades'
	];

	/**
	 * Card numbers options
	 * 
	 * @return string
	 */
	public function getCardOptions()
	{
		$html = '';
		foreach (self::CARD_NUMBERS as $card) {
			$html .= sprintf("<option value='%s'>%s</option>", $card, $card);
		}

		return $html;
	}

	/**
	 * Card suits options
	 * 
	 * @return string
	 */
	public function getCardSuitOptions()
	{
		$html = '';
		foreach (self::CARD_SUITS as $key => $value) {
			$html .= sprintf("<option value='%s'>%s</option>", $key, $value);
		}

		return $html;
	}

	/**
	 * Card suits options
	 * 
	 * @return string
	 */
	public function getCardRankOptions()
	{
		$html = '';
		for($i = 1; $i <= 52; $i++) {
			$html .= sprintf("<option>%s</option>", $i);
		}

		return $html;
	}

	/**
	 * Responsible for generate all cards
	 * and also create a randon order
	 * 
	 * @return array
	 */
	public function generateAllCards()
	{
		$cards = [];

		foreach(self::CARD_NUMBERS as $number) {
			foreach (self::CARD_SUITS as $key => $value) {
				$newCard = [
					'card_number' => $number,
					'card_suit' => $value,
					'card_abbreviation' => $number.$key
				];
				array_push($cards, $newCard);
			}
		}
		shuffle($cards);
		
		return $cards;
	}
}