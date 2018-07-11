<?php

namespace App\Services;

use App\Entity\Currency;
use App\Entity\Money;
use App\Entity\Wallet;
use App\Requests\CreateMoneyRequest;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class MoneyService implements MoneyServiceInterface
{
    /**
     * @param CreateMoneyRequest $request
     * @return Money
     */
    public function create(CreateMoneyRequest $request): Money
    {
        $currency = Currency::find($request->getCurrencyId());
        $wallet = Wallet::find($request->getWalletId());
        if (!$currency && !$wallet) {
            throw new ModelNotFoundException('Wrong currency/wallet id');
        }

        $money = new Money();
        $money->currency_id = $currency->id;
        $money->wallet_id = $wallet->id;
        $money->amount = $request->getAmount();
        $money->save();

        return $money;
    }

    /**
     * @return float
     */
    public function maxAmount(): float
    {
        return Money::max('amount');
    }
}
