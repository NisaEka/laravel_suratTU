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
                'email' => 'admin@example.com',
                'password' => bcrypt('admin'),
            ]);

            $service->create($user, 'admin', 'admin', false);
            $user->meta->update([
                'is_active' => true,
            ]);

            $user2 = User::create([
                'name' => 'Ahmad',
                'email' => 'ahmad@example.com',
                'password' => bcrypt('member'),
            ]);
            $service->create($user2, 'member', 'member', false);
            $user2->meta->update([
                'is_active' => true,
            ]);

            $user3 = User::create([
                'name' => 'Adi',
                'email' => 'adi@example.com',
                'password' => bcrypt('member'),
            ]);
            $service->create($user3, 'member', 'member', false);
            $user3->meta->update([
                'is_active' => true,
            ]);
        }

        

    }
}
