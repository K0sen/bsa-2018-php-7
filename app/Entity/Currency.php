<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Jul 2018 18:31:56 +0000.
 */

namespace App\Entity;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Currency
 *
 * @property int $id
 * @property string $name
 *
 * @property \Illuminate\Database\Eloquent\Collection $money
 *
 * @package App\Entity
 */
class Currency extends Eloquent
{
    public $timestamps = false;

    protected $fillable = [
        'name'
    ];

    public function money()
    {
        return $this->hasMany(Money::class);
    }
}
