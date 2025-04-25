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
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit(url: '/') //mengunjungi url halaman utama
            ->assertSee(text: 'Modul 3') //melihat teks Modul 3
            ->clickLink(link: 'Register')
            ->assertPathIs(path: '/register')
            ->type(field: 'name', value: 'anisa')
            ->type(field: 'email', value: 'anisa@gmail.com')
            ->type(field: 'password', value: 'password')
            ->type(field: 'password_confirmation', value: 'password')
            ->press(button: 'REGISTER');
        });
    }
}
