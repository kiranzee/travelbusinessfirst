<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail; // Import the Mail facade
use App\Mail\ThankYouEmail; // Import the Mailable
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;
use App\Models\TicketEnquiry;
use App\Models\FlightDestination;
use App\Models\FlightPartner;

class TicketEnquiryController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function ticketFlightEnquiry(Request $request){
        
        $fullName = $request->customer_firstname . ' ' . $request->customer_lastname;
        $EnquiryData = [
        'flight_id' => $request->flightId,
        'customer_name' => $fullName,  // Use full name
        'customer_email' => $request->customer_email,
        'customer_phone' => $request->customer_phone,
        'source' => $request->source,
        'destination' => $request->destination,
        'departure_date' => $request->departureDate,
        'return_date' => $request->returnDate,
        'passengers' => $request->passengers,
        'class_type' => $request->classType,
       ];
        
        try {
            // Combine first name and last name
       //dd($ticketEnquiry);
            // Create a new ticket enquiry record
            //dd($fullName);
        // Create the ticket enquiry
        $ticketEnquiry = TicketEnquiry::create($EnquiryData);
        $ccRecipient = env('CC_RECIPIENT_EMAIL');       // CC recipient for the second email

            // Send thank-you email to the customer
            Mail::to($request->customer_email)->cc($ccRecipient)->send(new ThankYouEmail($ticketEnquiry));
            
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

    public function index()
    {
        //
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
    public function show(TicketEnquiry $ticketEnquiry)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TicketEnquiry $ticketEnquiry)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TicketEnquiry $ticketEnquiry)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TicketEnquiry $ticketEnquiry)
    {
        //
    }
}
