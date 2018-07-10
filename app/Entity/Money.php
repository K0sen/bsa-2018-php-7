<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Jul 2018 18:31:56 +0000.
 */

namespace App\Entity;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Money
 *
 * @property int $id
 * @property float $amount
 * @property int $currency_id
 * @property int $wallet_id
 * @property string $deleted_at
 *
 * @property \App\Entity\Currency $currency
 * @property \App\Entity\Wallet $wallet
 *
 * @package App\Entity
 */
class Money extends Eloquent
{
    use \Illuminate\Database\Eloquent\SoftDeletes;
    public $timestamps = false;

    protected $casts = [
        'amount' => 'float',
        'currency_id' => 'int',
        'wallet_id' => 'int'
    ];

    protected $fillable = [
        'amount',
        'currency_id',
        'wallet_id'
    ];

    public function currency()
    {
        return $this->belongsTo(Currency::class);
    }

    public function wallet()
    {
        return $this->belongsTo(Wallet::class);
    }
}
