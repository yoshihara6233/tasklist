@extends('layouts.app')

@section('content')


<!-- ここにページ毎のコンテンツを書く -->
    <h1>タスクの新規作成ページ</h1>

 <div class="row">
        <div class="col-xs-12 col-sm-ofset-2 col-sm-8 col-md-ofset-2 col-md-8 col-lg-ofset-3 col-lg-6">
            

            {!! Form::model($tasks, ['route' => 'tasks.store']) !!}
            
                <div class="form-group">
                    {!! Form::label('content', 'メッセージ:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>
            
                <div class="form-group">
                    {!! Form::label('status', 'タイトル:') !!}
                    {!! Form::text('status', null, ['class' => 'form-control']) !!}
                </div>
                    

                
                {!! Form::submit('投稿', ['class' => 'btn btn-primary']) !!}
        
            {!! Form::close() !!}
        </div>
    </div>

@endsection

