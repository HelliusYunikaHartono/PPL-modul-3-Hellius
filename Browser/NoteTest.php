<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class NoteTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testLoginAndCreateNote(): void
{
    $this->browse(function (Browser $browser): void {
        $browser->visit('/')
            ->clickLink('Log in')
            ->assertPathIs('/login')
            ->type('email', 'admin@gmail.com')
            ->type('password', 'password')
            ->press('LOG IN')
            ->visit('/notes/create')
            ->type('title', 'Belajar Laravel Dusk')
            ->type('description', 'Membuat test otomatis dari login ke catatan.')
            ->press('CREATE')
            ->assertSee('Belajar Laravel Dusk');
    });
}

}
