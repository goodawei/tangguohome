<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/2/8
 * Time: 17:25
 */

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use EasyWeChat\Foundation\Application;
use Config;

class SpecialtopicsController extends  Controller
{
    public function index()
    {
        $options = Config::get("wechat");
        $app = new Application($options);
        $js = $app->js;
        $shareImg= 'http://tangguohome.com/images/wx-share/share.jpg';
        return view('specialtopics.first-phase',['js'=>$js,'shareImg'=>$shareImg]);
    }
}