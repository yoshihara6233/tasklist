@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->
    <h1>id = {{ $tasks->id }}のタスクの詳細ページ</h1>
    
    <table class="table table-bordered">
        <tr>
            <th>id</th>
            <td>{{ $tasks->id }}</td>
        </tr>

        <tr>
            <th>タスク</th>
            <td>{{ $tasks->content }}</td>
        </tr>
    </table>
    
    {!! link_to_route('tasks.edit','このタスク編集',['id' => $tasks->id], ['class' => 'btn btn-default'])!!}

    
    {!! Form::model($tasks, ['route' => ['tasks.destroy', $tasks->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除',['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
    
    
@endsection