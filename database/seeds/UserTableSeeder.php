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
                'name' => 'Ahmad',
                'email' => 'Ahmad@example.com',
                'password' => bcrypt('member'),
            ]);

            $service->create($user1, 'member', 'member', false);
            $user1->meta->update([
                'is_active' => true,
            ]);

            $user2 = User::create([
                'name' => 'Ilham',
                'email' => 'Ilham@example.com',+
                'password' => bcrypt('member'),
            ]);
            $service->create($user2, 'member', 'member', false);
            $user2->meta->update([
                'is_active' => true,
            ]);

            $user3 = User::create([
                'name' => 'Usup',
                'email' => 'Usup@example.com',
                'password' => bcrypt('member'),
            ]);
            $service->create($user3, 'member', 'member', false);
            $user3->meta->update([
                'is_active' => true,
            ]);

            $user4 = User::create([
                'name' => 'Elang',
                'email' => 'Elang@example.com',
                'password' => bcrypt('member'),
            ]);
            $service->create($user4, 'member', 'member', false);
            $user4->meta->update([
                'is_active' => true,
            ]);

            $user5 = User::create([
                'name' => 'Orlanda',
                'email' => 'Orlanda@example.com',
                'password' => bcrypt('member'),
            ]);
            $service->create($user5, 'member', 'member', false);
            $user5->meta->update([
                'is_active' => true,
            ]);

            $user6 = User::create([
                'name' => 'Syafina',
                'email' => 'Syafina@example.com',
                'password' => bcrypt('member'),
            ]);
            $service->create($user6, 'member', 'member', false);
            $user6->meta->update([
                'is_active' => true,
            ]);

            $user7 = User::create([
                'name' => 'Alika',
                'email' => 'Alika@example.com',
                'password' => bcrypt('member'),
            ]);
            $service->create($user7, 'member', 'member', false);
            $user7->meta->update([
                'is_active' => true,
            ]);

            $user8 = User::create([
                'name' => 'Imron',
                'email' => 'Imron@example.com',
                'password' => bcrypt('member'),
            ]);
            $service->create($user8, 'member', 'member', false);
            $user8->meta->update([
                'is_active' => true,
            ]);

            $user9 = User::create([
                'name' => 'Uki',
                'email' => 'Uki@example.com',
                'password' => bcrypt('member'),
            ]);
            $service->create($user9, 'member', 'member', false);
            $user9->meta->update([
                'is_active' => true,
            ]);

            $user10 = User::create([
                'name' => 'El',
                'email' => 'El@example.com',
                'password' => bcrypt('member'),
            ]);
            $service->create($user10, 'member', 'member', false);
            $user10->meta->update([
                'is_active' => true,
            ]);

            $user11 = User::create([
                'name' => 'Oriza',
                'email' => 'Oriza@example.com',
                'password' => bcrypt('member'),
            ]);
            $service->create($user11, 'member', 'member', false);
            $user11->meta->update([
                'is_active' => true,
            ]);

            $user12 = User::create([
                'name' => 'Syafrudin',
                'email' => 'Syafrudin@example.com',
                'password' => bcrypt('member'),
            ]);
            $service->create($user12, 'member', 'member', false);
            $user12->meta->update([
                'is_active' => true,
            ]);

             $user13 = User::create([
                'name' => 'Alan',
                'email' => 'Alan@example.com',
                'password' => bcrypt('member'),
            ]);

            $service->create($user13, 'member', 'member', false);
            $user13->meta->update([
                'is_active' => true,
            ]);

            $user14 = User::create([
                'name' => 'Irfanudin',
                'email' => 'Irfanudin@example.com',
                'password' => bcrypt('member'),
            ]);
            $service->create($user14, 'member', 'member', false);
            $user14->meta->update([
                'is_active' => true,
            ]);

            $user15 = User::create([
                'name' => 'Ulandari',
                'email' => 'Ulandari@example.com',
                'password' => bcrypt('member'),
            ]);
            $service->create($user15, 'member', 'member', false);
            $user15->meta->update([
                'is_active' => true,
            ]);

            $user16 = User::create([
                'name' => 'Ersa',
                'email' => 'Ersa@example.com',
                'password' => bcrypt('member'),
            ]);
            $service->create($user16, 'member', 'member', false);
            $user16->meta->update([
                'is_active' => true,
            ]);

            $user17 = User::create([
                'name' => 'Omasi',
                'email' => 'Omasi@example.com',
                'password' => bcrypt('member'),
            ]);
            $service->create($user17, 'member', 'member', false);
            $user17->meta->update([
                'is_active' => true,
            ]);

            $user18 = User::create([
                'name' => 'Soleh',
                'email' => 'Soleh@example.com',
                'password' => bcrypt('member'),
            ]);
            $service->create($user18, 'member', 'member', false);
            $user18->meta->update([
                'is_active' => true,
            ]);

            $user19 = User::create([
                'name' => 'Akbar',
                'email' => 'Akbar@example.com',
                'password' => bcrypt('member'),
            ]);
            $service->create($user19, 'member', 'member', false);
            $user19->meta->update([
                'is_active' => true,
            ]);

            $user20 = User::create([
                'name' => 'Itek',
                'email' => 'Itek@example.com',
                'password' => bcrypt('member'),
            ]);
            $service->create($user20, 'member', 'member', false);
            $user20->meta->update([
                'is_active' => true,
            ]);

            $user21 = User::create([
                'name' => 'Uca',
                'email' => 'Uca@example.com',
                'password' => bcrypt('member'),
            ]);
            $service->create($user21, 'member', 'member', false);
            $user21->meta->update([
                'is_active' => true,
            ]);

            $user22 = User::create([
                'name' => 'Ega',
                'email' => 'Ega@example.com',
                'password' => bcrypt('member'),
            ]);
            $service->create($user22, 'member', 'member', false);
            $user22->meta->update([
                'is_active' => true,
            ]);

            $user23 = User::create([
                'name' => 'Ozi',
                'email' => 'Ozi@example.com',
                'password' => bcrypt('member'),
            ]);
            $service->create($user23, 'member', 'member', false);
            $user23->meta->update([
                'is_active' => true,
            ]);

            $user24 = User::create([
                'name' => 'Sapri',
                'email' => 'Sapri@example.com',
                'password' => bcrypt('member'),
            ]);
            $service->create($user24, 'member', 'member', false);
            $user24->meta->update([
                'is_active' => true,
            ]);

            //Angkatan 2018
             $user25 = User::create([
                'name' => 'Alamnash',
                'email' => 'Alamnash@example.com',
                'password' => bcrypt('member'),
            ]);

            $service->create($user25, 'member', 'member', false);
            $user25->meta->update([
                'is_active' => true,
            ]);

            $user26 = User::create([
                'name' => 'Ikrar',
                'email' => 'Ikrar@example.com',
                'password' => bcrypt('member'),
            ]);
            $service->create($user26, 'member', 'member', false);
            $user26->meta->update([
                'is_active' => true,
            ]);

            $user27 = User::create([
                'name' => 'Utsman',
                'email' => 'Utsman@example.com',
                'password' => bcrypt('member'),
            ]);
            $service->create($user27, 'member', 'member', false);
            $user27->meta->update([
                'is_active' => true,
            ]);

            $user28 = User::create([
                'name' => 'Erman',
                'email' => 'Erman@example.com',
                'password' => bcrypt('member'),
            ]);
            $service->create($user28, 'member', 'member', false);
            $user28->meta->update([
                'is_active' => true,
            ]);

            $user29 = User::create([
                'name' => 'Oki',
                'email' => 'Oki@example.com',
                'password' => bcrypt('member'),
            ]);
            $service->create($user29, 'member', 'member', false);
            $user29->meta->update([
                'is_active' => true,
            ]);

            $user30 = User::create([
                'name' => 'Syafira',
                'email' => 'Syafira@example.com',
                'password' => bcrypt('member'),
            ]);
            $service->create($user30, 'member', 'member', false);
            $user30->meta->update([
                'is_active' => true,
            ]);

            $user31 = User::create([
                'name' => 'Alkautsar',
                'email' => 'Alkautsar@example.com',
                'password' => bcrypt('member'),
            ]);
            $service->create($user31, 'member', 'member', false);
            $user31->meta->update([
                'is_active' => true,
            ]);

            $user32 = User::create([
                'name' => 'Ibrahim',
                'email' => 'Ibrahim@example.com',
                'password' => bcrypt('member'),
            ]);
            $service->create($user32, 'member', 'member', false);
            $user32->meta->update([
                'is_active' => true,
            ]);

            $user33 = User::create([
                'name' => 'Ubbanusyah',
                'email' => 'Ubbanusyah@example.com',
                'password' => bcrypt('member'),
            ]);
            $service->create($user33, 'member', 'member', false);
            $user33->meta->update([
                'is_active' => true,
            ]);

            $user34 = User::create([
                'name' => 'Eka',
                'email' => 'Eka@example.com',
                'password' => bcrypt('member'),
            ]);
            $service->create($user34, 'member', 'member', false);
            $user34->meta->update([
                'is_active' => true,
            ]);

            $user35 = User::create([
                'name' => 'Ola',
                'email' => 'Ola@example.com',
                'password' => bcrypt('member'),
            ]);
            $service->create($user35, 'member', 'member', false);
            $user35->meta->update([
                'is_active' => true,
            ]);

            $user36 = User::create([
                'name' => 'Syakir',
                'email' => 'Syakir@example.com',
                'password' => bcrypt('member'),
            ]);
            $service->create($user36, 'member', 'member', false);
            $user36->meta->update([
                'is_active' => true,
            ]);

            $user37 = User::create([
                'name' => 'Jessica',
                'email' => 'Jessica@example.com',
                'password' => bcrypt('member'),
            ]);
            $service->create($user37, 'member', 'member', false);
            $user37->meta->update([
                'is_active' => true,
            ]);

            $user38 = User::create([
                'name' => 'Aihara',
                'email' => 'Aihara@example.com',
                'password' => bcrypt('member'),
            ]);
            $service->create($user36, 'member', 'member', false);
            $user38->meta->update([
                'is_active' => true,
            ]);

            $user39 = User::create([
                'name' => 'Resti',
                'email' => 'Resti@example.com',
                'password' => bcrypt('member'),
            ]);
            $service->create($user39, 'member', 'member', false);
            $user39->meta->update([
                'is_active' => true,
            ]);

            $user40 = User::create([
                'name' => 'Jung',
                'email' => 'Jung@example.com',
                'password' => bcrypt('member'),
            ]);
            $service->create($user40, 'member', 'member', false);
            $user40->meta->update([
                'is_active' => true,
            ]);

            $user41 = User::create([
                'name' => 'Darren',
                'email' => 'Darren@example.com',
                'password' => bcrypt('member'),
            ]);
            $service->create($user41, 'member', 'member', false);
            $user41->meta->update([
                'is_active' => true,
            ]);

            $user42 = User::create([
                'name' => 'Kento',
                'email' => 'Kento@example.com',
                'password' => bcrypt('member'),
            ]);
            $service->create($user42, 'member', 'member', false);
            $user42->meta->update([
                'is_active' => true,
            ]);

        }

        

    }
}
