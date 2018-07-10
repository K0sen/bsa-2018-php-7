<?php

namespace App\Entity2;

use Illuminate\Database\Eloquent\Model;

class User extends Model
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
