@extends('app')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2 style="font-size: 1rem;">今日の予定</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ url('/schedules') }}">戻る</a>
        </div>
    </div>
</div>

<div style="text-align: left;">
<form action="{{ route('schedule.store') }}" method="POST">
    @csrf
    <div class="row">
        <div class="col-6 mb-3 mt-3">
            <p>外出予定</p>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="going_out" id="inlineRadio1" value="あり">
                <label class="form-check-label" for="inlineRadio1">あり</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="going_out" id="inlineRadio2" value="なし">
                <label class="form-check-label" for="inlineRadio2">なし</label>
            </div>
            <!-- @error('going_out')
            <span style="color:red;">入力してください</span>
            @enderror -->
        </div>

        <div class="col-6 mb-3 mt-3">
            <p>夕飯</p>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="dinner" id="inlineRadio3" value="必要">
                <label class="form-check-label" for="inlineRadio3">必要</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="dinner" id="inlineRadio4" value="不要">
                <label class="form-check-label" for="inlineRadio4">不要</label>
            </div>
            <!-- @error('dinner')
            <span style="color:red;">入力してください</span>
            @enderror -->
        </div>

        <div class='col-6 mb-3 mt-3'>
            <p>外出時間</p>
            <div class="form-group">
                <div class='input-group date'>
                    <input type='time' name="departure_time" class="form-control"/>
                </div>
            </div>
        </div>

        <div class='col-6 mb-3 mt-3'>
            <p>帰宅時間</p>
            <div class="form-group">
                <div class='input-group date'>
                    <input type='time' name="arrival_time" class="form-control"/>
                </div>
            </div>
        </div>

        <div class="col-12 mb-3 mt-3">
            <div class="form-group">
            <textarea class="form-control" style="height:100px" name="memo" placeholder="メモ"></textarea>
            </div>
        </div>
        <div class="col-12 mb-3 mt-3">
            <button type="submit" class="btn btn-primary w-100">共有する</button>
        </div>
    </div>
</form>
</div>

@endsection