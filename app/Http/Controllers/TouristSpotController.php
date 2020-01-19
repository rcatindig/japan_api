<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\TouristSpot;

use App\City;

class TouristSpotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = TouristSpot::select('tourist_spots.*','cities.name as city_name')
                    ->orderBy('name', 'ASC')
                    ->leftJoin('cities','tourist_spots.city_id', '=', 'cities.id')
                    ->get();

        return view('admin.tourist_spots.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cities = City::pluck('name','id')->toArray();
        return view('admin.tourist_spots.create', compact('cities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, TouristSpot::rules());

        
        TouristSpot::create($request->all());

        return back()->withSuccess(trans('app.success_store'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = TouristSpot::findOrFail($id);
        $cities = City::pluck('name','id')->toArray();

        return view('admin.tourist_spots.edit', compact('item','cities'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, TouristSpot::rules(true, $id));

        $item = TouristSpot::findOrFail($id);

        $item->update($request->all());

        return redirect()->route(ADMIN . '.tourist_spots.index')->withSuccess(trans('app.success_update'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        TouristSpot::destroy($id);

        return back()->withSuccess(trans('app.success_destroy')); 
    }

    
}
