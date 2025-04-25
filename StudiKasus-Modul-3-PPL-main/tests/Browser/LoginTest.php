<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{
    public function testExample(): void{
        {
            $this->browse(function (Browser $browser) {
                $browser->visit(url: '/') //mengunjungi url halaman utama
                ->assertSee(text: 'Modul 3') //melihat teks
                ->clickLink(link: 'Log in') //menekan tautan ‘Log in’
                ->assertPathIs(path: '/login') //memastikan url setelah menekan tautan sebelumnya
                ->type(field: 'email', value: 'admin1@gmail.com') //mengisi input yang memiliki atribut name email.
                ->type(field: 'password', value: 'password') //mengisi input yang memiliki atribut name password.
                ->press(button: 'LOG IN') //menekan tombol submit dari form
                ->assertPathIs('/dashboard'); //memastikan url mengarah ke dashboard
            });
        }
}
}

    

