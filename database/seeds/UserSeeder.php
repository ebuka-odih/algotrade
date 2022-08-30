<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::where('email', '=', 'user@algo-trade.co')->first();
        if($admin === null){
            DB::table('users')->insert([
                'name' => 'User Acct',
                'status' => 1,
                'username' =>'user',
                'admin' => 0,
                'email' => 'user@algo-trade.co',
                'email_verified_at' => \Carbon\Carbon::now(),
                'password' => Hash::make('Userd123Admin'),

            ]);

        }
    }
}
