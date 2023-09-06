<?php

namespace App\Policies;

use App\Models\User;

class ConfigPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }


    public function update(User $user)
    {
        if($user->user_type == 'admin') return true;
        else return false;

    }
}
