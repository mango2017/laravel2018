<?php

use Illuminate\Database\Seeder;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('student')->insert([
          [ 'name'=>'jlty007','age'=>27],
          ['name'=>'jlty008', 'age'=>28]
        ]);
    }
}
