<?php

namespace App\Http\Controllers;

use App\Flats;
use App\Http\Resources\FlatResource;
use Illuminate\Http\Request;

class FlatsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $flat = Flats::where('buildings_id', $id)->get();
        return FlatResource::collection($flat);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Flats  $flats
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $flats = Flats::where('buildings_id', $id)->where('status', 'available')->get();
        return FlatResource::collection($flats);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Flats  $flats
     * @return \Illuminate\Http\Response
     */
    public function edit(Flats $flats)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Flats  $flats
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Flats $flats)
    {
        $flat = Flats::find(1);
        $flat->status = $request->status;
        if($flat->save()){
            // print_r($flats);
            // print_r($request);
            return new FlatResource($flat);
        }
        // $flat->update($flats);
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Flats  $flats
     * @return \Illuminate\Http\Response
     */
    public function destroy(Flats $flats)
    {
        //
    }
}
