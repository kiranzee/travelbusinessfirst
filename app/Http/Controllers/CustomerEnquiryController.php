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
use Illuminate\Support\Facades\Auth;

class CustomerEnquiryController extends Controller
{
    //
    public function ticket(){
        if (request()->has('srch')) {
            $searchTerm = request('srch', '');
            $ticket = TicketEnquiry::where(function ($query) use ($searchTerm) {
                $query->where('customer_phone', 'like', '%' . $searchTerm . '%')
                      ->orWhere('customer_email', 'like', '%' . $searchTerm . '%')
                      ->orWhere('customer_name', 'like', '%' . $searchTerm . '%')
                      ->orWhere('status', 'like', '%' . $searchTerm . '%')
                      ->orWhere('flight_id', 'like', '%' . $searchTerm . '%');
            })->get();
        } else {
            $ticket = TicketEnquiry::orderBy('created_at', 'desc')->get();
        }
        return view('layouts.customerenquiry.ticketenquiry',compact('ticket'));

    }

    public function cityflight(){
        if (request()->has('srch')) {
            $searchTerm = request('srch', '');
            $cityflight = FlightEnquiry::where(function ($query) use ($searchTerm) {
                $query->where('customer_phone', 'like', '%' . $searchTerm . '%')
                      ->orWhere('customer_email', 'like', '%' . $searchTerm . '%')
                      ->orWhere('customer_name', 'like', '%' . $searchTerm . '%');
            })->get();
        } else {
            $cityflight = FlightEnquiry::orderBy('created_at', 'desc')->get();
        }
        return view('layouts.customerenquiry.cityflight', compact('cityflight'));
    }

    public function holidaydeal(){
        if (request()->has('srch')) {
            $searchTerm = request('srch', '');
            $holidaydeal = HolidayEnquiry::where(function ($query) use ($searchTerm) {
                $query->where('customer_phone', 'like', '%' . $searchTerm . '%')
                      ->orWhere('customer_email', 'like', '%' . $searchTerm . '%')
                      ->orWhere('customer_name', 'like', '%' . $searchTerm . '%');
            })->get();
        } else {
            $holidaydeal = HolidayEnquiry::orderBy('created_at', 'desc')->get();
        }
        return view('layouts.customerenquiry.holidaydeal',compact('holidaydeal'));

    }
    public function hotel(){
        if (request()->has('srch')) {
            $searchTerm = request('srch', '');
            $hotelEnquiry = HotelEnquiry::where(function ($query) use ($searchTerm) {
                $query->where('customer_phone', 'like', '%' . $searchTerm . '%')
                      ->orWhere('customer_email', 'like', '%' . $searchTerm . '%')
                      ->orWhere('customer_name', 'like', '%' . $searchTerm . '%');
            })->get();
        } else {
            $hotelEnquiry = HotelEnquiry::orderBy('created_at', 'desc')->get();
        }
        return view('layouts.customerenquiry.hotel', compact('hotelEnquiry'));
    }

    public function updateStatus(Request $request)    {      
        
        $modelClass = $request->model;

        $modelClass = 'App\Models\\' . $modelClass;
    
        // Find the ticket and update status
        try {

            // Check if the model class is valid and is a subclass of Eloquent Model
        if (!class_exists($modelClass) || !is_subclass_of($modelClass, \Illuminate\Database\Eloquent\Model::class)) {
           // return response()->json(['message' => 'Invalid model class provided.'], 400);
           \Log::info('IF condition Model class received:', ['model' => $modelClass]);
        }
            // Find the ticket and update the status
            $ticket = $modelClass::findOrFail($request->ticket_id);
            $ticket->status = $request->status;
            $ticket->save();           
            return response()->json([
                'success' => true,
                'message' => 'Ticket status updated successfully.',
            ]);
        } catch (\Exception $e) {
            // Log the error and return a response     
        return response()->json(['message' => 'Failed to update ticket status Kiran.'], 500);
        }
    }

    public function updateSalesAmount(Request $request){
        $modelClass = $request->model;
        $modelClass = 'App\Models\\' . $modelClass;
        try {
            //code...
            if (!class_exists($modelClass) || !is_subclass_of($modelClass, \Illuminate\Database\Eloquent\Model::class)) {
                // return response()->json(['message' => 'Invalid model class provided.'], 400);
                \Log::info('IF condition Model class received:', ['model' => $modelClass]);
             }
            //  // Find the ticket and update the status
             $ticket = $modelClass::findOrFail($request->ticket_id);
             $ticket->sales_amount = $request->sales_amount;
             $ticket->user_id = Auth::id();
             $ticket->save();           
             return response()->json([
                'success' => true,
                'message' => 'Successfully updated Ticket ID: '.$ticket->id,
            ]);
        } catch (\Throwable $th) {
            //throw $th;
            dd($th);
        }
    }
}
