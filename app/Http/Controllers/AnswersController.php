<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAnswerRequest;
use App\Repositories\AnswerRepository;
use Illuminate\Http\Request;
use Auth;

/**
 * Class AnswersController
 * @package App\Http\Controllers
 */
class AnswersController extends Controller
{
    protected $answer ;


    /**
     * AnswersController constructor.
     * @param AnswerRepository $answer
     */
    public function __construct(AnswerRepository $answer)
    {
        $this->answer = $answer;
    }


    public function store(StoreAnswerRequest $request ,$question)
    {
        $answer = $this->answer->create([
            'user_id'=>Auth::id(),
            'question_id'=>$question,
            'body'=>$request->get('body'),
        ]);
        $answer->question()->increment('answers_count');
        return back();
    }
}
