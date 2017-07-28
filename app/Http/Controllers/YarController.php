<?php
/**
 * Created by PhpStorm.
 * User: lihongwei
 * Date: 2017/3/8
 * Time: 16:11
 */

namespace App\Http\Controllers;

use  App\Http\Controllers\TestController;

class YarController
{
    public function handle()
    {

        $service = new \Yar_Server(new \App\Http\Controllers\TestController());

        $service->handle();
        //return false ;
    }

}

class ApiController
{

    /**
     * @param $uid
     * @return mixed
     */
    public function getUserInfo($uid)
    {
        echo json_encode(['id'=>1000]);
    }
}

