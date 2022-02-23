<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('fontend.Stock.stock', ['stocks' => Stock::all()]);
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
            'product_code' => 'required|unique:stocks',
            'product_price' => 'required',
            'sell_price' => 'required',
            'product_quantity' => 'required',
            'product_size' => 'required',
            'image' => 'nullable',
        ]);
        // image Uplide
        if ($request->hasFile('image')) {
            $photo = $request->file('image');
            $imageName = 'image' . Date('H_M_H_s') . '.' . $photo->extension();
            $request->image->move('image/', $imageName);
            $attributes['image'] = $imageName;
        }
        // total price
        $attributes['total_price'] =
         $request['product_price'] * $request['product_quantity'];

        Stock::create($attributes);

        alert()->success('SuccessAlert', 'Product Successfully Add.');
        return redirect()->route('Stock.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function show(Stock $stock)
    {
        return $stock;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function edit(Stock $stock, $id)
    {

        return $stock->find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Stock $stock, $id)
    {
        $attributes = $request->validate([
            'product_name' => 'required',
            'product_code' => 'required|',
            'product_price' => 'required',
            'sell_price' => 'required',
            'product_quantity' => 'required',
            'product_size' => 'required',
            'image' => 'nullable',
        ]);
        $stock->find($id)->update($attributes);
        alert()->success('SuccessAlert', 'Product Successfully Update.');
        return redirect()->route('Stock.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stock $stock, $id)
    {
        $data = $stock->find($id);
        $image_path = "image/" . $data->image;
        if (file_exists($image_path)) {
            @unlink($image_path);
        }
        $data->delete();
        alert()->success('SuccessAlert', 'Product Successfully Delete.');
        return back();
    }
}
