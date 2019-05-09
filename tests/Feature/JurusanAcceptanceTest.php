<?php

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class JurusanAcceptanceTest extends TestCase
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
        $response = $this->actor->call('GET', 'jurusans');
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertViewHas('jurusans');
    }

    public function testCreate()
    {
        $response = $this->actor->call('GET', 'jurusans/create');
        $this->assertEquals(200, $response->getStatusCode());
    }

    public function testStore()
    {
        $response = $this->actor->call('POST', 'jurusans', $this->Jurusan->toArray());

        $this->assertEquals(302, $response->getStatusCode());
        $this->assertRedirectedTo('jurusans/'.$this->Jurusan->id.'/edit');
    }

    public function testEdit()
    {
        $this->actor->call('POST', 'jurusans', $this->Jurusan->toArray());

        $response = $this->actor->call('GET', '/jurusans/'.$this->Jurusan->id.'/edit');
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertViewHas('jurusan');
    }

    public function testUpdate()
    {
        $this->actor->call('POST', 'jurusans', $this->Jurusan->toArray());
        $response = $this->actor->call('PATCH', 'jurusans/1', $this->JurusanEdited->toArray());

        $this->assertEquals(302, $response->getStatusCode());
        $this->assertDatabaseHas('jurusans', $this->JurusanEdited->toArray());
        $this->assertRedirectedTo('/');
    }

    public function testDelete()
    {
        $this->actor->call('POST', 'jurusans', $this->Jurusan->toArray());

        $response = $this->call('DELETE', 'jurusans/'.$this->Jurusan->id);
        $this->assertEquals(302, $response->getStatusCode());
        $this->assertRedirectedTo('jurusans');
    }

}
