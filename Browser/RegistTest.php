<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegistTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testRegister(): void
{
    $this->browse(function (Browser $browser): void {
        $browser->visit('/')
            ->assertSee('Modul 3')
            ->clickLink('Register')
            ->assertPathIs('/register')
            ->type('name', 'helli')
            ->type('email', 'helli@gmail.com')
            ->type('password', 'password')
            ->type('password_confirmation', 'password')
            ->press('REGISTER');
    });
}

}
