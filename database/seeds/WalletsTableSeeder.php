<?php

use Illuminate\Database\Seeder;

class WalletsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = App\Entity\User::all();
        foreach ($users as $user) {
            factory(App\Entity\Wallet::class)->create(['user_id' => $user->id]);
        }
    }
}
