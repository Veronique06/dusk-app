<?php

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

uses(TestCase::class, RefreshDatabase::class);

it('can store a contact message', function () {
    $response = $this->post(route('contact.store'), [
        'name' => 'John Doe',
        'email' => 'johndoe@example.com',
        'message' => 'Hello world!'
    ]);

    $response->assertRedirect(route('contact.index'));
    // $this->assertDatabaseHas('contacts', ['email' => 'johndoe@example.com']);
    $this->assertDatabaseHas('contacts', [
        'name' => 'John Doe',
        'email' => 'johndoe@example.com'
    ]);

});
