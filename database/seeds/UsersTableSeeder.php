<?php
require_once 'vendor/fzaninotto/faker/src/autoload.php';

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        $faker = Faker\Factory::create('ja_JP');
      for ($i = 0; $i < 10; $i++) {
          ¥App¥User::create([
            'name' => $faker->name . "\n",
            'email' => $faker->email . "\n",
            'password' => $faker->password . "\n",
          ]);
          }
    }
}
