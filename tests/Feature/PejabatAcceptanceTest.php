<?php

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class PejabatAcceptanceTest extends TestCase
{
    use DatabaseMigrations;
    use WithoutMiddleware;

    public function setUp()
    {
        parent::setUp();

        $this->Pejabat = factory(App\Models\Pejabat::class)->make([
            'id' => '1',
		'name' => 'temporibus',
		'jabatan' => 'harum',
		'nip' => 'ducimus',

        ]);
        $this->PejabatEdited = factory(App\Models\Pejabat::class)->make([
            'id' => '1',
		'name' => 'temporibus',
		'jabatan' => 'harum',
		'nip' => 'ducimus',

        ]);
        $user = factory(App\Models\User::class)->make();
        $this->actor = $this->actingAs($user);
    }

    public function testIndex()
    {
        $response = $this->actor->call('GET', 'pejabats');
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertViewHas('pejabats');
    }

    public function testCreate()
    {
        $response = $this->actor->call('GET', 'pejabats/create');
        $this->assertEquals(200, $response->getStatusCode());
    }

    public function testStore()
    {
        $response = $this->actor->call('POST', 'pejabats', $this->Pejabat->toArray());

        $this->assertEquals(302, $response->getStatusCode());
        $this->assertRedirectedTo('pejabats/'.$this->Pejabat->id.'/edit');
    }

    public function testEdit()
    {
        $this->actor->call('POST', 'pejabats', $this->Pejabat->toArray());

        $response = $this->actor->call('GET', '/pejabats/'.$this->Pejabat->id.'/edit');
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertViewHas('pejabat');
    }

    public function testUpdate()
    {
        $this->actor->call('POST', 'pejabats', $this->Pejabat->toArray());
        $response = $this->actor->call('PATCH', 'pejabats/1', $this->PejabatEdited->toArray());

        $this->assertEquals(302, $response->getStatusCode());
        $this->assertDatabaseHas('pejabats', $this->PejabatEdited->toArray());
        $this->assertRedirectedTo('/');
    }

    public function testDelete()
    {
        $this->actor->call('POST', 'pejabats', $this->Pejabat->toArray());

        $response = $this->call('DELETE', 'pejabats/'.$this->Pejabat->id);
        $this->assertEquals(302, $response->getStatusCode());
        $this->assertRedirectedTo('pejabats');
    }

}
