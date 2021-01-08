<?php

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
        if (env('APP_ENV') == 'local') {
            DB::table('users')->insert([
                'name' => 'Admin',
                'email' => env('ADMIN_MAIL'),
                'password' => bcrypt(env('ADMIN_PASS')),
                'email_verified_at' => \Carbon\Carbon::now(),
                'admin' => true,
            ]);
        }


        foreach (config('types') as $key => $type) {
            factory(\App\Type::class)->create([
                'title' => $key,
                'desc' => $type['desc'],
                'image' => $type['image'],
                'big_image' => $type['big_image'],
            ]);
        }
    }
}
