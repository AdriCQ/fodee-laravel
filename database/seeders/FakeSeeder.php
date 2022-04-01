<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Dish;
use App\Models\Event;
use Faker\Factory;
use Illuminate\Database\Seeder;

class FakeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call([DatabaseSeeder::class]);
        $this->seedComments();
        $this->seedDishes(10, 2);
        $this->seedEvents(8, 1);
    }
    /**
     * seedComments
     */
    private function seedComments(int $limit = 10, int $repeat = 1)
    {
        $faker = Factory::create();
        for ($i = 0; $i < $limit; $i++) {
            $data = [];
            for ($r = 0; $r < $repeat; $r++) {
                array_push($data, [
                    'email' => $faker->email,
                    'name' => $faker->name,
                    'message' => $faker->text,
                    'visible' => $faker->boolean
                ]);
            }
            Comment::query()->insert($data);
        }
    }
    /**
     * seedDishes
     */
    private function seedDishes(int $limit = 10, int $repeat = 1)
    {
        $faker = Factory::create();
        $cat = [];
        for ($c = 0; $c < 4; $c++) {
            array_push($cat, $faker->word);
        }

        for ($i = 0; $i < $limit; $i++) {
            $data = [];
            for ($r = 0; $r < $repeat; $r++) {
                array_push($data, [
                    'category' => $faker->randomElement($cat),
                    'name' => $faker->words(3, true),
                    'description' => $faker->text,
                    'sell_price' => $faker->randomFloat(2, 1, 100),
                    'feature' => $faker->boolean,
                    'image' => 'assets/images/res_img_5.jpg',
                ]);
            }
            Dish::query()->insert($data);
        }
    }

    /**
     * seedComments
     */
    private function seedEvents(int $limit = 10, int $repeat = 1)
    {
        $faker = Factory::create();
        for ($i = 0; $i < $limit; $i++) {
            $data = [];
            for ($r = 0; $r < $repeat; $r++) {
                array_push($data, [
                    'title' => $faker->words(3, true),
                    'date' => $faker->date(),
                    'description' => $faker->text(500),
                    'enable' => $faker->boolean
                ]);
            }
            Event::query()->insert($data);
        }
    }
}
