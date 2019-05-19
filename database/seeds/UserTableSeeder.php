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
                'name' => '1167010001',
                'email' => '1167010001@gmail.com',
                'password' => bcrypt('1167010001'),
            ]);

            $service->create($user, '1167010001', '1167010001', false);
            $user->meta->update([
                'is_active' => true,
            ]);

            $user2 = User::create([
                'name' => '1167010002',
                'email' => '1167010002@gmail.com',
                'password' => bcrypt('1187010002'),
            ]);
            $service->create($user2, '1167010002', '1167010002', false);
            $user2->meta->update([
                'is_active' => true,
            ]);

            $user3 = User::create([
                'name' => '1167020001',
                'email' => '1167020001@gmail.com',
                'password' => bcrypt('1167020001'),
            ]);
            $service->create($user3, '1167020001', '1167020001', false);
            $user3->meta->update([
                'is_active' => true,
            ]);

            $user4 = User::create([
                'name' => '1167020002',
                'email' => '1167020002@gmail.com',
                'password' => bcrypt('1167020002'),
            ]);
            $service->create($user4, '1167020002', '1167020002', false);
            $user4->meta->update([
                'is_active' => true,
            ]);

            $user5 = User::create([
                'name' => '1167030001',
                'email' => '1167030001@gmail.com',
                'password' => bcrypt('1167030001'),
            ]);
            $service->create($user5, '1167030001', '1167030001', false);
            $user5->meta->update([
                'is_active' => true,
            ]);

            $user6 = User::create([
                'name' => '1167030002',
                'email' => '1167030002@gmail.com',
                'password' => bcrypt('1167030002'),
            ]);
            $service->create($user6, '1167030002', '1167030002', false);
            $user6->meta->update([
                'is_active' => true,
            ]);

            $user7 = User::create([
                'name' => '1167040001',
                'email' => '1167040001@gmail.com',
                'password' => bcrypt('1167040001'),
            ]);
            $service->create($user7, '1167040001', '1167040001', false);
            $user7->meta->update([
                'is_active' => true,
            ]);

            $user8 = User::create([
                'name' => '1167040002',
                'email' => '1167040002@gmail.com',
                'password' => bcrypt('1167040002'),
            ]);
            $service->create($user8, '1167040002', '1167040002', false);
            $user8->meta->update([
                'is_active' => true,
            ]);

            $user9 = User::create([
                'name' => '1167050001',
                'email' => '1167050001@gmail.com',
                'password' => bcrypt('1167050001'),
            ]);
            $service->create($user9, '1167050001', '1167050001', false);
            $user9->meta->update([
                'is_active' => true,
            ]);

            $user10 = User::create([
                'name' => '1167050002',
                'email' => '1167050002@gmail.com',
                'password' => bcrypt('1167050002'),
            ]);
            $service->create($user10, '1167050002', '1167050002', false);
            $user10->meta->update([
                'is_active' => true,
            ]);

            $user11 = User::create([
                'name' => '1167060001',
                'email' => '1167060001@gmail.com',
                'password' => bcrypt('1167060001'),
            ]);
            $service->create($user11, '1167060001', '1167060001', false);
            $user11->meta->update([
                'is_active' => true,
            ]);

            $user12 = User::create([
                'name' => '1167060002',
                'email' => '1167060002@gmail.com',
                'password' => bcrypt('1167060002'),
            ]);
            $service->create($user12, '1167060002', '1167060002', false);
            $user12->meta->update([
                'is_active' => true,
            ]);

             $user13 = User::create([
                'name' => '1177010001',
                'email' => '1177010001@gmail.com',
                'password' => bcrypt('1177010001'),
            ]);

            $service->create($user13, '1177010001', '1177010001', false);
            $user13->meta->update([
                'is_active' => true,
            ]);

            $user14 = User::create([
                'name' => '1177010002',
                'email' => '1177010002@gmail.com',
                'password' => bcrypt('1177010002'),
            ]);
            $service->create($user14, '1177010002', '1177010002', false);
            $user14->meta->update([
                'is_active' => true,
            ]);

            $user15 = User::create([
                'name' => '1177020001',
                'email' => '1177020001@gmail.com',
                'password' => bcrypt('1177020001'),
            ]);
            $service->create($user15, '1177020001', '1177020001', false);
            $user15->meta->update([
                'is_active' => true,
            ]);

            $user16 = User::create([
                'name' => '1177020002',
                'email' => '1177020002@gmail.com',
                'password' => bcrypt('1177020002'),
            ]);
            $service->create($user16, '1177020002', '1177020002', false);
            $user16->meta->update([
                'is_active' => true,
            ]);

            $user17 = User::create([
                'name' => '1177030001',
                'email' => '1177030001@gmail.com',
                'password' => bcrypt('1177030001'),
            ]);
            $service->create($user17, '1177030001', '1177030001', false);
            $user17->meta->update([
                'is_active' => true,
            ]);

            $user18 = User::create([
                'name' => '1177030002',
                'email' => '1177030002@gmail.com',
                'password' => bcrypt('1177030002'),
            ]);
            $service->create($user18, '1177030002', '1177030002', false);
            $user18->meta->update([
                'is_active' => true,
            ]);

            $user19 = User::create([
                'name' => '1177040001',
                'email' => '1177040001@gmail.com',
                'password' => bcrypt('1177040001'),
            ]);
            $service->create($user19, '1177040001', '1177040001', false);
            $user19->meta->update([
                'is_active' => true,
            ]);

            $user20 = User::create([
                'name' => '1177040002',
                'email' => '1177040002@gmail.com',
                'password' => bcrypt('1177040002'),
            ]);
            $service->create($user20, '1177040002', '1177040002', false);
            $user20->meta->update([
                'is_active' => true,
            ]);

            $user21 = User::create([
                'name' => '1177050001',
                'email' => '1177050001@gmail.com',
                'password' => bcrypt('1177050001'),
            ]);
            $service->create($user21, '1177050001', '1177050001', false);
            $user21->meta->update([
                'is_active' => true,
            ]);

            $user22 = User::create([
                'name' => '1177050002',
                'email' => '1177050002@gmail.com',
                'password' => bcrypt('1177050002'),
            ]);
            $service->create($user22, '1177050002', '1177050002', false);
            $user22->meta->update([
                'is_active' => true,
            ]);

            $user23 = User::create([
                'name' => '1177060001',
                'email' => '1177060001@gmail.com',
                'password' => bcrypt('1177060001'),
            ]);
            $service->create($user23, '1177060001', '1177060001', false);
            $user23->meta->update([
                'is_active' => true,
            ]);

            $user24 = User::create([
                'name' => '1177060002',
                'email' => '1177060002@gmail.com',
                'password' => bcrypt('1177060002'),
            ]);
            $service->create($user24, '1177060002', '1177060002', false);
            $user24->meta->update([
                'is_active' => true,
            ]);

            //Angkatan 2018
             $user25 = User::create([
                'name' => '1187010001',
                'email' => '1187010001@gmail.com',
                'password' => bcrypt('1187010001'),
            ]);

            $service->create($user25, '1187010001', '1187010001', false);
            $user25->meta->update([
                'is_active' => true,
            ]);

            $user26 = User::create([
                'name' => '1187010002',
                'email' => '1187010002@gmail.com',
                'password' => bcrypt('1187010002'),
            ]);
            $service->create($user26, '1187010002', '1187010002', false);
            $user26->meta->update([
                'is_active' => true,
            ]);

            $user27 = User::create([
                'name' => '1187020001',
                'email' => '1187020001@gmail.com',
                'password' => bcrypt('1187020001'),
            ]);
            $service->create($user27, '1187020001', '1187020001', false);
            $user27->meta->update([
                'is_active' => true,
            ]);

            $user28 = User::create([
                'name' => '1187020002',
                'email' => '1187020002@gmail.com',
                'password' => bcrypt('1187020002'),
            ]);
            $service->create($user28, '1187020002', '1187020002', false);
            $user28->meta->update([
                'is_active' => true,
            ]);

            $user29 = User::create([
                'name' => '1187030001',
                'email' => '1187030001@gmail.com',
                'password' => bcrypt('1187030001'),
            ]);
            $service->create($user29, '1187030001', '1187030001', false);
            $user29->meta->update([
                'is_active' => true,
            ]);

            $user30 = User::create([
                'name' => '1187030002',
                'email' => '1187030002@gmail.com',
                'password' => bcrypt('1187030002'),
            ]);
            $service->create($user30, '1187030002', '1187030002', false);
            $user30->meta->update([
                'is_active' => true,
            ]);

            $user31 = User::create([
                'name' => '1187040001',
                'email' => '1187040001@gmail.com',
                'password' => bcrypt('1187040001'),
            ]);
            $service->create($user31, '1187040001', '1187040001', false);
            $user31->meta->update([
                'is_active' => true,
            ]);

            $user32 = User::create([
                'name' => '1187040002',
                'email' => '1187040002@gmail.com',
                'password' => bcrypt('1187040002'),
            ]);
            $service->create($user32, '1187040002', '1187040002', false);
            $user32->meta->update([
                'is_active' => true,
            ]);

            $user33 = User::create([
                'name' => '1187050001',
                'email' => '1187050001@gmail.com',
                'password' => bcrypt('1187050001'),
            ]);
            $service->create($user33, '1187050001', '1187050001', false);
            $user33->meta->update([
                'is_active' => true,
            ]);

            $user34 = User::create([
                'name' => '1187050002',
                'email' => '1187050002@gmail.com',
                'password' => bcrypt('1187050002'),
            ]);
            $service->create($user34, '1187050002', '1187050002', false);
            $user34->meta->update([
                'is_active' => true,
            ]);

            $user35 = User::create([
                'name' => '1187060001',
                'email' => '1187060001@gmail.com',
                'password' => bcrypt('1187060001'),
            ]);
            $service->create($user35, '1187060001', '1187060001', false);
            $user35->meta->update([
                'is_active' => true,
            ]);

            $user36 = User::create([
                'name' => '1187060002',
                'email' => '1187060002@gmail.com',
                'password' => bcrypt('1187060002'),
            ]);
            $service->create($user36, '1187060002', '1187060002', false);
            $user36->meta->update([
                'is_active' => true,
            ]);

            $user37 = User::create([
                'name' => '1167070001',
                'email' => '1167070001@gmail.com',
                'password' => bcrypt('1167070001'),
            ]);
            $service->create($user37, '1167070001', '1167070001', false);
            $user37->meta->update([
                'is_active' => true,
            ]);

            $user38 = User::create([
                'name' => '1167070002',
                'email' => '1167070002@gmail.com',
                'password' => bcrypt('1167070002'),
            ]);
            $service->create($user36, '1167070002', '1167070002', false);
            $user38->meta->update([
                'is_active' => true,
            ]);

            $user39 = User::create([
                'name' => '1177070001',
                'email' => '1177070001@gmail.com',
                'password' => bcrypt('1177070001'),
            ]);
            $service->create($user39, '1177070001', '1177070001', false);
            $user39->meta->update([
                'is_active' => true,
            ]);

            $user40 = User::create([
                'name' => '1177070002',
                'email' => '1177070002@gmail.com',
                'password' => bcrypt('1177070002'),
            ]);
            $service->create($user40, '1177070002', '1177070002', false);
            $user40->meta->update([
                'is_active' => true,
            ]);

            $user41 = User::create([
                'name' => '1187070001',
                'email' => '1187070001@gmail.com',
                'password' => bcrypt('1187070001'),
            ]);
            $service->create($user41, '1187070001', '1187070001', false);
            $user41->meta->update([
                'is_active' => true,
            ]);

            $user42 = User::create([
                'name' => '1187070002',
                'email' => '1187070002@gmail.com',
                'password' => bcrypt('1187070002'),
            ]);
            $service->create($user42, '1187070002', '1187070002', false);
            $user42->meta->update([
                'is_active' => true,
            ]);

        }

        

    }
}
