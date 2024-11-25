<?php

namespace App\Http\Controllers;

use App\Models\HotelEnquiry;
use App\Models\FlightDestination;
use App\Models\FlightPartner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail; // Import the Mail facade
use App\Mail\HotelEmail; // Import the Mailable
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;

class HotelEnquiryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function hotelEnquiry(Request $request){

        $EnquiryData = [
            'destination' => $request->destination,
            'checkin'=> $request->checkin,
            'checkout'=> $request->checkout,
            'noofnightstay'=> $request->noofnightstay,
            'starhotel'=> $request->hotel_type,
            'Roomtype'=> $request->roomtype,
            'adultcount'=> $request->adultcount,
            'childcount'=> $request->childcount,
            'infantcount'=> $request->infantcount,
            'noofrooms'=> $request->noofrooms,
            'customer_name'=> $request->customer_name,
            'customer_phone'=> $request->customer_phone,
            'customer_email'=> $request->customer_email,
            'customer_comments'=> $request->customer_comments,
           ];
            // Create the ticket enquiry
            $hotelEnquiry = HotelEnquiry::create($EnquiryData);
            $ccRecipient = env('CC_RECIPIENT_EMAIL');       // CC recipient for the second email

                // Send thank-you email to the customer
                Mail::to($request->customer_email)->cc($ccRecipient)->send(new HotelEmail($hotelEnquiry));

                $menu = FlightDestination::where('status', 'active')
                ->orderBy('title', 'asc') // Order destinations alphabetically within each region
                ->get()
                ->groupBy('region');
            
            // Define the fixed region order
$fixedOrder = [
                'Asia',
                'America',
                'Australia and New Zealand',
                'Middle East',
                'Africa',
                'Carribean',
                'Canada',                                    
                'South America',
            ];
            
            // Reorder the grouped data based on the fixed order
$sortedMenu = collect($fixedOrder)->flatMap(function ($region) use ($menu) {
                return $menu->has($region) ? [$region => $menu->get($region)] : [];
            });
        $flightpartner = FlightPartner::where('status','active')
                ->orderBy('updated_at', 'desc')
                ->get();
        $popularDestinations = FlightDestination::where('status', 'active')
                ->orderBy('title', 'desc')
                //->limit(21) // Adjust the limit as necessary
                ->get();
// Return a success response
return view('thankyou',compact('sortedMenu','flightpartner','popularDestinations'));
    }

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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(HotelEnquiry $hotelEnquiry)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HotelEnquiry $hotelEnquiry)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, HotelEnquiry $hotelEnquiry)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HotelEnquiry $hotelEnquiry)
    {
        //
    }
}
