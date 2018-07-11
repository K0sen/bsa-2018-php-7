<?php

namespace App\Requests;

class CreateMoneyRequest
{
    private $currencyId;

    private $walletId;

    private $amount;

    public function __construct(int $currencyId, int $walletId, float $amount)
    {
        $this->currencyId = $currencyId;
        $this->walletId = $walletId;
        $this->amount = $amount;
    }

    /**
     * Gets CurrencyId.
     *
     * @return int
     */
    public function getCurrencyId(): int
    {
        return $this->currencyId;
    }

    /**
     * Gets WalletId.
     *
     * @return int
     */
    public function getWalletId(): int
    {
        return $this->walletId;
    }

    /**
     * Gets Amount.
     *
     * @return float
     */
    public function getAmount(): float
    {
        return $this->amount;
    }
}
