@extends('app')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2 style="font-size: 2rem;">今日の予定</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ url('/schedules') }}">戻る</a>
        </div>
    </div>
</div>
<!-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif -->
<div style="text-align: left;">
<form action="{{ route('schedule.store') }}" method="POST">
    @csrf
    <div class="row">
        <div class="col-6 mb-3 mt-3">
            <p style="font-size: 1.25rem;">外出予定</p>
            <div class="form-group">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="going_out" id="inlineRadio1" value="あり" {{ old ('going_out') == 'あり' ? 'checked' : '' }} checked>
                    <label class="form-check-label" for="inlineRadio1">あり</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="going_out" id="inlineRadio2" value="なし" {{ old ('going_out') == 'なし' ? 'checked' : '' }}>
                    <label class="form-check-label" for="inlineRadio2">なし</label>
                </div>
            </div>
            @error('going_out')
            <div style="color:red;">
                <li>{{$message}}</li>
            </div>
            @enderror
        </div>

        <div class="col-6 mb-3 mt-3">
            <p style="font-size: 1.25rem;">夕飯</p>
            <div class="form-group">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="dinner" id="inlineRadio3" value="必要" {{ old ('dinner') == '必要' ? 'checked' : '' }} checked>
                    <label class="form-check-label" for="inlineRadio3">必要</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="dinner" id="inlineRadio4" value="不要" {{ old ('dinner') == '不要' ? 'checked' : '' }}>
                    <label class="form-check-label" for="inlineRadio4">不要</label>
                </div>
            </div>
            @error('dinner')
            <div style="color:red;">
                <li>{{$message}}</li>
            </div>
            @enderror
        </div>

        <div class='col-6 mb-3 mt-3'>
            <p style="font-size: 1.25rem;">外出時刻</p>
            <div class="form-group">
                <div class='input-group date'>
                    <input type='time' name="departure_time" value="00:00" class="form-control">
                    @error('departure_time')
                    <div style="color:red;">
                        <li>{{$message}}</li>
                    </div>
                    @enderror
                </div>
            </div>
        </div>

        <div class='col-6 mb-3 mt-3'>
            <p style="font-size: 1.25rem;">帰宅時刻</p>
            <div class="form-group">
                <div class='input-group date'>
                    <input type='time' name="arrival_time" value="00:00" class="form-control">     <!--placeholder="00:00"-->
                    @error('arrival_time')
                    <div style="color:red;">
                        <li>{{$message}}</li>
                    </div>
                    @enderror
                </div>
            </div>
        </div>

        <div class="col-12 mb-3 mt-3">
            <div class="form-group">
            <textarea class="form-control" style="height:100px" name="memo" placeholder="メモ"></textarea>
            @error('memo')
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