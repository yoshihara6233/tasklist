@extends('layouts.app')

@section('content')


<!-- ここにページ毎のコンテンツを書く -->
  <h1>タスク一覧</h1>
    @if (count($tasks) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>ステータス</th>
                    <th>タスク</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $tasklist)
                    <tr>
                        <td>{!! link_to_route('tasks.show', $tasklist->id, ['id' => $tasklist->id]) !!}</td>
                        <td>{{ $tasklist->status}}</td>
                        <td>{{ $tasklist->content }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    
    {!! link_to_route('tasks.create','新規タスク',null,['class' => 'btn btn-primary'])!!}


@endsection