<?php

use App\Models\User;

test('logs in a user', function (): void {
    $user = User::factory()->create(['password' => 'password']);

    visit('/login')
        ->fill('email', $user->email)
        ->fill('password', 'password')
        ->click('@login-button')
        ->assertPathIs('/');

    $this->assertAuthenticated();
});

test('logs out a user', function (): void {
    $user = User::factory()->create();

    $this->actingAs($user);

    visit('/')->click('Logout');

    $this->assertGuest();
});
