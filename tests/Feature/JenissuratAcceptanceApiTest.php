<?php

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class JenissuratAcceptanceApiTest extends TestCase
{
    use DatabaseMigrations;
    use WithoutMiddleware;

    public function setUp()
    {
        parent::setUp();

        $this->Jenissurat = factory(App\Models\Jenissurat::class)->make([
            'id' => '1',
		'name' => '1',

        ]);
        $this->JenissuratEdited = factory(App\Models\Jenissurat::class)->make([
            'id' => '1',
		'name' => '1',

        ]);
        $user = factory(App\Models\User::class)->make();
        $this->actor = $this->actingAs($user);
    }

    public function testIndex()
    {
        $response = $this->actor->call('GET', 'api/v1/jenissurats');
        $this->assertEquals(200, $response->getStatusCode());
    }

    public function testStore()
    {
        $response = $this->actor->call('POST', 'api/v1/jenissurats', $this->Jenissurat->toArray());
        $this->assertEquals(200, $response->getStatusCode());
        $this->seeJson(['id' => 1]);
    }

    public function testUpdate()
    {
        $this->actor->call('POST', 'api/v1/jenissurats', $this->Jenissurat->toArray());
        $response = $this->actor->call('PATCH', 'api/v1/jenissurats/1', $this->JenissuratEdited->toArray());
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertDatabaseHas('jenissurats', $this->JenissuratEdited->toArray());
    }

    public function testDelete()
    {
        $this->actor->call('POST', 'api/v1/jenissurats', $this->Jenissurat->toArray());
        $response = $this->call('DELETE', 'api/v1/jenissurats/'.$this->Jenissurat->id);
        $this->assertEquals(200, $response->getStatusCode());
        $this->seeJson(['success' => 'jenissurat was deleted']);
    }

}
