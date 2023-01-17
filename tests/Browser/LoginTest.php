<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/laravel_dusk_example/public/')
                    ->clickLink('Log in')
                    ->type('email', 'felipe@gmail.com')
                    ->type('password', '12345678')
                    ->click('button[type="submit"]')
                    ->assertSee('You are logged in')
                    ->assertSee('Laravel');
            $browser->pause(1000);
        });
    }
}
