<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        $ib = User::create([
            'name' => 'Ib',
			'email' => 'ib@ib.ib',
            'password' => bcrypt('12345'),
        ]);
        $ib->save();
		
        $john = User::create([
            'name' => 'john',
			'email' => 'john@doe.com',
            'password' => bcrypt('12345'),
        ]);
        $john->save();
    }
}
