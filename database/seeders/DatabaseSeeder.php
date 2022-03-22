<?php

namespace Database\Seeders;

use App\Models\User;
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
}
