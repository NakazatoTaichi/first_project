@extends('app')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="text-left">
                <h2 style="font-size: 1rem;">みんなの予定</h2>
            </div>
            <div class="text-right">
            <a class="btn btn-success" href="{{ route('schedule.create') }}">共有</a>
            </div>
        </div>
    </div>

    <table class="table table-bordered table-hover">
        <tr>
            <th>日付</th>
            <th>外出予定</th>
            <th>夕飯</th>
            <th>外出時間</th>
            <th>帰宅時間</th>
            <th>メモ</th>
        </tr>
        @foreach($schedules as $schedule)
        <tr>
            <th>{{ $schedule->created_at }}</th>
            <th>{{ $schedule->going_out }}</th>
            <th>{{ $schedule->dinner }}</th>
            <th>{{ $schedule->departure_time }}</th>
            <th>{{ $schedule->arrival_time }}</th>
            <th>{{ $schedule->memo }}</th>
        </tr>
        @endforeach
    </table>

@endsection