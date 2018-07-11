<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 11 Jul 2018 07:16:21 +0000.
 */

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

/**
 * Class User.
 *
 * @property int                                      $id
 * @property string                                   $name
 * @property string                                   $email
 * @property \Illuminate\Database\Eloquent\Collection $wallets
 */
class User extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'name',
        'email',
    ];

    public function wallets()
    {
        return $this->hasMany(Wallet::class);
    }

    public static function boot(): void
    {
        self::deleting(function ($user) {
            /** @var $user User */
            $user->wallets()->delete();
        });
    }
}
