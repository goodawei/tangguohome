<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable=['title','body','user_id'];

    public function topics(){
        //关联表可以自定义
        //return $this->belongsToMany(Topic::class,'your table name')->withTimestamps();
        return $this->belongsToMany(Topic::class)->withTimestamps();
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }

    public function followers()
    {
        return $this->belongsToMany(User::class,'user_question')->withTimestamps();
    }

    //展示条件为F的
    public function scopeShow($query){
        return $query->where('is_hidden','F');
    }

    public function scopeRecommend($query)
    {
        return $query->where('is_recommend','Y');
    }
}
