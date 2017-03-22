<?php

namespace App\Policies;

use App\Carrello;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;


/////////////////////////////////////////////////////////////////////////////
// ATTENZIONE !! Questa classe policy va registrata in AuthServiceProvider //
/////////////////////////////////////////////////////////////////////////////
class CarrelloPolicy
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

    public function access(User $user, Carrello $carrello)
        {
            return $user->id == $carrello->user_id;
        }
}
