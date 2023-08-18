@extends('post.default')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2 style="font-size: 2rem;">掲載フォーム</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ url('/posts') }}">戻る</a>
        </div>
    </div>
</div>

<div class="col-xs-8 col-xs-offset-2">
    <form action="{{ route('post.store')}}" method="POST">
        @csrf
        <div class="row">
            <div class="col-12 mt-3 mb-3">
                <div class="form-group">
                    <label for="title"><p style="font-size: 1.25rem;">お知らせ</p></label>
                    <input id="title" name="title" type="text" class="form-control" value="{{ old('title') }}">
                    @error('title')
                        <div style="color:red;">
                            <li>{{$message}}</li>
                        </div>
                    @enderror
                </div>
            </div>
            <div class="col-12 mt-3 mb-3">
                <div class="form-group">
                    <label for="content"><p style="font-size: 1.25rem;">内容</p></label>
                    <textarea id="content" name="content" style="height:100px" class="form-control" placeholder="内容" value="{{ old('content') }}"></textarea>
                    @error('content')
                        <div style="color:red;">
                            <li>{{$message}}</li>
                        </div>
                    @enderror
                </div>
            </div>
            <div class="col-12 mb-3 mt-3">
                <button type="submit" class="btn btn-primary w-100">共有する</button>
            </div>
        </div>
    </form>
</div>
















@endsection