<?php

namespace App\Http\Controllers;

use App\Models\ClientSay;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientSayController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $clientsay = ClientSay::all();
        return view('layouts.clientsay.index', compact('clientsay'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('layouts.clientsay.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required|string|max:255',
            'comments' => 'required|string|max:1000',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'rating'=> 'required|numeric'
        ]);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = 'CLIENT_'. time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $imageName);
        }

        $clientsay = ClientSay::create([
            'name'=> $request->name,
            'comments'=> $request->comments,
            'image'=> $imageName,
            'rating'=> $request->rating,
            'user_id' => Auth::id(),
        ]);
        return redirect()->back()->with('success','Client comments created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(ClientSay $clientSay)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $clientsay = ClientSay::findOrFail($id);
        //dd($ExploreDestination);
        return view('layouts.clientsay.edit', compact('clientsay'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
       // Validate required fields
    $request->validate([
        'name' => 'required|string|max:255',
        'comments' => 'required|string|max:1000',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Image validation
        'rating' => 'required|numeric',
        'status' => 'required|in:active,inactive',
    ]);

    $clientsay = ClientSay::findOrFail($id);

    // Handle image upload
    if ($request->hasFile('image')) {
        // Delete the old image if a new one is uploaded
        if ($clientsay->image && file_exists(public_path('uploads/' . $clientsay->image))) {
            unlink(public_path('uploads/' . $clientsay->image));
        }

        // Store the new image
        $image = $request->file('image');
        $imageName = 'CLIENT_'. time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('uploads'), $imageName);

        // Update the image field in the database
        $clientsay->image = $imageName;
    }

    // Update other fields (excluding image)
    
    $clientsay->name = $request->name;
    $clientsay->comments = $request->comments;
    $clientsay->rating = $request->rating;   
    $clientsay->status = $request->status;
    $clientsay->user_id = Auth::id();

    // Save changes
    $clientsay->save();

        return redirect()->route('clientsay.index')
                         ->with('success', 'Client Comments updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ClientSay $clientSay)
    {
        //
        $clientsay = clientsay::findOrFail($id);
        $clientsay->delete();

        return redirect()->route('clientsay.index')
                         ->with('success', 'Client comment deleted successfully');
    }
}
