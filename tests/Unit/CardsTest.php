<?php

namespace Tests\Unit;

use App\Models\Cards;
use App\Repositories\CardsRepository;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use App\Helpers\CardsHelper;

class CardsTest extends TestCase
{

    /**
     * Validate if cards was generated
     */
    public function testCardsGenerate()
    {
        $helper = new CardsHelper();
        $cards = $helper->generateAllCards();

        $this->assertNotEmpty($cards, 'Generate cards should return an array');
        $this->assertIsArray($cards, 'Cards should return an array');
    }

    /**
     * Validate if card value is not empty
     */
    public function testCardHasValue()
    {
        $helper = new CardsHelper();
        $cards = $helper->generateAllCards();

        foreach ($cards as $key => $value) {
            $this->assertNotEmpty($value, 'Value should be filled');
        }
    }


    /**
     * Validate if data was saved
     */
    public function testDataWasSaved()
    {
        $helper = new CardsHelper();
        $cards = $helper->generateAllCards();

        $cardsRepository = new CardsRepository(new Cards());
        $callback = $cardsRepository->save($cards);

        $this->assertTrue($callback);
    }

    /**
     * Validate if repository truncate table
     */
    public function testClearTable()
    {
        $cardsRepository = new CardsRepository(new Cards());
        $callback = $cardsRepository->clearTable();

        $this->assertTrue($callback);
    }
}
