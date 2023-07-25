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

    <table class="table table-striped table-hover">
        <tr>
            <th>日付</th>
            <th>外出予定</th>
            <th>夕飯</th>
            <th>外出時刻</th>
            <th>帰宅時刻</th>
            <th></th>
            <!-- <th>メモ</th> -->
        </tr>
        @foreach($schedules as $schedule)
        <tr>
            <td>{{ $schedule->created_at }}</td>
            <td><a href="{{ route('schedule.show',$schedule->id) }}">{{ $schedule->going_out }}</a></td>
            <td>{{ $schedule->dinner }}</td>
            <td>{{ $schedule->departure_time }}</td>
            <td>{{ $schedule->arrival_time }}</td>
            <!-- <td style="text-algin:left">{{ $schedule->memo }}</td> -->
            <td style="text-align:center"><a class="btn btn-primary" href="{{ route('schedule.edit', $schedule->id) }}">変更</a></td>
        </tr>
        @endforeach
    </table>

@endsection