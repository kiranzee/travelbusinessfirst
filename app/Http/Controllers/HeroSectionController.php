<?php

namespace App\Http\Controllers;

use App\Models\HeroSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HeroSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $herosection = HeroSection::all();
        
        return view('layouts.hero.index', compact('herosection'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view ('layouts.hero.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // Validate the form data
        $request->validate([
            'heading' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'title' => 'nullable|string|max:255',
            'description' => 'required|string|max:255',
            'status' => 'required|in:active,inactive',
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $imageName);
        }

        HeroSection::create([
            'heading' => $request->input('heading'),
            'title' => $request->input('title'),
            'image' => $imageName,
            'description' => $request->input('description'),
            'status' => $request->input('status'),
            'user_id' => Auth::id(),
        ]);
        return redirect()->back()->with('success', 'Hero Section created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(HeroSection $heroSection)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $herosection = HeroSection::findOrFail($id);
        //dd($herosection);
        return view('layouts.hero.edit', compact('herosection'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        // Validate required fields
    $request->validate([
        'heading' => 'required|string|max:255',
        'title' => 'required|string|max:255',
        'description' => 'required|string|max:255',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048' // Image validation
    ]);

    $herosection = HeroSection::findOrFail($id);

    // Handle image upload
    if ($request->hasFile('image')) {
        // Delete the old image if a new one is uploaded
        if ($herosection->image && file_exists(public_path('uploads/' . $herosection->image))) {
            unlink(public_path('uploads/' . $herosection->image));
        }

        // Store the new image
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('uploads'), $imageName);

        // Update the image field in the database
        $herosection->image = $imageName;
    }

    // Update other fields (excluding image)
    $herosection->heading = $request->heading;
    $herosection->title = $request->title;
    $herosection->description = $request->description;
    $herosection->status = $request->status;

    // Save changes
    $herosection->save();

        return redirect()->route('hero.index')
                         ->with('success', 'Hero Section Banner updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HeroSection $heroSection)
    {
        //
        $herosection = HeroSection::findOrFail($id);
        $herosection->delete();

        return redirect()->route('hero.index')
                         ->with('success', 'Hero Section Banner deleted successfully');
    }
}
