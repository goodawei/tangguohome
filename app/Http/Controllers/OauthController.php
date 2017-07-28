<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OauthController extends Controller
{
    /**
     * 转向糖果授权服务器
     * 重定向前提条件：
     * 1 提交回调地址 (授权服务器会记录，并下发 client_id 等)
     * 如果 redirect_uri 和 提交的 回调必须一致
     * 2 申请 糖果 client_id 和 secret , 授权服务器地址
     */
    public function goTanguoServer()
    {
        return redirect('http://oauth.dev/oauth/authorize?client_id=k5TcACKeczDS6yL1ViEmeoEk8HxFBeRVTPW5lk&redirect_uri=http://zhihu.dev/getCode&response_type=code&state=lhwandcxx&scope=scopeCKeczDS6yL1ViEmeoEk8HxFBeRVTPW5lk,scope2CKeczDS6yL1ViEmeoEk8HxFBeRVTPW5l');
        return redirect('http://ident.jbw666.com/oauth/authorize?client_id=4mTcACKeczDS6yL1ViEmeoEt4HxFBeRVTPWgwT&redirect_uri=http://zhihu.dev/getCode&response_type=code');
    }

    /**
     * 接收授权服务器code
     * 并申请访问token
     * 前提条件 ： 获取授权服务器访问token 地址
     */
    public function receiveCode(Request $request)
    {
        $code = $request->get('code');
        $stat = $request->get('state');
        $serverUrl = 'http://oauth.dev/oauth/access_token';
        $postData = [
            'client_id'=>'k5TcACKeczDS6yL1ViEmeoEk8HxFBeRVTPW5lk',
            'client_secret'=>'kj52m3jls8M8rezEE0JgjWVkPDbW0QQU68jyh6',
            'grant_type'=>'authorization_code',
            'redirect_uri'=>'http://zhihu.dev/getCode', //保存授权服务器的 回调地址
            'code'=>$code,
        ];
        $ret = $this->sendPostData($serverUrl,$postData);
        //根据同意 或者 拒绝 封装业务
        $data = json_decode($ret,true);

        //用得到的access_token 访问资源 ,此处可以将 access_token ,和获取到的用户信息 保存下来 ，进行后续的业务调用，如果 access_token 过期在重新授权
        $userInfo = $this->getUserInfo($data['access_token']);
        dd($userInfo);
    }

    /**
     * 获取用户数据
     *
     * 前提条件 接口地址
     */
    public function getUserInfo($access_token)
    {
        $postData = [
            'access_token'=>$access_token
        ];
        //资源接口地址
        $apiUrl = 'http://oauth.dev/usercenter/userinfo';
        $ret = $this->sendPostData($apiUrl,$postData);
        $d = json_decode($ret,true);
        dd($d);
    }

    /**
     *application/x-www-form-urlencoded 发送数据请求
     */
    public function sendPostData($serverUrl,$postData=[])
    {
        $postData = http_build_query($postData);
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $serverUrl);
        curl_setopt($curl, CURLOPT_USERAGENT,'Opera/9.80 (Windows NT 6.2; Win64; x64) Presto/2.12.388 Version/12.15');
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); // stop verifying certificate
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));
        curl_setopt($curl, CURLOPT_POSTFIELDS, $postData);
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
        $r = curl_exec($curl);
        curl_close($curl);
        return $r ;
    }
}
