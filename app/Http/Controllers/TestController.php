<?php
/**
 * Created by PhpStorm.
 * User: lihongwei
 * Date: 16/10/24
 * Time: 上午11:21
 */

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class TestController extends  Controller
{

    public function test(){
        $arr = [
            ['id'    => 1, 'price' => 100,],
            ['id'    => 2, 'price' => 101,]
        ];

        $data = collect($arr)->map(function($item){
            return $item['price'];
        });

        dd($data);
    }

    public function media(){
        return view('media.clamedia');
    }

    public function yar()
    {
        phpinfo();
    }

    public function getUserInfo($uid)
    {
       return 'fdfsssssssssssss';
    }
}