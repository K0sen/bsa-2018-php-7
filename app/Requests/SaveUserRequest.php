<?php

namespace App\Requests;

class SaveUserRequest
{
    private $id;

    private $name;

    private $email;

    /**
     * SaveUserRequest constructor.
     * @param int    $id
     * @param string $name
     * @param string $email
     */
    public function __construct(?int $id, string $name, string $email)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
    }

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }
}
