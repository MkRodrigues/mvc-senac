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
            $browser->visit('http://127.0.0.1:8000/')
                ->assertSee('Aula de Laravel');
        });

        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/')
                ->assertSee('LOGIN');
        });

        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/')
                ->assertSee('REGISTER');
        });
    }
}

// Obs.: No windows ao invés de rodar o comando artisan serve --port=9515, tem que abrir o diretório no bash (./vendor/laravel/dusk/bin/chromedriver-win.exe) e ele vai rodar o comando por si só, e lá no ClientesTest, é só colocar o endereço do localhost completo.