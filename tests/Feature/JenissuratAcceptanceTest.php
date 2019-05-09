<?php

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class JenissuratAcceptanceTest extends TestCase
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
        $response = $this->actor->call('GET', 'jenissurats');
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertViewHas('jenissurats');
    }

    public function testCreate()
    {
        $response = $this->actor->call('GET', 'jenissurats/create');
        $this->assertEquals(200, $response->getStatusCode());
    }

    public function testStore()
    {
        $response = $this->actor->call('POST', 'jenissurats', $this->Jenissurat->toArray());

        $this->assertEquals(302, $response->getStatusCode());
        $this->assertRedirectedTo('jenissurats/'.$this->Jenissurat->id.'/edit');
    }

    public function testEdit()
    {
        $this->actor->call('POST', 'jenissurats', $this->Jenissurat->toArray());

        $response = $this->actor->call('GET', '/jenissurats/'.$this->Jenissurat->id.'/edit');
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertViewHas('jenissurat');
    }

    public function testUpdate()
    {
        $this->actor->call('POST', 'jenissurats', $this->Jenissurat->toArray());
        $response = $this->actor->call('PATCH', 'jenissurats/1', $this->JenissuratEdited->toArray());

        $this->assertEquals(302, $response->getStatusCode());
        $this->assertDatabaseHas('jenissurats', $this->JenissuratEdited->toArray());
        $this->assertRedirectedTo('/');
    }

    public function testDelete()
    {
        $this->actor->call('POST', 'jenissurats', $this->Jenissurat->toArray());

        $response = $this->call('DELETE', 'jenissurats/'.$this->Jenissurat->id);
        $this->assertEquals(302, $response->getStatusCode());
        $this->assertRedirectedTo('jenissurats');
    }

}
