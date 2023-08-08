<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CreateScheduleRequest;


class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $schedules = Schedule::all();
        $schedules = Schedule::orderBy('created_at', 'desc')->get();

        return view('index',compact('schedules'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateScheduleRequest $request)
    {
        // $request->validate([
        //     'going_out' =>'required',
        //     'dinner' =>'required',
        // ]);

        // Schedule::create([
        //     'going_out' => $request['going_out'],
        //     'dinner' => $request['dinner'],
        //     'departure_time' => $request['departure_time'],
        //     'arrival_time' => $request['arrival_time'],
        //     'memo' => $request['memo']
        // ]);

        $schedule = new Schedule;
        $schedule->user_id = Auth::user()->id;
        $schedule->going_out = $request->input(["going_out"]);
        $schedule->dinner = $request->input(["dinner"]);
        $schedule->departure_time = $request->input(["departure_time"]);
        $schedule->arrival_time = $request->input(["arrival_time"]);
        $schedule->memo = $request->input(["memo"]);
        $schedule->save();

        return redirect()->route('schedules.index')->with('success','今日の予定を共有しました');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function show(Schedule $schedule)
    {
        return view('show', compact('schedule'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function edit(Schedule $schedule)
    {
        return view('edit', compact('schedule'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function update(CreateScheduleRequest $request, Schedule $schedule)
    {
        $schedule->user_id = Auth::user()->id;
        $schedule->going_out = $request->input(["going_out"]);
        $schedule->dinner = $request->input(["dinner"]);
        $schedule->departure_time = $request->input(["departure_time"]);
        $schedule->arrival_time = $request->input(["arrival_time"]);
        $schedule->memo = $request->input(["memo"]);
        $schedule->save();

        return redirect()->route('schedules.index')->with('success','今日の予定を変更しました');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function destroy(Schedule $schedule)
    {
        $schedule->delete();
        return redirect()->route('schedules.index')->with('success','今日の予定を削除しました');
    }

}
