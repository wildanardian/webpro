<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateRestaurantRequest;
use App\Models\Restaurant;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $restaurants = Restaurant::all();
        return view('layouts.my-restaurant.index', ['restaurants' => $restaurants]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.my-restaurant.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        // dd($request->all());

        $validator = Validator::make(request()->all(), [
            'name' => 'required|min:3|max:255',
            'description' => 'required|min:3|max:255',
            'address' => 'required|min:3|max:255',
            'opening_day_from' => 'required',
            'opening_day_to' => 'required',
            'opening_hour_from' => 'required',
            'opening_hour_to' => 'required',
            'contact' => 'required|min:3|max:255',
            // 'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        if($request->opening_day_from == "" || $request->opening_day_to == "") {
            return redirect()->back()->with('error', 'Opening day is required.');
        }

        if($request->opening_hour_from == "" || $request->opening_hour_to == "") {
            return redirect()->back()->with('error', 'Opening hour is required.');
        }

        // if($request->hasFile('image')) {
        //     $request->image->storeAs('public/images', $request->image->hashName());
        // }

        Restaurant::create([
            'name' => $request->name,
            'description' => $request->description,
            'address' => $request->address,
            'opening_day_from' => $request->opening_day_from,
            'opening_day_to' => $request->opening_day_to,
            'opening_hour_from' => $request->opening_hour_from,
            'opening_hour_to' => $request->opening_hour_to,
            'contact' => $request->contact,
            // 'image' => $request->image->hashName(),
        ]);

        return redirect('/restaurant')->with('success', 'Restaurant created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Restaurant $restaurant)
    {
        $id = $restaurant->id;
        $restaurant = Restaurant::find($id);
        return view('layouts.my-restaurant.detail', ['restaurant' => $restaurant]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Restaurant $restaurant)
    {
        $id = $restaurant->id;
        $restaurant = Restaurant::find($id);
        return view('layouts.my-restaurant.edit', ['restaurant' => $restaurant]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRestaurantRequest $request, Restaurant $restaurant)
    {
        $id = $restaurant->id;
        $restaurant = Restaurant::find($id);

        $validator = Validator::make(request()->all(), [
            'name' => 'required|unique:restaurants|min:3|max:255',
            'description' => 'required|min:3|max:255',
            'address' => 'required|min:3|max:255',
            'opening_day_from' => 'required',
            'opening_day_to' => 'required',
            'opening_hour_from' => 'required',
            'opening_hour_to' => 'required',
            'contact' => 'required|min:3|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        }

        $restaurant->name = $request->name;
        $restaurant->description = $request->description;
        $restaurant->address = $request->address;
        $restaurant->opening_day_from = $request->opening_day_from;
        $restaurant->opening_day_to = $request->opening_day_to;
        $restaurant->opening_hour_from = $request->opening_hour_from;
        $restaurant->opening_hour_to = $request->opening_hour_to;
        $restaurant->contact = $request->contact;
        $restaurant->image = $request->image;
        $restaurant->save();

        return redirect()->route('restaurant')->with('success', 'Restaurant updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Restaurant $restaurant)
    {
        //
    }
}
