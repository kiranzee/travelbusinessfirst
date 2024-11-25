<?php

namespace App\Http\Controllers;

use App\Models\FlightEnquiry;
use Illuminate\Http\Request;
use App\Models\FlightDetailsEnquiry;
use App\Models\FlightPartner;
use App\Models\FlightDestination;

use App\Mail\EnquiryThankYouMail; // Import the Mailable
use Illuminate\Support\Facades\Mail; // Import the Mail facade
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;

class FlightEnquiryController extends Controller
{

    public function submitQuery(Request $request)
    {
        
        // Validate the input data
    //    $request->validate([
    //     'from' => 'required|array',
    //     'to' => 'required|array',
    //     'departure_date' => 'required|array',
    //     //'return_date' => 'required|array',
    //     'passengers' => 'required|string',
    //     //'class_type' => 'required|string',
    //     'customer_name' => 'required|string|max:255',
    //     'customer_email' => 'required|email',
    //     'customer_phone' => 'required|string|max:10',
    //     'customer_comments' => 'nullable|string',
    //     'latest_offers' => 'nullable|boolean',
    // ]);
   
    $classtype ='';
  
    if($request->input('cabin_class_1')){
       $classtype = $request->input('cabin_class_1');
    }
    if($request->input('cabin_class_2')){
        $classtype = $request->input('cabin_class_2');
     }
     if($request->input('cabin_class_3')){
        $classtype = $request->input('cabin_class_3');
     }
     
     
   
    // Create the flight enquiry record
    $enquiryData = [
        'customer_name' => $request->customer_name,
        'customer_email' => $request->customer_email,
        'customer_phone' => $request->customer_phone,
        'customer_comments' => $request->customer_comments,
        'passengers' => $request->passengers,
        'class_type' => $classtype,
        'latest_offers' =>  $request->input('latest_offers') === 'on' ? true : false,  // Set boolean value
    ];
    //dd($enquiryData);
    $flightDetailsEnquiry = [];
    foreach ($request->from as $index => $from) {
        
        $to = $request->to[$index];
        $departdate = Carbon::createFromFormat('D, d M y', $request->departure_date[$index])->format('Y-m-d');
        
        if($request->return_date){
            $returndate = Carbon::createFromFormat('D, d M y', $request->return_date[$index])->format('Y-m-d');
        }else{
            $returndate = null;
        }
               
        $flightDetailsEnquiry[] = [
            'from' => $from,
            'to' => $to,
            'departure_date' => $departdate,
            'return_date' =>$returndate,
        ];
}
//dd($flightDetailsEnquiry);
try {
    //code...
    $flightEnquiry = FlightEnquiry::create($enquiryData);
    $flightEnquiry->flightDetailsEnquiry()->createMany($flightDetailsEnquiry);
    $ccRecipient = env('CC_RECIPIENT_EMAIL');       // CC recipient for the second email
    // Send thank-you email to the customer
    Mail::to($request->customer_email)->cc($ccRecipient)->send(new EnquiryThankYouMail($flightEnquiry));
    // // Return a success response
   // return response()->json([        'success' => true,        'message' => 'Enquiry submitted successfully! A confirmation email has been sent.',    ]);
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
        //dd($request->customer_email);
        return view('thankyou',compact('sortedMenu','flightpartner','popularDestinations'));
} catch (\Throwable $th) {
    //throw $th;
    Log::info("Error", ['message' => $th]);  
}
// try {
//     $flightEnquiry = FlightEnquiry::create($enquiryData);
//     $flightEnquiry->flightDetailsEnquiry()->createMany($flightDetailsEnquiry);

// // Send thank-you email to the customer
// Mail::to($request->customer_email)->send(new EnquiryThankYouMail($flightEnquiry));

// // Return a success response
// return response()->json([
//     'success' => true,
//     'message' => 'Enquiry submitted successfully! A confirmation email has been sent.',
// ]);


// } catch (\Throwable $th) {
//     dd($th);   
// return '';
//}

    
    }

    


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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(FlightEnquiry $flightEnquiry)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FlightEnquiry $flightEnquiry)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FlightEnquiry $flightEnquiry)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FlightEnquiry $flightEnquiry)
    {
        //
    }
}
