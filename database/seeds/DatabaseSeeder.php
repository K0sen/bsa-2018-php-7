<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Entity\User::class, 10)->create()->each(function ($u) {
            $u->wallets()->save(factory(App\Entity\Wallet::class)->make());
        });
    }
}
