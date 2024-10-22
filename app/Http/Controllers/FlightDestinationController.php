<?php

namespace App\Http\Controllers;

use App\Models\FlightDestination;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FlightDestinationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        //$destinations = FlightDestination::all();
        $destinations = FlightDestination::with('user')->get();
        
        return view('layouts.flightdestinations.index', compact('destinations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('layouts.flightdestinations.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // Validate the form data
        $request->validate([
            'region' => 'required|string',
            'title' => 'required|string|max:255',
            'heading' => 'required|string|max:255',
            'link_name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif,webp', // Validate image
            'banner_image' => 'nullable|image|mimes:jpg,jpeg,png,gif,webp', // Validate image
            'airline_image1' => 'nullable|image|mimes:jpg,jpeg,png,gif', // Validate airline image
            'airline_image2' => 'nullable|image|mimes:jpg,jpeg,png,gif', // Validate airline image
            'airline_image3' => 'nullable|image|mimes:jpg,jpeg,png,gif', // Validate airline image
            'airline_image4' => 'nullable|image|mimes:jpg,jpeg,png,gif', // Validate airline image
            'airline_image5' => 'nullable|image|mimes:jpg,jpeg,png,gif', // Validate airline image
            'image_seo' => 'nullable|string|max:255',
            'first_class_price' => 'nullable|numeric',
            'business_class_price' => 'nullable|numeric',
            'premier_economy_price' => 'nullable|numeric',
            'economy_price' => 'nullable|numeric',
            'status' => 'required|in:active,inactive',
        ]);

        // Handle image upload for main image
    $imageName = null; // Initialize as null in case no image is uploaded
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('uploads/'.$request->title), $imageName);
    }

     // Handle banner image upload for main image
     $imagebannerName = null; // Initialize as null in case no image is uploaded
     if ($request->hasFile('banner_image')) {
         $imagebanner = $request->file('banner_image');
         $imagebannerName = time().'ban'. '.' . $imagebanner->getClientOriginalExtension();
         $imagebanner->move(public_path('uploads/'.$request->title), $imagebannerName);
     }

    // Handle image upload for airline image1
    $airline_image1Name = null; // Initialize as null in case no airline image is uploaded
    if ($request->hasFile('airline_image1')) {
        $airline_image1 = $request->file('airline_image1');
        $airline_image1Name = time().'1' . '.' . $airline_image1->getClientOriginalExtension();
        $airline_image1->move(public_path('uploads/'.$request->title), $airline_image1Name);
    }
    $airline_image2Name = null; // Initialize as null in case no airline image is uploaded
    if ($request->hasFile('airline_image2')) {
        $airline_image2 = $request->file('airline_image2');
        $airline_image2Name = time().'2' . '.' . $airline_image2->getClientOriginalExtension();
        $airline_image2->move(public_path('uploads/'.$request->title), $airline_image2Name);
    }
    $airline_image3Name = null; // Initialize as null in case no airline image is uploaded
    if ($request->hasFile('airline_image3')) {
        $airline_image3 = $request->file('airline_image3');
        $airline_image3Name = time().'3' . '.' . $airline_image3->getClientOriginalExtension();
        $airline_image3->move(public_path('uploads/'.$request->title), $airline_image3Name);
    }
    $airline_image4Name = null; // Initialize as null in case no airline image is uploaded
    if ($request->hasFile('airline_image4')) {
        $airline_image4 = $request->file('airline_image4');
        $airline_image4Name = time().'4' . '.' . $airline_image4->getClientOriginalExtension();
        $airline_image4->move(public_path('uploads/'.$request->title), $airline_image4Name);
    }
    $airline_image5Name = null; // Initialize as null in case no airline image is uploaded
    if ($request->hasFile('airline_image5')) {
        $airline_image5 = $request->file('airline_image5');
        $airline_image5Name = time().'5' . '.' . $airline_image5->getClientOriginalExtension();
        $airline_image5->move(public_path('uploads/'.$request->title), $airline_image5Name);
    }
        
//dd($imageName,$airline_image4Name);

        FlightDestination::create([
            'region' => $request->input('region'),
            'title' => $request->input('title'),
            'image' => $imageName, // Save the main image name (if uploaded)
            'banner_image' => $imagebannerName,
            'image_seo' => $request->input('image_seo'),
            'banner_image_seo' => $request->input('banner_image_seo'),
            'first_class_price' => $request->input('first_class_price'),
            'business_class_price' => $request->input('business_class_price'),
            'premier_economy_price' => $request->input('premier_economy_price'),
            'economy_price' => $request->input('economy_price'),
            //'airline_image1' => $airline_image1Name,
            'heading' =>$request->input('heading'),
            'link_name' => $request->input('link_name'),
            'airline_image1' => $airline_image1Name,
            'airline_image2' => $airline_image2Name,
            'airline_image3' => $airline_image3Name,
            'airline_image4' => $airline_image4Name,
            'airline_image5' => $airline_image5Name,
            'airline_from1'=> $request->input('airline_from1'),
            'airline_to1'=> $request->input('airline_to1'),
            
            'airline_from2'=> $request->input('airline_from2'),
            'airline_to2'=> $request->input('airline_to2'),
           
            'airline_from3'=>$request->input('airline_from3'),
            'airline_to3'=>$request->input('airline_to3'),
           
            'airline_from4'=>$request->input('airline_from4'),
            'airline_to4'=>$request->input('airline_to4'),
           
            'airline_from5'=> $request->input('airline_from5'),
            'airline_to5'=>$request->input('airline_to5'),
            'airline1_price' => $request->airline1_price,
            'airline2_price' => $request->airline2_price,
            'airline3_price' => $request->airline3_price,
            'airline4_price' => $request->airline4_price,
            'airline5_price' => $request->airline5_price,
            'long_description' => $request->input('long_description'),
            'status' => $request->input('status'),
            'user_id' => Auth::id(),
        ]);
        return redirect()->back()->with('success', 'Flight Destination created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(FlightDestination $flightDestination)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $destination = FlightDestination::findOrFail($id);
        return view('layouts.flightdestinations.edit', compact('destination'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
         // Validate required fields
    $request->validate([
        'title' => 'required|string|max:255',
            'heading' => 'required|string|max:255',
            'link_name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif,webp', // Validate image
            'banner_image' => 'nullable|image|mimes:jpg,jpeg,png,gif,webp', // Validate image
            'airline_image1' => 'nullable|image|mimes:jpg,jpeg,png,gif', // Validate airline image
            'airline_image2' => 'nullable|image|mimes:jpg,jpeg,png,gif', // Validate airline image
            'airline_image3' => 'nullable|image|mimes:jpg,jpeg,png,gif', // Validate airline image
            'airline_image4' => 'nullable|image|mimes:jpg,jpeg,png,gif', // Validate airline image
            'airline_image5' => 'nullable|image|mimes:jpg,jpeg,png,gif', // Validate airline image
            'image_seo' => 'nullable|string|max:255',
            'first_class_price' => 'nullable|numeric',
            'business_class_price' => 'nullable|numeric',
            'premier_economy_price' => 'nullable|numeric',
            'economy_price' => 'nullable|numeric',
            'status' => 'required|in:active,inactive',
    ]);

    $destination = FlightDestination::findOrFail($id);

    // Handle image upload
    if ($request->hasFile('image')) {
        // Delete the old image if a new one is uploaded
        if ($destination->image && file_exists(public_path('uploads/' . $request->title . '/' . $destination->image))) {
            // Delete the existing image
            unlink(public_path('uploads/' . $request->title . '/' . $destination->image));
        }

        // Store the new image
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('uploads/'.$request->title), $imageName);
        // Update the image field in the database
        $destination->image = $imageName;
    }
    // Handle banner_image upload
    if ($request->hasFile('banner_image')) {
        // Delete the old banner_image if a new one is uploaded
        if ($destination->banner_image && file_exists(public_path('uploads/' . $request->title . '/' . $destination->banner_image))) {
            // Delete the existing banner_image
            unlink(public_path('uploads/' . $request->title . '/' . $destination->banner_image));
        }

        // Store the new banner_image
        $banner_image = $request->file('banner_image');
        $banner_imageName = time().'ban' . '.' . $banner_image->getClientOriginalExtension();
        $banner_image->move(public_path('uploads/'.$request->title), $banner_imageName);
        // Update the banner_image field in the database
        $destination->banner_image = $banner_imageName;
    }
    // Handle airline_image1 upload
    if ($request->hasFile('airline_image1')) {
        // Delete the old airline_image1 if a new one is uploaded
        if ($destination->airline_image1 && file_exists(public_path('uploads/' . $request->title . '/' . $destination->airline_image1))) {
            // Delete the existing airline_image1
            unlink(public_path('uploads/' . $request->title . '/' . $destination->airline_image1));
        }

        // Store the new airline_image1
        $airline_image1 = $request->file('airline_image1');
        $airline_image1Name = time().'1' . '.' . $airline_image1->getClientOriginalExtension();
        $airline_image1->move(public_path('uploads/'.$request->title), $airline_image1Name);
        // Update the airline_image1 field in the database
        $destination->airline_image1 = $airline_image1Name;
    }
    // Handle airline_image2 upload
    if ($request->hasFile('airline_image2')) {
        // Delete the old airline_image2 if a new one is uploaded
        if ($destination->airline_image2 && file_exists(public_path('uploads/' . $request->title . '/' . $destination->airline_image2))) {
            // Delete the existing airline_image2
            unlink(public_path('uploads/' . $request->title . '/' . $destination->airline_image2));
        }

        // Store the new airline_image2
        $airline_image2 = $request->file('airline_image2');
        $airline_image2Name = time().'2' . '.' . $airline_image2->getClientOriginalExtension();
        $airline_image2->move(public_path('uploads/'.$request->title), $airline_image2Name);
        // Update the airline_image2 field in the database
        $destination->airline_image2 = $airline_image2Name;
    }
    // Handle airline_image3 upload
    if ($request->hasFile('airline_image3')) {
        // Delete the old airline_image3 if a new one is uploaded
        if ($destination->airline_image3 && file_exists(public_path('uploads/' . $request->title . '/' . $destination->airline_image3))) {
            // Delete the existing airline_image3
            unlink(public_path('uploads/' . $request->title . '/' . $destination->airline_image3));
        }

        // Store the new airline_image3
        $airline_image3 = $request->file('airline_image3');
        $airline_image3Name = time().'3' . '.' . $airline_image3->getClientOriginalExtension();
        $airline_image3->move(public_path('uploads/'.$request->title), $airline_image3Name);
        // Update the airline_image3 field in the database
        $destination->airline_image3 = $airline_image3Name;
    }
    // Handle airline_image4 upload
    if ($request->hasFile('airline_image4')) {
        // Delete the old airline_image4 if a new one is uploaded
        if ($destination->airline_image4 && file_exists(public_path('uploads/' . $request->title . '/' . $destination->airline_image4))) {
            // Delete the existing airline_image4
            unlink(public_path('uploads/' . $request->title . '/' . $destination->airline_image4));
        }

        // Store the new airline_image4
        $airline_image4 = $request->file('airline_image4');
        $airline_image4Name = time().'4' . '.' . $airline_image4->getClientOriginalExtension();
        $airline_image4->move(public_path('uploads/'.$request->title), $airline_image4Name);
        // Update the airline_image4 field in the database
        $destination->airline_image4 = $airline_image4Name;
    }
// Handle airline_image5 upload
if ($request->hasFile('airline_image5')) {
    // Delete the old airline_image5 if a new one is uploaded
    if ($destination->airline_image5 && file_exists(public_path('uploads/' . $request->title . '/' . $destination->airline_image5))) {
        // Delete the existing airline_image5
        unlink(public_path('uploads/' . $request->title . '/' . $destination->airline_image5));
    }

    // Store the new airline_image5
    $airline_image5 = $request->file('airline_image5');
    $airline_image5Name = time().'5' . '.' . $airline_image5->getClientOriginalExtension();
    $airline_image5->move(public_path('uploads/'.$request->title), $airline_image5Name);
    // Update the airline_image5 field in the database
    $destination->airline_image5 = $airline_image5Name;
}

    // Update other fields (excluding image)
    $destination->region = $request->region;
    $destination->title = $request->title;
    $destination->heading = $request->heading;
    $destination->link_name = $request->link_name;
    $destination->image_seo = $request->image_seo ?? $destination->image_seo;
    $destination->banner_image_seo = $request->banner_image_seo ?? $destination->banner_image_seo;
    $destination->first_class_price = $request->first_class_price;
    $destination->business_class_price = $request->business_class_price;
    $destination->premier_economy_price = $request->premier_economy_price ?? $destination->premier_economy_price;
    $destination->economy_price = $request->economy_price ?? $destination->economy_price;
    $destination->region = $request->region;
    $destination->airline_from1 = $request->airline_from1;
    $destination->airline_to1 = $request->airline_to1;
    $destination->airline_from2 = $request->airline_from2;
    $destination->airline_to2 = $request->airline_to2;
    $destination->airline_from3 = $request->airline_from3;
    $destination->airline_to3 = $request->airline_to3;
    $destination->airline_from4 = $request->airline_from4;
    $destination->airline_to4 = $request->airline_to4;
    $destination->airline_from5 = $request->airline_from5;
    $destination->airline_to5 = $request->airline_to5;
    $destination->airline1_price = $request->airline1_price;
    $destination->airline2_price = $request->airline2_price;
    $destination->airline3_price = $request->airline3_price;
    $destination->airline4_price = $request->airline4_price;
    $destination->airline5_price = $request->airline5_price;
    $destination->long_description = $request->long_description;

    $destination->status = $request->status;
    $destination->user_id = Auth::id();

    // Save changes
    $destination->save();

        return redirect()->route('flight-destinations.index')
                         ->with('success', 'Destination updated successfully');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //dd($id);
        $destination = FlightDestination::findOrFail($id);
        $destination->delete();

        return redirect()->route('flight-destinations.index')
                         ->with('success', 'Destination deleted successfully');
    }
}
