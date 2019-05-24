<?php

use App\Models\User;
use App\Services\UserService;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $service = app(UserService::class);

        if (!User::where('name', 'admin')->first()) {

            $user = User::create([
                'name' => 'Admin',
                'email' => 'Admin@example.com',
                'password' => bcrypt('admin'),
            ]);
            $service->create($user, 'admin', 'admin', false);
            $user->meta->update([
                'is_active' => true,
            ]);

            $user1 = User::create([
                'nim' => '1167010001',
                'name' => 'Ahmad Imam',
                'jurusan' => '1',
                'semester' => '6',
                'tempatlahir' => 'Banten',
                'tanggallahir' => '1998-02-01',
                'telp' => '081234567890',
                'email' => 'Ahmad@example.com',
                'password' => bcrypt('member'),
            ]);
            $service->create($user1, 'member', 'member', false);
            $user1->meta->update([
                'is_active' => true,
            ]);

            $user2 = User::create([
                'nim' => '1167020001',
                'name' => 'Usup Alexander',
                'jurusan' => '2',
                'semester' => '6',
                'tempatlahir' => 'Bandung',
                'tanggallahir' => '1998-06-05',
                'telp' => '083856741123',
                'email' => 'Ilham@example.com',
                'password' => bcrypt('member'),
            ]);
            $service->create($user2, 'member', 'member', false);
            $user2->meta->update([
                'is_active' => true,
            ]);

            

        }

        

    }
}
