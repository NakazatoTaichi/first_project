@extends('post.default')

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
                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-card-text" viewBox="0 0 21 21">
                    <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
                    <path d="M3 5.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 8zm0 2.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5z"/>
                </svg>お知らせ掲示板
                </h2>
                <div class="text-light mb-2 mt-2">
                    <a class="btn btn-success" href="{{ route('post.create') }}">共有</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        @foreach($posts as $post)
            <div class="col-6 mt-3 mb-3">
                <h2>お知らせ：{{ $post->title }}</h2>
            </div>
            <div class="col-6 mt-3 mb-3">
                <p style="font-size: 1.25rem;" align="right">掲載日：{{ $post->created_at->format('Y年 m月 d日') }} / 投稿者：{{ $post->user->name }}</p>
            </div>
            <div class="col-12 mt-3 mb-3">
                <p>{{ $post->content }}</p>
            </div>
            <div class="col-11">
                <div class="text-light">
                    <a class="btn btn-primary" href="{{ route('post.show', $post->id) }}">続きを読む</a>
                </div>
                @if($post->comments()->count()==0)
                    <p>コメントはありません。</p>
                @else
                    <p>コメント数：{{ $post->comments()->count() }}</p>
                @endif
            </div>
            <div class="col-1" align='right'>
                <form action="{{ route('post.destroy',$post)}}" method="POST">
                @csrf
                    @method('DELETE')
                    <button type="submit" onclick='return confirm("削除しますか？")'>
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 18">
                        <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
                    </svg>
                    </button>
                </form>
            </div>
            <hr />
        @endforeach
    </div>

@endsection
