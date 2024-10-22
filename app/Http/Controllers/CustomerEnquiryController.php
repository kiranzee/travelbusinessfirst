<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TicketEnquiry;
use App\Models\FlightEnquiry;
use App\Models\HolidayEnquiry;
use App\Models\HotelEnquiry;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

class CustomerEnquiryController extends Controller
{
    //
    public function ticket(){

        $ticket = TicketEnquiry::orderBy('created_at', 'desc')->get(); // 10 records per page
        return view('layouts.customerenquiry.ticketenquiry',compact('ticket'));

    }

    public function cityflight(){

        $cityflight = FlightEnquiry::with('flightDetailsEnquiry')
        ->orderBy('created_at', 'desc')
        ->get();
        return view('layouts.customerenquiry.cityflight', compact('cityflight'));
    }

    public function holidaydeal(){
        $holidaydeal = HolidayEnquiry::orderBy('created_at', 'desc')->get();
        return view('layouts.customerenquiry.holidaydeal',compact('holidaydeal'));

    }
    public function hotel(){
        $hotelEnquiry = HotelEnquiry::orderBy('created_at', 'desc')->get();      
        return view('layouts.customerenquiry.hotel', compact('hotelEnquiry'));
    }
}
