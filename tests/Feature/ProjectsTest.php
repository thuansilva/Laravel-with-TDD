<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProjectsTest extends TestCase
{
    use WithFaker, RefreshDatabase;

    /**@test */
    public function a_user_can_create_a_projects()
    {
        $this->withoutExceptionHandling();
        $this->post('/projects',[
            $atributes =[
                'title'=> $this->faker->sentence,
                'description'=>$this->faker->paragraph

            ]

        ]);
        $this->post("/projects",$atributes)->assertRedirect('/projects');
        $this->assertDatabaseHas('projects',$atributes);
        $this->get('/projects')->assertSee($atributes['title']);

    }
}
