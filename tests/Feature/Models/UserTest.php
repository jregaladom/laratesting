<?php

namespace Tests\Feature\Models;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class UserTest extends TestCase
{
    use RefreshDatabase; //migrate
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testUser()
    {
        User::factory()->create([
            'email' => 'i@admin.com'
        ]);
        $this->assertDatabaseHas('users', [
            'email' => 'i@admin.com'
        ]);

        $this->assertDatabaseMissing('users', [
            'email' => 'ni@admin.com'
        ]);
    }
}
