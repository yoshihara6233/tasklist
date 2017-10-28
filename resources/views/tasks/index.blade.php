@extends('layouts.app')

@section('content')


<!-- ここにページ毎のコンテンツを書く -->
  <h1>タスク一覧</h1>
 
    @if(count($tasks)>0)
        <ul>
            @foreach($tasks as $tasklist)
                <li>{!! link_to_route('tasks.show', $tasklist->id, ['id' => $tasklist->id]) !!} : {{ $tasklist->content }}</li>
            @endforeach
        </ul>
    @endif
    
    {!! link_to_route('tasks.create','新規タスク')!!}


@endsection