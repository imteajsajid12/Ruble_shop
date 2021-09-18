<?php

namespace App\Http\Controllers;

use App\Models\Customer_payment;
use App\Models\Monthly;
use App\Models\Sell;
use App\Models\Today_cost;
use Carbon\Carbon;
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
        return view('fontend.monthly.index', [
            'monthly' => Monthly::all(),
            'Due' => Monthly::Sum('due_price'),
            'Pay' => Monthly::sum('pay_price'),
            'Cost' => Monthly::sum('cost_price'),
            'Quantity' => Monthly::sum('sell_quantity'),
            'Product_price' => Monthly::sum('product_price'),
            'Sell_price' => Monthly::sum('sell_total_price'),
        ]);
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
        $data = Customer_payment::all();
        $month = Monthly::all();
        $due1 = $data->sum('due')
            - $data->sum('pay');
        if ($month->sum('due_price') < $due1) {
            $due = $due1 - $month->sum('due_price');
        } else {
            $due = $due1;
        }
        //dd($month);
        //if (!is_null($month)) {
        //    $due = $data->sum('due')
        //        - $data->sum('pay');
        //    //dd($due);
        //} else {
        //    $due = $data->sum('due')
        //        - $data->sum('pay');
        //    if ($due < $month->sum('due_price')) {
        //        dd('big');
        //        $due = $month->sum('due_price') - $data->sum('due')
        //            - $data->sum('pay');
        //    }
        //    dd("kk");
        //}
        $sell = Sell::all();
        $cost = Today_cost::sum('taka');
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
        Sell::getQuery()->delete();
        Today_cost::getQuery()->delete();
        alert()->success('SuccessAlert', 'Monthly Data  Successfully Add.');
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