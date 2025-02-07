<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ContactTest extends DuskTestCase
{
    public function testContactFormSubmission()
    {
        // $this->browse(function (Browser $browser) {
        //     $browser->visit('/contact')
        //             ->type('name', 'John Doe')
        //             ->type('email', 'johndoe@example.com')
        //             ->type('message', 'This is a test message.')
        //             ->press('Send')
        //             ->assertSee('Message sent successfully!');
        // });

        // $this->browse(function (Browser $browser) {
        //     $browser->visit('/contact')
        //             ->type('name', 'John Doe')
        //             ->type('email', 'johndoe@example.com')
        //             ->type('message', 'This is a test message.')
        //             ->press('Send')
        //             ->waitForText('Message sent successfully!', 5) // Attendre 5 secondes maximum
        //             ->assertSee('Message sent successfully!');
        // });

        $this->browse(function (Browser $browser) {
            $browser->visit('/contact')
                    ->pause(1000) // Pause de 1 seconde après la visite de la page
                    ->type('name', 'John Doe')
                    ->pause(1000) // Pause après avoir rempli le champ "name"
                    ->type('email', 'johndoe@example.com')
                    ->pause(1000) // Pause après avoir rempli le champ "email"
                    ->type('message', 'This is a test message.')
                    ->pause(1000) // Pause après avoir rempli le champ "message"
                    ->press('Send')
                    ->pause(2000) // Pause de 2 secondes après avoir cliqué sur "Send"
                    ->waitForText('Message sent successfully!', 5) // Attendre 5 secondes maximum
                    ->assertSee('Message sent successfully!');
        });


    }
}

