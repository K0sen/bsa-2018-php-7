<?php

namespace App\Services;

use App\Entity\Currency;
use Illuminate\Support\Collection;
use App\Entity\User;
use App\Entity\Wallet;
use App\Requests\CreateWalletRequest;

class WalletService implements WalletServiceInterface
{
    /**
     * Finds a wallet by user id
     *
     * @param int $userId
     * @return Wallet|null
     */
    public function findByUser(int $userId): ?Wallet
    {
        $user = User::find($userId);
        return $user ? $user->wallet : null;
    }

    /**
     * @param CreateWalletRequest $request
     * @return Wallet
     * @throws \LogicException
     */
    public function create(CreateWalletRequest $request): Wallet
    {
        $userId = $request->getUserId();
        if ($this->findByUser($userId) !== null) {
            throw new \LogicException('Wallet for the user is already exists');
        }

        $wallet = new Wallet();
        $wallet->user_id = $userId;
        $wallet->save();

        return $wallet;
    }

    /**
     * Gets all currencies that belongs to the wallet
     *
     * @param int $walletId
     * @return Collection
     */
    public function findCurrencies(int $walletId): Collection
    {
        return Currency::whereHas('money', function ($query) use ($walletId) {
            $query->where('wallet_id', $walletId);
        })->get();
    }
}
