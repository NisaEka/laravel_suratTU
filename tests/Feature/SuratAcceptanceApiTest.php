<?php

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class SuratAcceptanceApiTest extends TestCase
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
		'detail' => 'laboriosam possimus atque illum',

        ]);
        $this->SuratEdited = factory(App\Models\Surat::class)->make([
            'id' => '1',
		'mhs_id' => '1',
		'jenissurat' => '1',
		'detail' => 'laboriosam possimus atque illum',

        ]);
        $user = factory(App\Models\User::class)->make();
        $this->actor = $this->actingAs($user);
    }

    public function testIndex()
    {
        $response = $this->actor->call('GET', 'api/v1/surats');
        $this->assertEquals(200, $response->getStatusCode());
    }

    public function testStore()
    {
        $response = $this->actor->call('POST', 'api/v1/surats', $this->Surat->toArray());
        $this->assertEquals(200, $response->getStatusCode());
        $this->seeJson(['id' => 1]);
    }

    public function testUpdate()
    {
        $this->actor->call('POST', 'api/v1/surats', $this->Surat->toArray());
        $response = $this->actor->call('PATCH', 'api/v1/surats/1', $this->SuratEdited->toArray());
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertDatabaseHas('surats', $this->SuratEdited->toArray());
    }

    public function testDelete()
    {
        $this->actor->call('POST', 'api/v1/surats', $this->Surat->toArray());
        $response = $this->call('DELETE', 'api/v1/surats/'.$this->Surat->id);
        $this->assertEquals(200, $response->getStatusCode());
        $this->seeJson(['success' => 'surat was deleted']);
    }

}
