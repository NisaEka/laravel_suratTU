<?php

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class JurusanAcceptanceApiTest extends TestCase
{
    use DatabaseMigrations;
    use WithoutMiddleware;

    public function setUp()
    {
        parent::setUp();

        $this->Jurusan = factory(App\Models\Jurusan::class)->make([
            'id' => '1',
		'name' => '1',

        ]);
        $this->JurusanEdited = factory(App\Models\Jurusan::class)->make([
            'id' => '1',
		'name' => '1',

        ]);
        $user = factory(App\Models\User::class)->make();
        $this->actor = $this->actingAs($user);
    }

    public function testIndex()
    {
        $response = $this->actor->call('GET', 'api/v1/jurusans');
        $this->assertEquals(200, $response->getStatusCode());
    }

    public function testStore()
    {
        $response = $this->actor->call('POST', 'api/v1/jurusans', $this->Jurusan->toArray());
        $this->assertEquals(200, $response->getStatusCode());
        $this->seeJson(['id' => 1]);
    }

    public function testUpdate()
    {
        $this->actor->call('POST', 'api/v1/jurusans', $this->Jurusan->toArray());
        $response = $this->actor->call('PATCH', 'api/v1/jurusans/1', $this->JurusanEdited->toArray());
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertDatabaseHas('jurusans', $this->JurusanEdited->toArray());
    }

    public function testDelete()
    {
        $this->actor->call('POST', 'api/v1/jurusans', $this->Jurusan->toArray());
        $response = $this->call('DELETE', 'api/v1/jurusans/'.$this->Jurusan->id);
        $this->assertEquals(200, $response->getStatusCode());
        $this->seeJson(['success' => 'jurusan was deleted']);
    }

}
