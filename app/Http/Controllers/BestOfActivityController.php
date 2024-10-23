<?php

namespace App\Http\Controllers;

use App\Models\BestOfActivity;
use App\Models\FlightDestination;
use App\Models\FlightPartner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BestOfActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $bestofactivity = BestOfActivity::all();
        
        return view('layouts.bestofactivity.index', compact('bestofactivity'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view ('layouts.bestofactivity.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
         // Validate the form data
         $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'image_seo' => 'nullable|string|max:255',
            'price' => 'required|numeric',
            'rating'=> 'required|numeric',
            'rating_count'=> 'required|numeric',
            'package_heading'=> 'required|string',
            'long_description' => 'nullable|string',
            'status' => 'required|in:active,inactive',
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = 'BA_'. time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $imageName);
        }

        BestOfActivity::create([
            
            'title' => $request->input('title'),
            'image' => $imageName,
            'image_seo' => $request->input('image_seo'),
            'long_description' => $request->input('long_description'),
            'cancellation'=> $request->input('cancellation'),
            'price' => $request->input('price'),
            'rating' => $request->input('rating'),
            'rating_count' => $request->input('rating_count'),
            'package_heading' => $request->input('package_heading'),
            'status' => $request->input('status'),
            'user_id' => Auth::id(),
        ]);
        return redirect()->back()->with('success', 'Best Of Activities created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(BestOfActivity $bestOfActivity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $bestofactivity = BestOfActivity::findOrFail($id);
        //dd($ExploreDestination);
        return view('layouts.bestofactivity.edit', compact('bestofactivity'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        // Validate required fields
    $request->validate([
        'title' => 'required|string|max:255',
        'image_seo' => 'required|string|max:255',
        'price' => 'required|numeric',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048', // Image validation
        'rating' => 'required|numeric',
        'rating_count' => 'required|numeric',
        'package_heading' => 'required|string',
        'long_description' => 'nullable|string',
        'status' => 'required|in:active,inactive',
    ]);

    $bestofactivity = BestOfActivity::findOrFail($id);

    // Handle image upload
    if ($request->hasFile('image')) {
        // Delete the old image if a new one is uploaded
        if ($bestofactivity->image && file_exists(public_path('uploads/' . $bestofactivity->image))) {
            unlink(public_path('uploads/' . $bestofactivity->image));
        }

        // Store the new image
        $image = $request->file('image');
        $imageName = 'BA_'. time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('uploads'), $imageName);

        // Update the image field in the database
        $bestofactivity->image = $imageName;
    }

    // Update other fields (excluding image)
    $bestofactivity->image_seo = $request->image_seo;
    $bestofactivity->title = $request->title;
    $bestofactivity->price = $request->price;
    $bestofactivity->rating = $request->rating;
    $bestofactivity->rating_count = $request->rating_count;
    $bestofactivity->package_heading = $request->package_heading;
    $bestofactivity->cancellation = $request->cancellation;
    $bestofactivity->long_description = $request->long_description;
    $bestofactivity->status = $request->status;
    $bestofactivity->user_id = Auth::id();

    // Save changes
    $bestofactivity->save();

        return redirect()->route('bestofactivity.index')
                         ->with('success', 'Best Of Activity updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $bestofactivity = BestOfActivity::findOrFail($id);
        $bestofactivity->delete();

        return redirect()->route('bestofactivity.index')
                         ->with('success', 'Best Of Activity deleted successfully');
    }

    public function showHolidayDeals($title,$id)
    {
        $bestofactivity = BestOfActivity::findOrFail($id);

        $flightpartner = FlightPartner::where('status','active')
                        ->orderBy('updated_at', 'desc')
                        ->get();

        $menu = FlightDestination::where('status', 'active')
                                    ->orderBy('title', 'desc')
                                    ->get()
                                    ->groupBy('region');  // Group by the 'region' field
        $footermenu = FlightDestination::where('status', 'active')
                                    ->orderBy('title', 'desc')
                                    ->get()
                                    ->groupBy('region');  // Group by the 'region' field
        return view('holidaydeal', compact('menu', 'footermenu','bestofactivity','flightpartner'));
    }
}