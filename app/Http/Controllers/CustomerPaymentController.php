<?php

namespace App\Http\Controllers;

use App\Models\Customer_payment;
use Illuminate\Http\Request;

class CustomerPaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('fontend.customer_history.index', ['customers_payments' => Customer_payment::all()]);
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
            'customer_id' => 'required',
            'pay' => 'nullable',
            'due' => 'nullable',
        ]);
        if ($request->due == '') {
            $attributes['due']  = 0;
        } elseif ($request->pay == '') {
            $attributes['pay']  = 0;
        }
        Customer_payment::create($attributes);
        return redirect()->route('customer.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer_payment  $customer_payment
     * @return \Illuminate\Http\Response
     */
    public function show(Customer_payment $customer_payment)
    {
        // $data = Customer_payment::where('customer_id', $customer_payment->id)->get();
        // return view('fontend.customer_history.index', [
        //     'customers_payments' => $data,
        //     'Total_due' => $data->sum('due'),
        //     'Total_pay' => $data->sum('pay')
        // ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer_payment  $customer_payment
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer_payment $customer_payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer_payment  $customer_payment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer_payment $customer_payment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer_payment  $customer_payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer_payment $customer_payment)
    {
        //
    }
}