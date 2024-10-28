<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FlightDestination;
use App\Models\TopThingsToDo;
use App\Models\HeroSection;
use App\Models\ExploreDestination;
use App\Models\BestOfActivity;
use App\Models\ClientSay;
use App\Models\FlightPartner;
use App\Models\Airport;

class HomepageController extends Controller
{
    //
    public function index(){
    

        $popularFlight = FlightDestination::where('status', 'active')
                                    ->where('homepage_display', true)
                                    ->orderBy('title', 'desc')
                                    ->limit(21) // Adjust the limit as necessary
                                    ->get();
                                    
        $topthingstodo = TopthingsToDo::where('status', 'active')
                                     ->orderBy('title', 'desc')
                                     //->limit(5) // Adjust the limit as necessary
                                     ->get();
        $herosection = HeroSection::where('status', 'active')
                                    ->orderBy('title','desc')
                                    ->get();
        $exploredestination = ExploreDestination::where('status', 'active')
                                    ->orderBy('title','desc')
                                    ->get();
        $bestofactivity = BestOfActivity::where('status', 'active')
                                    ->orderBy('title','desc')
                                    ->get();
        $clientsay = ClientSay::where('status','active')
                                    ->orderBy('name', 'desc')
                                    ->get();
        $flightpartner = FlightPartner::where('status','active')
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
       
        // Pass the popularDestinations variable to the welcome view
        return view('welcome', compact('popularDestinations','topthingstodo','herosection','exploredestination','bestofactivity','clientsay','flightpartner','menu','popularFlight'));
    }

    public function typeahead_destination(Request $request){
        $data = $request->all();
        $query = $data['query'];
        
        
        $filter_data = Airport::select('airport_code', 'airport_name')
                      ->where('airport_name', 'LIKE', '%' . $query . '%')
                      ->orWhere('airport_code', 'LIKE', '%' . $query . '%')
                      ->get();
        
        // Check if data is being retrieved
        if ($filter_data->isEmpty()) {
            return response()->json(['message' => 'No results found'], 404);
        }
        return response()->json($filter_data);
    }

    public function hotel(){
        // if (request()->is('hotel')) {
        //     // The current path is /hotel
        //     $uri = request()->getRequestUri();
        //     dd($uri);
        // }
        
        $popularDestinations = FlightDestination::where('status', 'active')
                            ->orderBy('title', 'desc')
                            //->limit(21) // Adjust the limit as necessary
                            ->get();
                            

        $flightpartner = FlightPartner::where('status','active')
                            ->orderBy('updated_at', 'desc')
                            ->get();
        $menu = FlightDestination::where('status', 'active')
                            ->orderBy('title', 'desc')
                            ->get()
                            ->groupBy('region');  // Group by the 'region' field

// Pass the popularDestinations variable to the welcome view
return view('hotel', compact('popularDestinations','flightpartner','menu'));
    }

    public function aboutus(){

        $popularDestinations = FlightDestination::where('status', 'active')
                            ->orderBy('title', 'desc')
                            //->limit(21) // Adjust the limit as necessary
                            ->get();
                            

        $flightpartner = FlightPartner::where('status','active')
                            ->orderBy('updated_at', 'desc')
                            ->get();
        $menu = FlightDestination::where('status', 'active')
                            ->orderBy('title', 'desc')
                            ->get()
                            ->groupBy('region');  // Group by the 'region' field

        // Pass the popularDestinations variable to the welcome view
        return view('aboutus', compact('popularDestinations','flightpartner','menu'));
    }

    public function termscondition(){
        $popularDestinations = FlightDestination::where('status', 'active')
                            ->orderBy('title', 'desc')
                            //->limit(21) // Adjust the limit as necessary
                            ->get();
                            

        $flightpartner = FlightPartner::where('status','active')
                            ->orderBy('updated_at', 'desc')
                            ->get();
        $menu = FlightDestination::where('status', 'active')
                            ->orderBy('title', 'desc')
                            ->get()
                            ->groupBy('region');  // Group by the 'region' field
    // Pass the popularDestinations variable to the welcome view
        return view('termscondition', compact('popularDestinations','flightpartner','menu'));
    }

    public function privacypolicy(){
        $popularDestinations = FlightDestination::where('status', 'active')
                            ->orderBy('title', 'desc')
                            //->limit(21) // Adjust the limit as necessary
                            ->get();
                            

        $flightpartner = FlightPartner::where('status','active')
                            ->orderBy('updated_at', 'desc')
                            ->get();
        $menu = FlightDestination::where('status', 'active')
                            ->orderBy('title', 'desc')
                            ->get()
                            ->groupBy('region');  // Group by the 'region' field
    // Pass the popularDestinations variable to the welcome view
        return view('privacypolicy', compact('popularDestinations','flightpartner','menu'));
    }

    public function foreigntraveladvice(){
        $popularDestinations = FlightDestination::where('status', 'active')
                ->orderBy('title', 'desc')
                //->limit(21) // Adjust the limit as necessary
                ->get();
                

        $flightpartner = FlightPartner::where('status','active')
                ->orderBy('updated_at', 'desc')
                ->get();
        $menu = FlightDestination::where('status', 'active')
                ->orderBy('title', 'desc')
                ->get()
                ->groupBy('region');  // Group by the 'region' field
        // Pass the popularDestinations variable to the welcome view
        return view('foreigntraveladvice', compact('popularDestinations','flightpartner','menu'));
    }
}
