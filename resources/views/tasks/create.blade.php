@extends('layouts.app')

@section('content')


<!-- ここにページ毎のコンテンツを書く -->
    <h1>タスクの新規作成ページ</h1>

    
    {!! Form::model($tasks, ['route' => 'tasks.store']) !!}

        {!! Form::label('content', 'タスク:') !!}
        {!! Form::text('content') !!}

        {!! Form::label('status', 'ステイタス:') !!}
        {!! Form::text('status') !!}

        {!! Form::submit('登録') !!}

    {!! Form::close() !!}

@endsection