<?php

namespace App\Http\Controllers;

use App\Http\Resources\RenterResource;
use App\Renters;
use Illuminate\Http\Request;

class RentersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
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
        $renter = new Renters();
        $renter->name = $request->name;
        $renter->mobile = $request->phone;
        $renter->location = $request->location;
        $renter->address = $request->address;
        $renter->nid = $request->nid;
        $renter->buildings_id = $request->buildings_id;
        $renter->flats_id = $request->flats_id;
        $renter->price = $request->rent;

        if($renter->save()){
            return new RenterResource($renter);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Renters  $renters
     * @return \Illuminate\Http\Response
     */
    public function show(Renters $renters)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Renters  $renters
     * @return \Illuminate\Http\Response
     */
    public function edit(Renters $renters)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Renters  $renters
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Renters $renters)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Renters  $renters
     * @return \Illuminate\Http\Response
     */
    public function destroy(Renters $renters)
    {
        //
    }
}
