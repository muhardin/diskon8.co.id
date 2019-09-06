<?php

use Illuminate\Database\Seeder;

class BankAccountsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\BankAccount::insert([
            'bank_name' => 'BCA',
            'bank_account_name' => 'PT ABCGS',
            'bank_account_number' => '76666699',
            'status' => 'active',
        ]);

        \App\BankAccount::insert([
            'bank_name' => 'BNI',
            'bank_account_name' => 'PT ABCGS',
            'bank_account_number' => '00008838833',
            'status' => 'active',
        ]);
    }
}
