<?php

use Illuminate\Database\Seeder;

class FakeDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        App\User::create([
            'first_name' => 'Test',
            'last_name' =>  'User',
            'email' => 'user@test.com',
            'password' => bcrypt('123456'),
        ]);

        for ($i=0; $i < 10; $i++) {
            $user = App\User::create([
            	'first_name' => $faker->firstName,
            	'last_name' =>  $faker->lastName,
            	'email' =>  $faker->unique()->freeEmail,
            	'password' => bcrypt('123456'),
            ]);
        }

        for ($i=0; $i < 20; $i++) {
            $product = App\Product::create([
            	'name' => ucfirst($faker->word),
            	'description' => $faker->text,
            	'price' =>  $faker->randomFloat(2, $min = 1, 25000),
            	'stock' => $faker->numberBetween(1,50),
            ]);
        }
    }
}
