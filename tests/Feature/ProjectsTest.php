<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;
use Database\Factories\UserFactory;
use Illuminate\Support\Facades\Auth;


class ProjectsTest extends TestCase
{

    /** @test */
    public function only_loged_user_can_see_projects()
    {
        $response = $this->get('/projects')
            ->assertRedirect('/login');
    }


    /** @test */
    public function loged_user_can_see_projects()
    {
        $user = Auth::loginUsingId(1);
        $this->actingAs($user)->get('/projects')->assertStatus(200);
    }

    /** @test */
    public function can_add_new_project()
    {
        $user = Auth::loginUsingId(1);
        $response = $this->actingAs($user)->post('/projects/store', [
         
            'project_name' => 'Test Project',
            'groups_number' => 4,
            'students_per_group' => 3
        ]);
        $this->assertDatabaseHas('projects', [
          
            'project_name' => 'Test Project',
            'groups_number' => 4,
            'students_per_group' => 3
        ]);
    }

}
