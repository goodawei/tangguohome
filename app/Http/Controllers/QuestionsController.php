<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreQuestionRequest;
use App\Repositories\QuestionRepository;
use Illuminate\Http\Request;
use Auth;
use Alert;

class QuestionsController extends Controller
{
    protected $questionRepository ;

    public function __construct(QuestionRepository $questionRepository)
    {
        $this->questionRepository = $questionRepository;
        $this->middleware('auth')->except(['index','show']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions = $this->questionRepository->getQuestions();

        $recomond = $this->questionRepository->getQuestionWithRecom();

        return view('questions.indext',compact('questions','recomond'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('questions.make');
    }

    /**
     * @param StoreQuestionRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreQuestionRequest $request)
    {
        //$rule = ['title'=>'required|min:6|max:200', 'body'=>'required|min:20'];
        //$errMessage = ['title.required' =>'标题不能为空'];
        //$this->validate($request,$rule,$errMessage);
        if(!empty($request->get('topics'))){
            $filetMapAttr = $this->questionRepository->filterAttribute($request->get('topics'));
        }
        $data = [
            'title'=>$request->get('title'),
            'body'=>$request->get('body'),
            'user_id'=>Auth::id(),
        ];
        $question = $this->questionRepository->create($data);
        //处理question 和 topic 多对多 关系
        if(!empty($filetMapAttr)){
            $question->topics()->attach($filetMapAttr);
        }
        Alert::success('感谢提问，问题等待审核中')->persistent("关闭");
        return redirect()->route('question.show',[$question->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $question = $this->questionRepository->byIdWithTopicAndAnswers($id);

        return view('questions.show',compact('question'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $question = $this->questionRepository->byId($id);
        if(Auth::user()->owns($question)){
            return view('questions.edit',compact('question'));
        }
        return back();
    }


    /**
     * @param StoreQuestionRequest $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(StoreQuestionRequest $request, $id)
    {
        $question = $this->questionRepository->byId($id);
        if(!empty($request->get('topics'))){
            $filetMapAttr = $this->questionRepository->filterAttribute($request->get('topics'));
        }

        $question->update([
            'title'=>$request->get('title'),
            'body'=>$request->get('body'),
        ]);

        //处理question 和 topic 多对多 关系
        if(!empty($filetMapAttr)){
            $question->topics()->sync($filetMapAttr);
        }
        return redirect()->route('question.show',[$question->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $question = $this->questionRepository->byId($id);

        if(Auth::user()->owns($question)){
            $question->delete();

            return redirect('/');
        }

        abort(403,'Forbidden');
    }

}
