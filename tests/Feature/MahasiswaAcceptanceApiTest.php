<?php

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class MahasiswaAcceptanceApiTest extends TestCase
{
    use DatabaseMigrations;
    use WithoutMiddleware;

    public function setUp()
    {
        parent::setUp();

        $this->Mahasiswa = factory(App\Models\Mahasiswa::class)->make([
            'id' => '1',
		'nim' => '1',
		'nama' => '1',
		'jurusan' => '1',
		'semester' => '1',
		'tempatlahir' => '1',
		'tanggallahir' => '1',
		'telp' => '1',
		'user_id' => '1',

        ]);
        $this->MahasiswaEdited = factory(App\Models\Mahasiswa::class)->make([
            'id' => '1',
		'nim' => '1',
		'nama' => '1',
		'jurusan' => '1',
		'semester' => '1',
		'tempatlahir' => '1',
		'tanggallahir' => '1',
		'telp' => '1',
		'user_id' => '1',

        ]);
        $user = factory(App\Models\User::class)->make();
        $this->actor = $this->actingAs($user);
    }

    public function testIndex()
    {
        $response = $this->actor->call('GET', 'api/v1/mahasiswas');
        $this->assertEquals(200, $response->getStatusCode());
    }

    public function testStore()
    {
        $response = $this->actor->call('POST', 'api/v1/mahasiswas', $this->Mahasiswa->toArray());
        $this->assertEquals(200, $response->getStatusCode());
        $this->seeJson(['id' => 1]);
    }

    public function testUpdate()
    {
        $this->actor->call('POST', 'api/v1/mahasiswas', $this->Mahasiswa->toArray());
        $response = $this->actor->call('PATCH', 'api/v1/mahasiswas/1', $this->MahasiswaEdited->toArray());
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertDatabaseHas('mahasiswas', $this->MahasiswaEdited->toArray());
    }

    public function testDelete()
    {
        $this->actor->call('POST', 'api/v1/mahasiswas', $this->Mahasiswa->toArray());
        $response = $this->call('DELETE', 'api/v1/mahasiswas/'.$this->Mahasiswa->id);
        $this->assertEquals(200, $response->getStatusCode());
        $this->seeJson(['success' => 'mahasiswa was deleted']);
    }

}
