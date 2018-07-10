<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Jul 2018 18:31:56 +0000.
 */

namespace App\Entity;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Wallet
 *
 * @property int $id
 * @property int $user_id
 * @property string $deleted_at
 *
 * @property \App\Entity\User $user
 * @property \Illuminate\Database\Eloquent\Collection $money
 *
 * @package App\Entity
 */
class Wallet extends Eloquent
{
    use \Illuminate\Database\Eloquent\SoftDeletes;
    public $timestamps = false;

    protected $casts = [
        'user_id' => 'int'
    ];

    protected $fillable = [
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function money()
    {
        return $this->hasMany(Money::class);
    }
}
