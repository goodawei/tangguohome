<?php
/**
 * Created by PhpStorm.
 * User: lihongwei
 * Date: 17/1/7
 * Time: 下午9:55
 */

namespace App\Repositories;


use App\Answer;

class AnswerRepository
{
    /**
     * @param array $attributes
     * @return static
     */
    public function create(array $attributes){
        return Answer::create($attributes);
    }
}