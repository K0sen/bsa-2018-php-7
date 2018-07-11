<?php

namespace App\Services;

use App\Entity\Money;
use App\Requests\CreateMoneyRequest;

class MoneyService implements MoneyServiceInterface
{
    public function create(CreateMoneyRequest $request): Money
    {

    }

    public function maxAmount(): float
    {

    }
}
