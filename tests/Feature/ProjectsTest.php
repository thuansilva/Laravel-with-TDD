<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProjectsTest extends TestCase
{
    use WithFaker, RefreshDatabase;

    /** @test */
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

    // /** @test */
    // public function a_projects_requires_a_title()
    // {
    //     $attributes = Factory('App\Project')->raw(['title'=>'']);
    //     $this->post("/projects",[])->assertSessionHasErrors('title');

    // }

    // /** @test */
    // public function a_projects_requires_a_description()
    // {
    //     $attributes = factory('App\Project')->raw(['title'=>'']);
    //     $this->post("/projects",$attributes)->assertSessionHasErrors('description');

    // }
}
