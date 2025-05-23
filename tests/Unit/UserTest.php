<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use PHPUnit\Framework\Attributes\Test;

class UserTest extends TestCase
{
    use RefreshDatabase;

    #[Test]
    public function it_can_create_a_user(): void
    {
        $user = User::factory()->create([
            'name' => 'Rayhan',
            'email' => 'rayhan@gmail.com',
        ]);

        $this->assertDatabaseHas('users', [
            'email' => 'rayhan@gmail.com',
        ]);
    }

    #[Test]
    public function it_hashes_the_password_when_creating_user(): void
    {
        $user = User::factory()->create([
            'password' => '123456',
        ]);

        $this->assertTrue(Hash::check('123456', $user->password));
    }

    #[Test]
    public function it_requires_unique_email(): void
    {
        User::factory()->create(['email' => 'duplicate@example.com']);

        $this->expectException(\Illuminate\Database\QueryException::class);

        User::factory()->create(['email' => 'duplicate@example.com']);
    }
}
