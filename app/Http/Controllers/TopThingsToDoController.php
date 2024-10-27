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
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
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
    public function edit($id)
    {
        //
        $topthingstodo = TopThingsToDo::findOrFail($id);
        return view('layouts.topthings.edit', compact('topthingstodo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
       // dd($id);
        //
        $request->validate([
            'title' => 'required|string|max:255',
            
            'image_seo' => 'nullable|string|max:255',
            'short_description' => 'required|string|max:255',
            'price' => 'required|numeric',
            'rating' => 'required|numeric',
            'long_description' => 'nullable|String',
            'status' => 'required|in:active,inactive',
        ]);

        $topthingstodo = TopThingsToDo::findOrFail($id);
        //dd($topthingstodo->image);
        if ($request->hasFile('image')) {
        // Delete the old image if a new one is uploaded
        if ($topthingstodo->image && file_exists(public_path('uploads/' . $topthingstodo->image))) {
            unlink(public_path('uploads/' . $topthingstodo->image));

            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $imageName);

            $topthingstodo->image = $imageName;
        }
    }
        $topthingstodo->title = $request->title;
        $topthingstodo->image_seo = $request->image_seo;
        $topthingstodo->short_description = $request->short_description;
        $topthingstodo->price = $request->price;
        $topthingstodo->rating = $request->rating;
        $topthingstodo->Long_description = $request->long_description;
        $topthingstodo->status = $request->status;
        $topthingstodo->user_id = Auth::id();
// Save changes
$topthingstodo->save();

return redirect()->route('topthingstodo.index')
                 ->with('success', 'Top Things To Do updated successfully');
        

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TopThingsToDo $topThingsToDo)
    {
        //
    }
}
