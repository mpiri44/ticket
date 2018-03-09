<?php
namespace Payamava\Ticket;

use Illuminate\Support\ServiceProvider;

class TicketServiceProvider extends ServiceProvider{


    public function register()
    {

    }

    public function boot()
    {
        if($this->app->runningInConsole()){
            $this->publishes([
                __DIR__.'/../database/migrations' => database_path('migrations'),
            ], 'migrations');
        }
    }
}