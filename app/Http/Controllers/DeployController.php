<?php
/**
 * Created by PhpStorm.
 * User: lihongwei
 * Date: 16/10/17
 * Time: 下午1:46
 */

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DeployController extends Controller
{

    public function deploy(Request $request){
        $token    = 'ffanfood-zhihu';
        $target   = '/var/www/ffanfood/zhihu'; // 生产环境web目录
        $wwwUser  = 'www-data';
        $wwwGroup = 'www-data';
        $json = json_decode(file_get_contents('php://input'),true);
        if(empty($json['token']) || $json['token'] !== $token){
            exit('error_request');
        }
        file_put_contents('deploy.log',var_export($json,true),FILE_APPEND);
        $cmds = array(
            "cd $target && git pull",
            "chown -R {$wwwUser}:{$wwwGroup} $target/",
        );
        foreach ($cmds as $cmd) {
            shell_exec($cmd);
        }
    }
}