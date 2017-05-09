<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
	protected $fillable=[
	'nama','harga','jenis','foto','detil',
	];

	public static function statusList()
	{
		return [
		'food' => 'Makanan',
		'drink' => 'Minuman',
		'package' => 'Menu Paket'

		];
	}

	public function getHumanStatusAttribute()
	{
		return static::statusList()[$this->jenis];
	}

	public static function allowedStatus()
	{
		return array_keys(static::statusList());
	}	
}
