<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class runnerFormDataTest extends TestCase
{
    private $route;

    public function setUp(): void
    {
        parent::setUp();

        $this->artisan('migrate');
        $this->seed();

        $this->route = \Config::get('app.url') . 'api/v1/runner/5/form-data';

    }
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_api_route()
    {
        $response = $this->get($this->route);
        $response->assertStatus(200);
    }

    public function test_json_structure(){
        $response = $this->get($this->route);

        $response->assertJson([
            'success' => true,
            'data' => !null,
            'status' => 200,
        ]);
    }
}
