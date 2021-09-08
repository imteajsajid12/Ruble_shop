<?php

namespace App\Http\Controllers;

use App\Models\Save;
use App\Models\Sell;
use App\Models\Stock;
use Exception;
use Illuminate\Http\Request;

class SellController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return Save::all();
    }
    public function view()
    {

        return view('fontend.sell');
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
            'product_name' => 'required',
            'product_code' => 'required',
            'product_price' => 'required',
            'sell_price' => 'required',
            'product_quantity' => 'required',
            'product_size' => 'required',
            'image' => 'nullable',
        ]);
        $data = $request->product_quantity - $request->quantity;

        // $attributes['product_quantity'] = $data;
        // Save::created($attributes);
        // return response()->json(['success' => 'You have successfully Save.']);
        // return $attributes;
        try {
            $stock = Stock::where('product_name', $request->product_name)->orwhere('product_code', $request->product_code)->first();
            $save = Save::where('product_name', $request->product_name)->orwhere('product_code', $request->product_code)->first();
            if (!is_null($save)) {
                $data = $save->product_quantity + $request->quantity;
                $save->product_quantity = $data;
                $save->save();
                $stock->product_quantity  = $data;
                $stock->save();
            } else {
                $this->data['product_name']             = $request->input('product_name');
                $this->data['product_code']            = $request->input('product_code');
                $this->data['product_price']          = $request->input('product_price');
                $this->data['sell_price']   = $request->input('sell_price');
                $this->data['product_quantity']   = $request->input('quantity');
                $this->data['product_size']   = $request->input('product_size');
                $this->data['image']   = $request->input('image');
                $stock->product_quantity  = $data;
                $stock->save();
                Save::create($this->data);
                return response()->json(['success' => 'You have successfully Save.']);
            }
        } catch (Exception $e) {
            return response()->json(['danger' => 'You have successfully danger.']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sell  $sell
     * @return \Illuminate\Http\Response
     */
    public function show(Sell $sell)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sell  $sell
     * @return \Illuminate\Http\Response
     */
    public function edit(Sell $sell, Stock $stock, $id)
    {
        // return $stock->find($id);
        $data =  $stock->where('product_name', $id)->orwhere('product_code', $id)->first();
        if ($data == null) {
            return response()->json(['faild' => 'You have no data.']);
        } else {
            return $data;
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sell  $sell
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sell $sell)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sell  $sell
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Save::find($id);
        $stock = Stock::where('product_code', $data->product_code)->first();
        $quantity = $data->product_quantity + $stock->product_quantity;
        $stock->product_quantity =  $quantity;
        $stock->Save();
        $data->delete();

        return response()->json(['success' => 'You have successfully Delete.']);
    }
}