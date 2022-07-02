<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    // Admin ACL
    public function isAdmin(User $user) {
        return $user->role == 'Admin' ;
    }
    // Writer ACL
    public function isWriter(User $user) {
        return $user->role == 'Writer' ;
    }

}
