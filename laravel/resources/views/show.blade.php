@extends('app')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2 style="font-size: 1rem;">今日の予定（詳細）</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ url('/schedules') }}">戻る</a>
        </div>
    </div>
</div>

<div style="text-align: left;">
    <div class="row">
        <!-- <div class="col-6 mb-3 mt-3">
            <p>外出予定</p>
            <div class="form-group">
                {{ $schedule->going_out }}
            </div>
        </div> -->

        <div class="col-12 mb-3 mt-3">
            <div class="form-group">
                <p>夕飯 : {{ $schedule->dinner }}</p>
            </div>
        </div>

        <!-- <div class='col-6 mb-3 mt-3'>
            <div class="form-group">
                <p>外出時刻 : {{ $schedule->departure_time }}</p>
            </div>
        </div>

        <div class='col-6 mb-3 mt-3'>
            <div class="form-group">
                <p>帰宅時刻 : {{ $schedule->arrival_time }}</p>
            </div>
        </div> -->

        <div class="col-12 mb-3 mt-3">
            <div class="form-group">
                <p>外出時間 : {{ $schedule->departure_time }} 〜 {{ $schedule->arrival_time }}</p>
            </div>
        </div>

        <div class="col-12 mb-3 mt-3">
            <div class="form-group">
            <p>メモ : {{ $schedule->memo }}</p>
            </div>
        </div>
    </div>
</div>
@endsection