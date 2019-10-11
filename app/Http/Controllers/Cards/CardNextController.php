<?php

namespace App\Http\Controllers\Cards;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Traits\Generic;

class CardNextController extends Controller
{
    /**
	 * Call generic trait with loaded classes
	 */
	use Generic;

    /**
     * Controller action method
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
	public function index()
	{
		$this->cardsRepository->setLastCardAsRead();

		return redirect('cards/process');
	}
}
