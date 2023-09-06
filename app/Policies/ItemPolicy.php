<?php

namespace App\Policies;

use App\Models\Item;
use App\Models\User;

class ItemPolicy
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

    public function create(User $user)
    {
        if($user->user_type == 'admin' || $user->user_type == 'staff') return true;
        else return false;

    }

    public function delete(User $user)
    {
        if($user->user_type == 'admin' || $user->user_type == 'staff') return true;
        else return false;

    }
}
