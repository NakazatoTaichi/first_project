@extends('app')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2 style="font-size: 2rem;">今日の予定（詳細）</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ url('/schedules') }}">戻る</a>
        </div>
    </div>
</div>

<div style="text-align: left;">
    <div class="row">
        <div class="col-12 mb-3 mt-3">
            <div class="form-group">
                <p style="font-size: 1.25rem;">夕飯 : {{ $schedule->dinner }}</p>
            </div>
        </div>

        <div class="col-12 mb-3 mt-3">
            <div class="form-group">
                <p style="font-size: 1.25rem;">外出時間 : {{ $schedule->departure_time->format('H:i') }} 〜 {{ $schedule->arrival_time->format('H:i') }}</p>
            </div>
        </div>

        <div class="col-12 mb-3 mt-3">
            <div class="form-group">
            <p style="font-size: 1.25rem;">メモ : {{ $schedule->memo }}</p>
            </div>
        </div>
    </div>
</div>
@endsection