<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Mail;
use Naux\Mail\SendCloudTemplate;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','avatar','confirm_token','settings','questions_count','comments_count','likes_count','followers_count','followings_count'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * 覆盖 Notifiable trait 中的方法重写发送短信服务
     * @param string $token
     */
    public function sendPasswordResetNotification($token)
    {
        $bind_data = [
            'url' => url('password/reset', $token),
        ];
        $template = new SendCloudTemplate('ffanfood_reset_password', $bind_data);

        Mail::raw($template, function ($message) {
            $message->from('bjletaoba@126.com', '飞凡food');
            $message->to($this->email);
        });
    }

    /**
     * @param $question
     * @return bool
     */
    public function owns($question){
        return $this->id == $question->user_id;
    }

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }


//    public function follows($question)
//    {
//        return Follow::create([
//            'question_id'=>$question,
//            'user_id'=>$this->id,
//        ]);
//    }

    public function follows()
    {
        return $this->belongsToMany(Question::class,'user_question')->withTimestamps();
    }

    public function followThis($question)
    {
        return $this->follows()->toggle($question);
    }

    public function followed($question)
    {
        return !! $this->follows()->where('question_id',$question)->count();
    }
}
