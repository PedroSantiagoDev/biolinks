<?php

namespace App\Policies;

use App\Models\Link;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class LinkPolicy
{
    /**
     * Determine whether the user can change the model.
     */
    public function change(User $user, Link $link)
    {
        return $link->user->is($user)
            ? Response::allow()
            : Response::deny('Esse link não é seu!');
    }
}
