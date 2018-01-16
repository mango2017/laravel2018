<?php

use Illuminate\Database\Seeder;

class user extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $arr = [];
        for($i=0;$i<20;$i++){
            $temp = [];
            $temp['name']="fdfdsf";
            $temp['email'] = "12100@qq.com";
            $temp['age'] = str_random(2);
            $temp['created_at'] = date('Y-m-d H:i:s',time());
            $temp['updated_at'] = date('Y-m-d H:i:s',time());
            $arr[] = $temp;
        }

        DB::table('test1')->insert($arr);
    }
}
