<?php

namespace Database\Seeders;

use App\Models\Comment;
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
        $this->call([DatabaseSeeder::class]);
        $this->seedComments();
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
}
