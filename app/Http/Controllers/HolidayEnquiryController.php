<?php

namespace App\Http\Controllers;

use App\Models\HolidayEnquiry;
use App\Models\FlightDestination;
use App\Models\FlightPartner;
use Illuminate\Http\Request;
use App\Mail\HolidayMail; // Import the Mailable
use Illuminate\Support\Facades\Mail; // Import the Mail facade
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;

class HolidayEnquiryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
      
        $holidayData = [
        'best_of_activity_id' => $request->bestofactivityId,
        'holiday_date' => $request->holiday_date,
        'customer_name' => $request->cust_name,  // Use full name
        'customer_email' => $request->cust_email,
        'customer_phone' => $request->cust_phone,
        'customer_comments' => $request->cust_comments,
        'latest_offers' => $request->has('latest_offers') ? true : false,  // Set boolean value
       ];
        
        try {
            
        // Create the holiday enquiry
        $holidayEnquiry = HolidayEnquiry::create($holidayData);
        $packagename = $holidayEnquiry->bestofactivity->title;
        
        $ccRecipient = env('CC_RECIPIENT_EMAIL');
            // Send thank-you email to the customer
            Mail::to($request->cust_email)->cc($ccRecipient)->send(new HolidayMail($holidayEnquiry,$packagename));
         // Return a success response
        $menu = FlightDestination::where('status', 'active')
                ->orderBy('title', 'desc')
                ->get()
                ->groupBy('region');
        $flightpartner = FlightPartner::where('status','active')
                ->orderBy('updated_at', 'desc')
                ->get();
        $popularDestinations = FlightDestination::where('status', 'active')
                ->orderBy('title', 'desc')
                //->limit(21) // Adjust the limit as necessary
                ->get();
        // Return a success response
        return view('thankyou',compact('menu','flightpartner','popularDestinations'));
        } catch (\Throwable $th) {
            //throw $th;
            Log::error("Error submitting Ticket Enquiry", ['Error' => $th]);
            return redirect()->back()->with('error', 'An error occurred while submitting the enquiry. Please try again.');
        }
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
    public function show(HolidayEnquiry $holidayEnquiry)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HolidayEnquiry $holidayEnquiry)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, HolidayEnquiry $holidayEnquiry)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HolidayEnquiry $holidayEnquiry)
    {
        //
    }
}
