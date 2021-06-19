<?php

namespace Tests\Feature\Http\Controllers\Backend;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserControllerTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function this_creates_a_user()
    {
        //given
        // we visit register page
        // we post data to register a user
        // the user is succseffuly registred and redirected as we want the user to be
        $this->assertTrue(true);
        //act
        //assert

    }



}
