<?php

namespace App\Services;

use App\Entity2\Currency;
use App\Requests\CreateCurrencyRequest;

interface CurrencyServiceInterface
{
    public function create(CreateCurrencyRequest $request): Currency;
}
