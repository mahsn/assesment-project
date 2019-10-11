<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cards extends Model
{
	/**
	 * Set primary key/foreign key
	 *
	 * @var array
	 */
	public $primaryKey = 'id';


	/**
	 * Set the table name
	 * 
	 * @var string
	 */
	protected $table = 'cards';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'card_abbreviation', 'card_number', 'card_suit',
    ];


    public function scopeGetUserCardPosition($query, $card)
    {
    	$query->where('card_abbreviation', 'LIKE', "%{$card}%");

    	return $query->first();
    }

    public function scopeGetLastRead($query)
    {
    	$query->where('card_read', '=', 0)
    			->orderBy('id', 'ASC')
    			->limit(1);

    	return $query->first();
    }
}
