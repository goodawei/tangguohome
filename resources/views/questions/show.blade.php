@extends('layouts.appt')

@section('content')
    @include('vendor.ueditor.assets')
    <div class="container">
        <div class="row" style="margin-top: 100px;margin-bottom: 100px">

            <div class="col-md-8 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        {{ $question->title }}
                        @foreach($question->topics as $topic)
                            <a href="/topic{{ $topic->id }}" class="topic"> {{ $topic->name }}</a>
                        @endforeach
                    </div>
                    <div class="panel-body content">
                        {!! $question->body !!}
                    </div>
                    <div class="actions">
                        @if(Auth::check() && Auth::user()->owns($question))
                            <span class="edit">
                                <a href="/questions/{{ $question->id }}/edit">编辑</a>
                            </span>

                            <form action="/questions/{{ $question->id }}" method="post" class="delete-form">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button class="button is-naked delete-button">删除</button>
                            </form>
                        @endif
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading question-follow">
                        <h2>{{ count($question->followers) }}</h2>
                        <span>关注者</span>
                    </div>
                    <div class="panel-body">
                        <a href="/questions/{{ $question->id }}/follow" class="btn btn-default @if(Auth::user()) {{ Auth::user()->followed($question->id) ? 'btn-success' : ''}} @endif">
                            @if(Auth::user()) {{ Auth::user()->followed($question->id) ? '已关注' : '关注此问题'}}@else 关注此问题@endif
                        </a>
                        <a href="#ediy" class="btn btn-primary">撰写答案</a>
                    </div>
                </div>
            </div>

            <div class="col-md-8 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        {{ $question->answers_count }}个答案
                    </div>
                    <div class="panel-body">

                        @foreach($question->answers as $answer)
                            <div class="media">
                                <div class="media-left">
                                    <a href="">
                                        <img width="36" src="{{ $answer->user->avatar }}" alt="{{ $answer->user->name }}" />
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">
                                        <a href="#">{{ $answer->user->name }}</a>
                                    </h4>
                                    {!! $answer->body !!}
                                </div>
                            </div>
                        @endforeach

                        @if(Auth::check())
                        <form action="/questions/{{ $question->id }}/answer" method="post">
                            {{ csrf_field() }}
                            <div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
                                <script id="container" name="body" type="text/plain" style="height:120px">
                                    {!!  old('body') !!}
                                </script>
                                @if ($errors->has('body'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('body') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <button class="btn btn-success pull-right" type="submit">提交答案</button>
                        </form>
                        @else
                                <a href="/login" class="btn btn-success btn-block">登录提交答案</a>
                        @endif
                    </div>

                </div>
            </div>

        </div>
    </div>
    @section('js')
            <!-- 实例化编辑器 -->
    <script type="text/javascript">
        var ue = UE.getEditor('container',{
            toolbars: [
                ['bold', 'italic', 'underline', 'strikethrough', 'blockquote', 'insertunorderedlist', 'insertorderedlist', 'justifyleft','justifycenter', 'justifyright',  'link', 'insertimage', 'fullscreen']
            ],
            elementPathEnabled: false,
            enableContextMenu: false,
            autoClearEmptyNode:true,
            wordCount:false,
            imagePopup:false,
            autotypeset:{ indent: true,imageBlockLine: 'center' }
        });
        ue.ready(function() {
            ue.execCommand('serverparam', '_token', '{{ csrf_token() }}'); // 设置 CSRF token.
        });
    </script>
@endsection
@endsection
