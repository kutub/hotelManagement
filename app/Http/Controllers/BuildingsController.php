<?php

namespace App\Http\Controllers;

use App\Buildings;
use Illuminate\Http\Request;
use App\Http\Resources\BuildingResource;

class BuildingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buildings = Buildings::all();
        return BuildingResource::collection($buildings);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $buildings = new Buildings();
        $buildings->name = $request->name;
        $buildings->image = $request->image;
        $buildings->address = $request->address;
        $buildings->landmark = $request->landmark;
        $buildings->totalFlat = $request->totalFlat;
        $buildings->totalFloor = $request->totalFloor;
        $buildings->gatekeeper = $request->gatekeeper;
        $buildings->mobile = $request->mobile;

        if($buildings->save()){
            return new BuildingResource($buildings);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Buildings  $buildings
     * @return \Illuminate\Http\Response
     */
    public function show(Buildings $buildings)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Buildings  $buildings
     * @return \Illuminate\Http\Response
     */
    public function edit(Buildings $buildings)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Buildings  $buildings
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Buildings $buildings)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Buildings  $buildings
     * @return \Illuminate\Http\Response
     */
    public function destroy(Buildings $buildings)
    {
        //
    }
}
