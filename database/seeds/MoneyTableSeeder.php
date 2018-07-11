<?php

use Illuminate\Database\Seeder;

class MoneyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $wallets = App\Entity\Wallet::all();
        foreach ($wallets as $wallet) {
            factory(App\Entity\Money::class)->create(['wallet_id' => $wallet->id]);
        }
    }
}
