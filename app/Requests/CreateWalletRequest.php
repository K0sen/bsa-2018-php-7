<?php

namespace App\Requests;

class CreateWalletRequest
{
    private $userId;

    /**
     * CreateWalletRequest constructor.
     *
     * @param int                  $userId
     */
    public function __construct(int $userId)
    {
        $this->userId = $userId;
    }

    /**
     * Gets UserId.
     *
     * @return int
     */
    public function getUserId(): int
    {
        return $this->userId;
    }
}
