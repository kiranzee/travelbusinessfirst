<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use App\Models\Airport;
use App\Models\FlightPartner;
use App\Models\FlightDestination;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FlightController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
       // return view('flightsearchresult');

      // Retrieve search parameters
    $from = $request->query('from');
    $to = $request->query('to');
    $departureDate = $request->query('departure');
    $returnDate = $request->query('returndt');
    $passengers = $request->query('passengers');
    $cabinClass = $request->query('cabin_class');
    $directFlight = $request->query('direct_flight');
    

    // Fetching related airport data
    $airports = Airport::whereIn('airport_code', [$from, $to])->get();

    // Main flight search query with joins
    $baseQuery = Flight::join('airlines', 'flights.airline', '=', 'airlines.airline_code')
        ->join('airports as source_airport', 'flights.source', '=', 'source_airport.airport_code')
        ->join('airports as destination_airport', 'flights.destination', '=', 'destination_airport.airport_code')
        ->where('flights.source', $from)
        ->where('flights.destination', $to)
        ->whereDate('flights.start_date', '<=', $departureDate)
        ->whereDate('flights.end_date', '>=', $departureDate)
        ->where('flights.class', $cabinClass)
        ->when($directFlight == 'true', function($query) {
                                  return $query->where('route', 'Direct');
                              })
        ->select('flights.*', 'airlines.airline_name as airline_name', 'source_airport.airport_name as source_airport_name', 'destination_airport.airport_name as destination_airport_name');

    // Retrieve all results (to display general flight search results)
    $results = (clone $baseQuery)->orderBy('flights.adult_fare', 'ASC')->get();

    // Get the lowest price (best price)
    $bestPrice = (clone $baseQuery)->orderBy('flights.adult_fare', 'ASC')->first();

    // Get the highest price (fastest)
    $fastest = (clone $baseQuery)->orderBy('flights.adult_fare', 'DESC')->first();

    $menu = FlightDestination::where('status', 'active')
                                   ->orderBy('title', 'desc')
                                   ->get()
                                   ->groupBy('region');  // Group by the 'region' field
    $popularDestinations = FlightDestination::where('status', 'active')
                                   ->orderBy('title', 'desc')
                                   //->limit(5) // Adjust the limit as necessary
                                   ->get();

    // Pass all data to the view, including the bestPrice and fastest
    return view('flightsearchresult', compact('results', 'bestPrice', 'fastest', 'request', 'airports','passengers','menu','popularDestinations'));
    }
    /**
     * Show the form for creating a new resource.
     */

     public function showFlightDetails($flightId, Request $request)
     {
         // Retrieve the flight details by flight ID
        
         $flight = Flight::join('airlines', 'flights.airline', '=', 'airlines.airline_code')
             ->join('airports as source_airport', 'flights.source', '=', 'source_airport.airport_code')
             ->join('airports as destination_airport', 'flights.destination', '=', 'destination_airport.airport_code')
             ->where('flights.id', $flightId)
             ->select('flights.*', 'airlines.airline_name', 'source_airport.airport_name as source_airport_name', 'destination_airport.airport_name as destination_airport_name')
             ->first();
        
        Log::info("FlightController",['Flight query' => $flight]);     
         // Get passenger count from the query parameter
         $passengers = $request->query('passengers', 1); // Default to 1 passenger if not provided
        // Get Flight Partner
        $flightpartner = FlightPartner::where('status', 'active')
                                   ->orderBy('updated_at', 'desc')
                                   ->get();
        $menu = FlightDestination::where('status', 'active')
                                   ->orderBy('title', 'desc')
                                   ->get()
                                   ->groupBy('region');  // Group by the 'region' field
        $popularDestinations = FlightDestination::where('status', 'active')
                                   ->orderBy('title', 'desc')
                                   //->limit(5) // Adjust the limit as necessary
                                   ->get();
        
         // Pass the flight and passengers data to the view
         return view('flight-detail', compact('flight', 'passengers','flightpartner', 'request','menu','popularDestinations'));
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
    public function show(Flight $flight)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Flight $flight)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Flight $flight)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Flight $flight)
    {
        //
    }
}
