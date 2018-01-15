<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class GoodsController extends Controller
{
    //商品的添加页面
    public function getAdd(){
        return view('goods.add');
    }

    //商品显示
    public function getShow(){
        echo "这里是商品的显示操作";
    }


    //插入商品
    public function postInsert(){
        echo "这里是商品的插入操作";
    }


}
