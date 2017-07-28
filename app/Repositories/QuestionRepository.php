<?php
/**
 * Created by PhpStorm.
 * User: lihongwei
 * Date: 16/12/25
 * Time: 下午8:14
 */

namespace App\Repositories;


use App\Question;
use App\Topic;

class QuestionRepository
{
    /**
     * @return mixed
     */
    public function getQuestions(){
        return Question::show()->latest('updated_at')->with('user')->get();
    }

    /**
     * 推荐并且展示的
     * @return mixed
     */
    public function getQuestionWithRecom()
    {
        return Question::show()->recommend()->latest('updated_at')->with('user')->take(3)->get();
    }

    /**
     * @param $id
     * @return mixed
     */
    public function byIdWithTopicAndAnswers($id){
        return Question::where(['id'=>$id])->with(['topics','answers','followers'])->first();
    }


    /**
     * @param array $attributes
     * @return static
     */
    public function create(array $attributes){
        return Question::create($attributes);
    }

    /**
     * @param array $topics
     * @return array
     */
    public function filterAttribute(array $topics){
        return collect($topics)->map(function($topic){
            if(is_numeric($topic)){
                Topic::find($topic)->increment('questions_count');
                return (int) $topic;
            }
            $topisObj = Topic::create(['name'=>$topic,'questions_count'=>1]);
            return $topisObj->id ;
        })->toArray();
    }


    /**
     * @param $id
     * @return mixed
     */
    public function byId($id){
        return Question::find($id);
    }
}