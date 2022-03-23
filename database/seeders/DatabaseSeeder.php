<?php

namespace Database\Seeders;

use App\Models\Config;
use App\Models\User;
use Faker\Factory;
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
        $this->call([VoyagerDatabaseSeeder::class]);
        $this->seedUsers();
        $this->seedConfig();
    }

    private function seedUsers()
    {
        $su = new User([
            'email' => 'developer@admin.com',
            'password' => bcrypt('AdminPassword'),
            'name' => 'Developer',
            'email_verified_at' => now(),
        ]);
        $su->save();
        $su->assignRole('admin');

        $user = new User([
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
            'name' => 'Administrator',
            'email_verified_at' => now(),
        ]);
        $user->save();
    }

    private function seedConfig()
    {
        $faker = Factory::create();
        Config::query()->insert([
            'title' => 'AppTitle',
            'description' => 'App Description',
            'about_us' => $faker->text,
            'about_us_picture' => $faker->url,
            'address' => $faker->address,
            'phone' => $faker->phoneNumber,
            'email' => $faker->email,
            'social_fb' => $faker->url,
            'social_in' => $faker->url,
            'social_yt' => $faker->url,
            'social_tw' => $faker->url,
        ]);
    }
}
