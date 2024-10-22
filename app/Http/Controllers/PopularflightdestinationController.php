<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Popularflightdestination;
use Illuminate\Support\Facades\Auth;


class PopularflightdestinationController extends Controller
{
    //
    // Display the form
    public function create()
    {
        return view('layouts.flightdestinations.create');
    }


    // Handle form submission
    public function store(Request $request)
    {
        // Validate the form data
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'first_class_price' => 'required|numeric',
            'business_class_price' => 'required|numeric',
            'premier_economy_price' => 'required|numeric',
            'economy_price' => 'required|numeric',
            'status' => 'required|in:active,inactive',
        ]);

        // Handle file upload
        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $validated['image'] = $imageName;
        }

        // Add the authenticated user's ID to the validated data
        $validated['user_id'] = Auth::user()->id; // Capture the authenticated user's id

        // Save flight details to the database
        Popularflightdestination::create($validated);

        // Redirect to a success page or back to form with success message
        return redirect()->route('flight-destination.create')->with('success', 'Flight created successfully!');
    }

    public function index()
        {
            // $destinations = PopularFlightDestination::all();
            // return view('flightdestinations.index', compact('destinations'));
        }

}
    
        

   
