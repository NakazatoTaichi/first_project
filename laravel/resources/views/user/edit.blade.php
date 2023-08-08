@extends('app')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2 style="font-size: 2rem;">メンバー登録</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ url('/users') }}">戻る</a>
        </div>
    </div>
</div>

<div class="row justify-content-center">
    <div class="card w-75">
        <div class="member-form-body">
            <form action="{{ route('user.update',['id'=>$user->id])}}" method="post">
                @csrf
                    <div class="form-group mt-3 mb-3">
                        <label for="name"><p style="font-size: 1.25rem;">名前</p></label>
                        <input id="name" name="name" type="text" class="form-control" value="{{ old('name') }}">
                        @error('name')
                        <div style="color:red;">
                            <li>{{$message}}</li>
                        </div>
                        @enderror
                    </div>
                    <div class="form-group mt-3 mb-3">
                        <label for="email"><p style="font-size: 1.25rem;">メールアドレス</p></label>
                        <input id="email" name="email" type="email" class="form-control" value="{{ old('email') }}">
                        @error('email')
                        <div style="color:red;">
                            <li>{{$message}}</li>
                        </div>
                        @enderror
                    </div>
                    <div class="form-group mt-3 mb-3">
                        <label for="password"><p style="font-size: 1.25rem;">パスワード</p></label>
                        <input id="password" name="password" type="password" class="form-control" value="{{ old('password') }}">
                        @error('password')
                        <div style="color:red;">
                            <li>{{$message}}</li>
                        </div>
                        @enderror
                    </div>
                    <div class="form-group mt-3 mb-3">
                        <button type="submit" class="btn btn-primary w-100">登録する</button>
                    </div>
            </form>
        </div>
    </div>
</div>
@endsection