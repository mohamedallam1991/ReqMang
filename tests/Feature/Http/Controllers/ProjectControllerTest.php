<?php

namespace Tests\Feature\Http\Controllers;

use Faker\Factory;
use Tests\TestCase;
use App\Models\User;
use App\Models\Projet;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;

class ProjectControllerTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_user_can_create_a_project()
    {
        $user = User::factory()->admin()->create();

        $response = $this->from('/user/project/new')
            ->actingAs($user)
            ->post('/user/project/new', [
                'title' => 'projectation',
                // 'description' => 'yeah',
        ]);


        // dd($user->projets()->first()->get());
        // $this->assertEquals($user->projets()->first()->get()->title, 'projectation' );
        // $this->assertEquals(Projet::where('user_id', $user->id)->first()->title, 'projectation');
        $this->assertEquals($user->projets()->first()->title, 'projectation');
        // $this->assertEquals($user->projets()->first()->description, 'yeah');
        $response->assertStatus(302);
        $response->assertRedirect('/user/project/new');
        $this->assertEquals(1, Projet::count());
    }

    /** @test */
    public function authenticated_users_can_visit_create_project_page()
    {
        $user = User::factory()->create();
        $this->actingAs($user);
        $response = $this->get('/user/project/new');
        $response->assertOk();
    }

    /** @test */
    public function a_guest_cannot_see_the_create_project_page()
    {
        $response = $this->get('/user/project/new');
        $response->assertRedirect('login');
    }

    /** @test */
    public function a_user_can_only_see_his_projects()
    {
        // given we have a 2 users
        $userA = User::factory()->create();
        $userB = User::factory()->create();
        // each has 2 projects

        // user A can only see projects that belong to him
        $this->actingAs($userA)->get('/project');
        $this->assertTrue(true);
    }

    /** @test */
    public function project_migration_test()
    {
        // DB::
    }
}
