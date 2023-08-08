@extends('user.app')

@section('content')
<div class="row">
    <div class="col-lg-12" style="text-align:right">
        <h4>ログイン者：{{Illuminate\Support\Facades\Auth::user()->name}}</h4>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="text-left">
            <h2 style="font-size: 2rem;">
            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-person-square" viewBox="0 0 21 21">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1v-1c0-1-1-4-6-4s-6 3-6 4v1a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12z"/>
            </svg>家族メンバー</h2>
            <div class="text-light mb-2 mt-2">
                <a class="btn btn-info" href="{{ route('user.create') }}">メンバー登録</a>
            </div>
        </div>
    </div>
</div>
<table class="table table-bordered table-hover">
    <tr align='center'>
        <th>名前</th>
        <th>Eメール</th>
        <!-- <th>パスワード</th> -->
        <th></th>
        <th></th>
    </tr>
    @foreach($users as $user)
    <tr valign="middle" align="center">
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <!-- <td>{{ $user->password }}</td> -->
        <td><a class="btn btn-primary" href="{{ route('user.edit',['id'=>$user->id])}}">変更</a></td>
        <td>
            <form action="{{ route('user.delete',['id'=>$user->id])}}" method="POST">
                @method('DELETE')
                @csrf
                    <button type="submit" onclick='return confirm("削除しますか？")'>削除</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection