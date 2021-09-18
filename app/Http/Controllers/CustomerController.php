<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Customer_payment;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('fontend.customer.index', ['customers' => Customer::all()]);
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
            'phone' => 'required|unique:customers|max:11',
            'email' => 'required|unique:customers',
            'address' => 'required',
        ]);
        Customer::create($attributes);
        alert()->success('SuccessAlert', 'Customer Successfully Add.');
        return redirect()->route('customer.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        $data = Customer_payment::where('customer_id', $customer->id)->get();
        return view('fontend.customer_history.index', [
            'customers_payments' => $data,
            'customers' => $customer,
            'Total_due' => $data->sum('due'),
            'Total_pay' => $data->sum('pay')
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        return $customer;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        $attributes = $request->validate([
            'name' => 'required',
            'phone' => 'required|max:11',
            'email' => 'required',
            'address' => 'required',
        ]);
        $customer->update($attributes);
        alert()->success('SuccessAlert', 'Customer Successfully Update.');
        return redirect()->route('customer.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        $customer->delete();
        alert()->success('SuccessAlert', 'Customer Successfully DElETED.');
        return redirect()->route('customer.index');
    }
}