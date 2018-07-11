<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 11 Jul 2018 07:16:21 +0000.
 */

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Currency.
 *
 * @property int                                      $id
 * @property string                                   $name
 * @property \Illuminate\Database\Eloquent\Collection $money
 */
class Currency extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'name',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function money()
    {
        return $this->hasMany(Money::class);
    }

    public function wallets()
    {
        return $this->belongsToMany(Wallet::class, 'money')->withPivot(['amount']);
    }
}
