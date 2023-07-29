@extends('app')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="text-left">
                <h2 style="font-size: 2rem;">
                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-calendar-check" viewBox="0 0 21 21">
                    <path d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                    <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                </svg>みんなの予定
                </h2>
            </div>
            <div class="text-light mb-2 mt-2">
                <a class="btn btn-success" href="{{ route('schedule.create') }}">共有</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
        @if ($message = Session::get('success'))
            <div class="alert alert-success mt-1"><p>{{ $message }}</p></div>
        @endif
        </div>
    </div>

    <table class="table table-striped table-hover">
        <tr>
            <th>日付</th>
            <th>外出予定</th>
            <th>夕飯</th>
            <th>外出時刻</th>
            <th>帰宅時刻</th>
            <th></th>
            <th></th>
            <!-- <th>メモ</th> -->
        </tr>
        @foreach($schedules as $schedule)
        <tr>
            <td valign="middle">{{ $schedule->created_at }}</td>
            <td valign="middle"><a href="{{ route('schedule.show',$schedule->id) }}">{{ $schedule->going_out }}</a></td>
            <td valign="middle">{{ $schedule->dinner }}</td>
            <td valign="middle">{{ $schedule->departure_time }}</td>
            <td valign="middle">{{ $schedule->arrival_time }}</td>
            <!-- <td style="text-algin:left">{{ $schedule->memo }}</td> -->
            <td valign="middle" style="text-align:center">
                <a class="btn btn-primary" href="{{ route('schedule.edit', $schedule->id) }}">変更</a>
            </td>
            <td valign="middle" style="text-align:center">
                <form action="{{ route('schedule.destroy',$schedule->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick='return confirm("削除しますか？")'>
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 18">
                        <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
                    </svg>
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

@endsection