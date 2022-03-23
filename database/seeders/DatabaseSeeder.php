<?php

namespace Database\Seeders;

use App\Models\Config;
use App\Models\Image;
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
        $this->seedImages();
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
            // home
            'title' => 'AppTitle',
            'home_subtitle' => 'App Description',
            // about
            'about_us' => $faker->text,
            // 'about_us_image' => 'assets/images/res_img_2.jpg',
            // Menu
            'menu_subtitle' => $faker->text,
            // Evetns
            'events_subtitle' => $faker->text,
            // Reserv
            'reserv_subtitle' => $faker->text,
            // contact
            'address' => $faker->address,
            'phone' => $faker->phoneNumber,
            'email' => $faker->email,
            // Footer
            'social_fb' => $faker->url,
            'social_in' => $faker->url,
            'social_yt' => $faker->url,
            'social_tw' => $faker->url,
        ]);
    }
    /**
     * seedImages
     */
    private function seedImages()
    {
        Image::query()->insert([
            // Home Slider
            [
                'tag' => 'slider1',
                'path' => 'assets/images/slide_1.jpg'
            ],
            [
                'tag' => 'slider2',
                'path' => 'assets/images/slide_2.jpg'
            ],
            [
                'tag' => 'slider3',
                'path' => 'assets/images/slide_3.jpg'
            ],
            // About us
            [
                'tag' => 'about',
                'path' => 'assets/images/res_img_1.jpg'
            ],
            // Events
            [
                'tag' => 'events',
                'path' => 'assets/images/slide_2.jpg'
            ],
        ]);
    }
}
