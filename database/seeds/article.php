<?php

use Illuminate\Database\Seeder;

class article extends Seeder
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
        for($i=0;$i<30;$i++){
            $temp = [];
            $temp['title']=str_random(15);
            $temp['content'] = str_random(100);
            $temp['created_at'] = date('Y-m-d H:i:s');
            $temp['updated_at'] = date('Y-m-d H:i:s');
            $arr[] = $temp;
        }

        DB::table('articles')->insert($arr);
    }
}
