<?php

namespace Tests\Feature\Http\Controllers;

use Faker\Factory;
use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProjectControllerTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function when_a_user_login_he_can_create_a_project()
    {
        $user = User::factory()->create();
        dd($user->name);
        // $this->post([''])->get('user/login');
        return $this->assertTrue(true);
    }
}
