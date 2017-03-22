<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Carrello' => 'App\Policies\CarrelloPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        // se non è autenticato ritorna automaticamente false
        // Gate::define('visualizza-carrello', function($user,$carrello){
        // return $user->id == $carrello->user_id;
        // })
        

        ///////////
        // RUOLI //
        ///////////
        
        // definisco una relazione molti-a-molti tra User e Role
        
        /*$gate->define('edit-forum', function ($user) {
            return $user->hasRole('manager');
        })*/

    }
}
