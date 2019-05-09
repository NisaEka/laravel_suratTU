<?php

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class SuratAcceptanceTest extends TestCase
{
    use DatabaseMigrations;
    use WithoutMiddleware;

    public function setUp()
    {
        parent::setUp();

        $this->Surat = factory(App\Models\Surat::class)->make([
            'id' => '1',
		'mhs_id' => '1',
		'jenissurat' => '1',
		'detail' => 'at voluptatum ipsam nemo',

        ]);
        $this->SuratEdited = factory(App\Models\Surat::class)->make([
            'id' => '1',
		'mhs_id' => '1',
		'jenissurat' => '1',
		'detail' => 'at voluptatum ipsam nemo',

        ]);
        $user = factory(App\Models\User::class)->make();
        $this->actor = $this->actingAs($user);
    }

    public function testIndex()
    {
        $response = $this->actor->call('GET', 'surats');
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertViewHas('surats');
    }

    public function testCreate()
    {
        $response = $this->actor->call('GET', 'surats/create');
        $this->assertEquals(200, $response->getStatusCode());
    }

    public function testStore()
    {
        $response = $this->actor->call('POST', 'surats', $this->Surat->toArray());

        $this->assertEquals(302, $response->getStatusCode());
        $this->assertRedirectedTo('surats/'.$this->Surat->id.'/edit');
    }

    public function testEdit()
    {
        $this->actor->call('POST', 'surats', $this->Surat->toArray());

        $response = $this->actor->call('GET', '/surats/'.$this->Surat->id.'/edit');
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertViewHas('surat');
    }

    public function testUpdate()
    {
        $this->actor->call('POST', 'surats', $this->Surat->toArray());
        $response = $this->actor->call('PATCH', 'surats/1', $this->SuratEdited->toArray());

        $this->assertEquals(302, $response->getStatusCode());
        $this->assertDatabaseHas('surats', $this->SuratEdited->toArray());
        $this->assertRedirectedTo('/');
    }

    public function testDelete()
    {
        $this->actor->call('POST', 'surats', $this->Surat->toArray());

        $response = $this->call('DELETE', 'surats/'.$this->Surat->id);
        $this->assertEquals(302, $response->getStatusCode());
        $this->assertRedirectedTo('surats');
    }

}
