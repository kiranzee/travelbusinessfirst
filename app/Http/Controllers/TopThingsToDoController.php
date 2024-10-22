<?php

namespace App\Http\Controllers;

use App\Models\TopThingsToDo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TopThingsToDoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $topthingstodo = TopThingsToDo::all();
        
        return view('layouts.topthings.index', compact('topthingstodo'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view ('layouts.topthings.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
         // Validate the form data
         $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image_seo' => 'nullable|string|max:255',
            'short_description' => 'required|string|max:255',
            'price' => 'required|numeric',
            'rating' => 'required|numeric',
            'long_description' => 'nullable|String',
            'status' => 'required|in:active,inactive',
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $imageName);
        }

        TopThingsToDo::create([
            'title' => $request->input('title'),
            'image' => $imageName,
            'image_seo' => $request->input('image_seo'),
            'short_description' => $request->input('short_description'),
            'price' => $request->input('price'),
            'rating' => $request->input('rating'),
            'long_description' => $request->input('long_description'),
            'status' => $request->input('status'),
            'user_id' => Auth::id(),
        ]);
        return redirect()->back()->with('success', 'Top Things created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(TopThingsToDo $topThingsToDo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TopThingsToDo $topThingsToDo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TopThingsToDo $topThingsToDo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TopThingsToDo $topThingsToDo)
    {
        //
    }
}
