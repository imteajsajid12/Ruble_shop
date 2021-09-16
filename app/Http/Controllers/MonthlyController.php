<?php

namespace App\Http\Controllers;

use App\Models\Monthly;
use App\Models\Sell;
use App\Models\Today_cost;
use Illuminate\Http\Request;

class MonthlyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $sell = Sell::all();
        $cost = Today_cost::sum('taka');
        $due = 0;
        $pay = 0;
        $quantity = $sell->sum('product_quantity');
        $product_price = $sell->sum('product_price');
        $total_price = $sell->sum('total_price');
        //dd($quantity, $product_price, $total_price, $cost);
        $this->data['due_price']           = $due;
        $this->data['pay_price']           = $pay;
        $this->data['cost_price']          = $cost;
        $this->data['sell_quantity']       = $quantity;
        $this->data['sell_total_price']    = $total_price;
        $this->data['product_price']       = $product_price;
        Monthly::create($this->data);
        return redirect()->route('admin.home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Monthly  $monthly
     * @return \Illuminate\Http\Response
     */
    public function show(Monthly $monthly)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Monthly  $monthly
     * @return \Illuminate\Http\Response
     */
    public function edit(Monthly $monthly)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Monthly  $monthly
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Monthly $monthly)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Monthly  $monthly
     * @return \Illuminate\Http\Response
     */
    public function destroy(Monthly $monthly)
    {
        //
    }
}