@extends('layouts.helloapp')

@section('title','BDtest')

@section('listname')
    @parent
    DBテスト作成
@endsection

@section('content')
    <table>
        <tr>
            <th>name</th>
            <th>Mail</th>
            <th>Age</th>
        </tr>
        @foreach ($items as $item)
            <tr>
                <td>{{ $item->name }}</td>
                <td>{{ $item->mail }}</td>
                <td>{{ $item->age }}</td>
            </tr>
        @endforeach
    </table>
@endsection

@section('footer')
テストDBページ
@endsection