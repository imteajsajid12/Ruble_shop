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
        return view('fontend.customer_history.index', ['customers_payment' => Customer_payment::all()]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer_payment  $customer_payment
     * @return \Illuminate\Http\Response
     */
    public function show(Customer_payment $customer_payment)
    {
        //
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