@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->
    <h1>id = {{ $tasks->id }}のメッセージ詳細ページ</h1>
    
    <h2>コンテンツ：{{ $tasks->content }}</h2>


    {!! link_to_route('tasks.edit','このタスク編集',['id' => $tasks->id]) !!}
    
    {!! Form::model($tasks, ['route' => ['tasks.destroy', $tasks->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除') !!}
    {!! Form::close() !!}


@endsection