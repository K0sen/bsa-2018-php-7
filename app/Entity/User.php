<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Jul 2018 18:31:56 +0000.
 */

namespace App\Entity;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 *
 * @property \Illuminate\Database\Eloquent\Collection $wallets
 *
 * @package App\Entity
 */
class User extends Eloquent
{
    public $timestamps = false;

    protected $fillable = [
        'name',
        'email'
    ];

    public function wallets()
    {
        return $this->hasMany(Wallet::class);
    }
}
