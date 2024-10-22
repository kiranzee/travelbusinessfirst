<?php

namespace App\Http\Controllers;

use App\Models\FlightPartner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FlightPartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $flightpartner = FlightPartner::all();
        return view('layouts.flightpartner.index', compact('flightpartner'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('layouts.flightpartner.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = 'FP_'. time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/partners'), $imageName);
        }

        $flightpartner = FlightPartner::create([
            'image' => $imageName,
            'status' => $request->status,
            'user_id' => Auth::id(),
        ]);

        return redirect()->back()->with('success','Flight Partner Added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(FlightPartner $flightPartner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $flightpartner = FlightPartner::findorFail($id);
        return view ('layouts.flightpartner.edit', compact('flightpartner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validate required fields
    $request->validate([
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Image validation
        'status' => 'required|in:active,inactive',
    ]);

    $flightpartner = FlightPartner::findorFail($id);
     // Handle image upload
     if ($request->hasFile('image')) {
        // Delete the old image if a new one is uploaded
        if ($flightpartner->image && file_exists(public_path('uploads/partners' . $flightpartner->image))) {
            unlink(public_path('uploads/partners' . $flightpartner->image));
        }

        // Store the new image
        $image = $request->file('image');
        $imageName = 'FP_'. time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('uploads/partners'), $imageName);

        // Update the image field in the database
        $flightpartner->image = $imageName;
    }

    // Update other fields (excluding image)
    
      
    $flightpartner->status = $request->status;
    $flightpartner->user_id = Auth::id();

    // Save changes
    $flightpartner->save();

        return redirect()->route('flightpartner.index')
                         ->with('success', 'Flight Partner updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $flightpartner = FlightPartner::findOrFail($id);
        $flightpartner->delete();

        return redirect()->route('flightpartner.index')
                         ->with('success', 'Flight Partner deleted successfully');
    }
}
