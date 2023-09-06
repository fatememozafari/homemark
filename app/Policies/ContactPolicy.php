<?php

namespace App\Policies;

use App\Models\User;

class ContactPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }

    public function viewAny(User $user )
    {
        if($user->user_type == 'admin' || $user->user_type == 'staff') return true;
        else return false;

    }
}
