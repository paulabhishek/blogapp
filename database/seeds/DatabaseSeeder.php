<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
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
        Schema::disableForeignKeyConstraints();

        DB::table('users')->truncate();
        $this->call(UserSeeder::class);

        DB::table('posts')->truncate();
        $this->call(PostSeeder::class);

        DB::table('comments')->truncate();
        $this->call(CommentSeeder::class);

        Schema::enableForeignKeyConstraints();
    }
}
