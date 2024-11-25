<?php

namespace App\Http\Controllers;

use App\Models\TrackPrice;
use Illuminate\Http\Request;

class TrackPriceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{

    \Log::info('Track Price Request:', ['request' => $request->all()]);

    try {
        $trackprice = TrackPrice::create([
            'source' => $request->from,
            'destination' => $request->to,
            'departure_date' => $request->departure,
            'return_date' => $request->return,
            'customer_phone' => $request->customerPhone,
            'customer_email' => $request->customerEmail,
        ]);

        \Log::info('Track Price Created:', ['trackprice' => $trackprice]);

        return response()->json([
            'success' => true,
            'message' => 'We will keep you posted on price changes',
        ]);
    } catch (\Throwable $th) {
        \Log::error('Error in Track Price Store:', ['error' => $th->getMessage()]);

        return response()->json([
            'success' => false,
            'message' => 'An error occurred. Please try again later.',
        ], 500);
    }
}


    /**
     * Display the specified resource.
     */
    public function show(c $c)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(c $c)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, c $c)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(c $c)
    {
        //
    }
}
