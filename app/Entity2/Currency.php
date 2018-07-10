<?php

namespace App\Entity2;

use Illuminate\Database\Eloquent\Model;

class Currency extends Model
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
