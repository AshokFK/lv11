<?php

use App\Models\User;

it('can render the dashboard page', function () {
    $user = User::factory()->create();

    $this->actingAs($user)
        ->get('/dashboard')
        ->assertStatus(200)
        ->assertSee("You're logged in!");
});
