<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FlightDestination;
use App\Models\FlightPartner;

class FlightCitySearchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('layouts.flightcitysearch');
    }


    public function citySearch($cityname, $id)
    {
        // Retrieve the flight destination by ID
    $destination = FlightDestination::findOrFail($id);

    // Retrieve active flight partners, sorted by the updated_at field
    $flightpartner = FlightPartner::where('status', 'active')
                                   ->orderBy('updated_at', 'desc')
                                   ->get();
    $menu = FlightDestination::where('status', 'active')
                                   ->orderBy('title', 'desc')
                                   ->get()
                                   ->groupBy('region');  // Group by the 'region' field
    $popularDestinations = FlightDestination::where('status', 'active')
                                   ->orderBy('title', 'desc')
                                   //->limit(21) // Adjust the limit as necessary
                                   ->get();

    // Return the view and pass the retrieved data
    return view('layouts.flightcitysearch', compact('destination', 'cityname', 'flightpartner','menu','popularDestinations'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
