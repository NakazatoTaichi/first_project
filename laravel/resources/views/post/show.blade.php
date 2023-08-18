@extends('post.default')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-success" href="{{ url('/posts') }}">戻る</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-6 mt-3 mb-3">
            <h2>お知らせ：{{ $post->title }}</h2>
        </div>
        <div class="col-6 mt-3 mb-3">
            <p style="font-size: 1.25rem;" align="right">掲載日：{{ $post->created_at->format('Y年 m月 d日') }}</p>
        </div>
        <div class="col-12 mt-3 mb-3">
            <p>{{ $post->content }}</p>
        </div>
        <p>コメント数：{{ $post->comments()->count() }}</p>
        <p align="right">投稿者：{{ $post->user->name }}</p>
        <hr />
    <form action="{{route('comment.store',$post) }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="comment"><p style="font-size: 1.25rem;">コメント</p></label>
            <textarea name="comment" id="comment" class="form-control" placeholder="内容"></textarea>
        </div>
        @error('comment')
            <div style="color:red;">
                <li>{{$message}}</li>
            </div>
        @enderror
        <div class="col-12 mb-3 mt-3" align="right">
            <button type="submit" class="btn btn-primary">コメントする</button>
        </div>
    </form>
    <h3>みんなのコメント</h3>
    @foreach($post->comments()->latest()->get() as $comment)
        <div class="col-6" style="font-size:1.25rem;">
            <p>{{ $comment->user->name}}</p>
        </div>
        <div class="col-6">
            <p style="opacity:0.5" align="right">{{ $comment->created_at->format('Y年 m月 d日 H:i') }}</p>
        </div>
        <div class="col-11">
            <p> >> {{ $comment->comment }}</p><br />
        </div>
        <div class="col-1" align="right">
            <form method="POST" action="{{ route('comment.destroy',$comment) }}">
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