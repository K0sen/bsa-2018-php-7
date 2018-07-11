<?php

namespace App\Requests;

class CreateCurrencyRequest
{
    private $name;

    /**
     * CreateCurrencyRequest constructor.
     * @param $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}
