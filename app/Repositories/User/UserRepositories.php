<?php

use App\Repositories\User\UserInterface as UserInterface;
use App\Models\User;

class UserRepositories implements UserInterface
{
    function __construct(User $user)
    {
        $this->user = $user;
    }

    public function getAll()
    {
        return $this->user->getAll();
    }


    public function find($id)
    {
        return $this->user->findUser($id);
    }


    public function delete($id)
    {
        return $this->user->deleteUser($id);
    }
}


?>