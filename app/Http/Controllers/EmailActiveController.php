<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;

class EmailActiveController extends Controller
{

    public function verify($token)
    {

        $user = User::where(['confirm_token' => $token])->first();
        if (is_null($user)) {
            flash('邮箱验证失败!','danger');
            return redirect('/');
        }
        $user->is_active_email = 1 ;
        $user->confirm_token = str_random(40);
        $user->save();
        Auth::login($user);
        flash('邮箱验证成功!','success');
        return redirect('/') ;

    }
}
