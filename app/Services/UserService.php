<?php

namespace App\Services;

use Illuminate\Support\Collection;
use App\Entity\User;
use App\Requests\SaveUserRequest;

class UserService implements UserServiceInterface
{
    /**
     * @return Collection
     */
    public function findAll(): Collection
    {
        return User::all();
    }

    /**
     * @param int $id
     * @return User|null
     */
    public function findById(int $id): ?User
    {
        return User::find($id);
    }

    /**
     * @param SaveUserRequest $request
     * @return User
     */
    public function save(SaveUserRequest $request): User
    {
        if ($request->getId() && $user = $this->findById($request->getId())) {
            return $this->update($user, $request);
        }

        return $this->create($request);
    }

    /**
     * @param User            $user
     * @param SaveUserRequest $request
     * @return User
     */
    public function update(User $user, SaveUserRequest $request): User
    {
        $user->name = $request->getName();
        $user->email = $request->getEmail();
        $user->save();

        return $user;
    }

    /**
     * @param SaveUserRequest $request
     * @return User
     */
    public function create(SaveUserRequest $request): User
    {
        $user = new User();
        $user->name = $request->getName();
        $user->email = $request->getEmail();
        $user->save();

        return $user;
    }

    /**
     * @param int $id
     * @throws \Exception
     */
    public function delete(int $id): void
    {
        if ($user = $this->findById($id)) {
            $user->delete();
        }
    }
}
