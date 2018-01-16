<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Test1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    //检测索引
    public function hasIndex($table, $name)
    {
        $conn = Schema::getConnection();
        $dbSchemaManager = $conn->getDoctrineSchemaManager();
        $doctrineTable = $dbSchemaManager->listTableDetails($table);
        return $doctrineTable->hasIndex($name);
    }

    public function up()
    {
        //如果当前数据中没有test1表则创建test1表
        if(!Schema::hasTable('test1')) {
            Schema::create('test1', function (Blueprint $table) {
                $table->increments("id");
//                $table->char("name");
                $table->timestamps();

            });
        }else{
            //如果表存在的话，调整表结构
            Schema::table('test1',function($table){
                //添加表字段
                if(!Schema::hasColumn('test1','email')){
                    $table->string('email');
                }
                if(!Schema::hasColumn('test1','age')){
                    $table->string('age')->default(10)->comment('年龄');
                }
//                $table->text('age')->change();



            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //相当于删除表
//        Schema::drop('test1');
    }
}
