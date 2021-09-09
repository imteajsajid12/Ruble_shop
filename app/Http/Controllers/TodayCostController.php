<?php

namespace App\Http\Controllers;

use App\Models\Today_cost;
use Illuminate\Http\Request;

class TodayCostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('fontend.today_cost.index', ['today_costs' => Today_cost::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attributes = $request->validate([
            'name' => 'required',
            'taka' => 'required',
        ]);
        Today_cost::create($attributes);
        return redirect()->route('today_cost.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Today_cost  $today_cost
     * @return \Illuminate\Http\Response
     */
    public function show(Today_cost $today_cost)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Today_cost  $today_cost
     * @return \Illuminate\Http\Response
     */
    public function edit(Today_cost $today_cost)
    {
        return $today_cost;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Today_cost  $today_cost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Today_cost $today_cost)
    {
        $attributes = $request->validate([
            'name' => 'required',
            'taka' => 'required',
        ]);
        $today_cost->update($attributes);
        return redirect()->route('today_cost.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Today_cost  $today_cost
     * @return \Illuminate\Http\Response
     */
    public function destroy(Today_cost $today_cost)
    {
        $today_cost->dalete();
        return redirect()->route('today_cost.index');
    }
}