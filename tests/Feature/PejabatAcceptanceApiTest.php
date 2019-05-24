<?php

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class PejabatAcceptanceApiTest extends TestCase
{
    use DatabaseMigrations;
    use WithoutMiddleware;

    public function setUp()
    {
        parent::setUp();

        $this->Pejabat = factory(App\Models\Pejabat::class)->make([
            'id' => '1',
		'name' => 'voluptas',
		'jabatan' => 'id',
		'nip' => 'culpa',

        ]);
        $this->PejabatEdited = factory(App\Models\Pejabat::class)->make([
            'id' => '1',
		'name' => 'voluptas',
		'jabatan' => 'id',
		'nip' => 'culpa',

        ]);
        $user = factory(App\Models\User::class)->make();
        $this->actor = $this->actingAs($user);
    }

    public function testIndex()
    {
        $response = $this->actor->call('GET', 'api/v1/pejabats');
        $this->assertEquals(200, $response->getStatusCode());
    }

    public function testStore()
    {
        $response = $this->actor->call('POST', 'api/v1/pejabats', $this->Pejabat->toArray());
        $this->assertEquals(200, $response->getStatusCode());
        $this->seeJson(['id' => 1]);
    }

    public function testUpdate()
    {
        $this->actor->call('POST', 'api/v1/pejabats', $this->Pejabat->toArray());
        $response = $this->actor->call('PATCH', 'api/v1/pejabats/1', $this->PejabatEdited->toArray());
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertDatabaseHas('pejabats', $this->PejabatEdited->toArray());
    }

    public function testDelete()
    {
        $this->actor->call('POST', 'api/v1/pejabats', $this->Pejabat->toArray());
        $response = $this->call('DELETE', 'api/v1/pejabats/'.$this->Pejabat->id);
        $this->assertEquals(200, $response->getStatusCode());
        $this->seeJson(['success' => 'pejabat was deleted']);
    }

}
