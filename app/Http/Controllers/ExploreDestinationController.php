<?php

namespace App\Http\Controllers;

use App\Models\ExploreDestination;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExploreDestinationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $exploredestinations = ExploreDestination::all();
        
        return view('layouts.exploredestination.index', compact('exploredestinations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view ('layouts.exploredestination.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the form data
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image_seo' => 'nullable|string|max:255',
            'price' => 'required|numeric',
            'status' => 'required|in:active,inactive',
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = 'ed_'. time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $imageName);
        }

        ExploreDestination::create([
            
            'title' => $request->input('title'),
            'image' => $imageName,
            'image_seo' => $request->input('image_seo'),
            'price' => $request->input('price'),
            'status' => $request->input('status'),
            'user_id' => Auth::id(),
        ]);
        return redirect()->back()->with('success', 'Explore Destination created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(ExploreDestination $exploreDestination)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $exploredestinations = ExploreDestination::findOrFail($id);
        //dd($ExploreDestination);
        return view('layouts.exploredestination.edit', compact('exploredestinations'));
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
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048' // Image validation
    ]);

    $exploredestinations = ExploreDestination::findOrFail($id);

    // Handle image upload
    if ($request->hasFile('image')) {
        // Delete the old image if a new one is uploaded
        if ($exploredestinations->image && file_exists(public_path('uploads/' . $exploredestinations->image))) {
            unlink(public_path('uploads/' . $exploredestinations->image));
        }

        // Store the new image
        $image = $request->file('image');
        $imageName = 'ed_'. time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('uploads'), $imageName);

        // Update the image field in the database
        $exploredestinations->image = $imageName;
    }

    // Update other fields (excluding image)
    $exploredestinations->image_seo = $request->image_seo;
    $exploredestinations->title = $request->title;
    $exploredestinations->price = $request->price;
    $exploredestinations->status = $request->status;
    $exploredestinations->user_id = Auth::id();

    // Save changes
    $exploredestinations->save();

        return redirect()->route('exploredestination.index')
                         ->with('success', 'Explore Destinations updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $exploredestinations = ExploreDestination::findOrFail($id);
        $exploredestinations->delete();

        return redirect()->route('exploredestination.index')
                         ->with('success', 'Explore Destination deleted successfully');
    }
}
