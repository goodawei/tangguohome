<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Illuminate\Support\Facades\Mail;
use Naux\Mail\SendCloudTemplate;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * RegisterController constructor.
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'avatar' => '/images/avatar/avatar-'.mt_rand(0,3).'.jpg',
            'confirm_token' => str_random(40),
            'settings'=>json_encode($data),
            'password' => bcrypt($data['password']),
        ]);

        $this->sendVerifyEmail($user);

        return $user ;
    }

    /**
     * @param $user
     */
    private function sendVerifyEmail($user){

        $bind_data = [
            'url' => route('email.verify',['token'=>$user->confirm_token]),
            'name'=>$user->name
        ];
        $template = new SendCloudTemplate('zhihu_register_template', $bind_data);

        Mail::raw($template, function ($message) use ($user) {
            $message->from('bjletaoba@126.com', '飞凡food');
            $message->to($user->email);
        });
    }
}
