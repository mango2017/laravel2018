<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * 统一执行
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(StudentTableSeeder::class);
        $this->class(article::class);
    }
}
