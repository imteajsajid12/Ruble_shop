<?php

namespace App\Http\Controllers;

use App\Models\Save;
use App\Models\Sell;
use Illuminate\Http\Request;

class SaveController extends Controller
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
        $data = Save::all();
        foreach ($data as $save) {
            $this->data['product_name']           = $save->product_name;
            $this->data['product_code']           = $save->product_code;
            $this->data['product_price']          = $save->product_price;
            $this->data['sell_price']             = $save->sell_price;
            $this->data['product_quantity']       = $save->product_quantity;
            $this->data['product_size']           = $save->product_size;
            $this->data['image']                  = $save->image;
            $this->data['discount']               = $save->discount;
            $this->data['due']                    = 0;
            $this->data['pay']                    = "paid";
            $value = $save->sell_price * $save->product_quantity;
            $this->data['total_price']            = $value;
            Sell::create($this->data);
        }
        Save::getQuery()->delete();
        return response()->json(['success' => 'You have successfully Save.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Save  $save
     * @return \Illuminate\Http\Response
     */
    public function show(Save $save)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Save  $save
     * @return \Illuminate\Http\Response
     */
    public function edit(Save $save)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Save  $save
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Save $save)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Save  $save
     * @return \Illuminate\Http\Response
     */
    public function destroy(Save $save)
    {
        //
    }
    public function invoice()
    {
        return view('fontend.invoice.index', ['save' => Save::all()]);
    }
}