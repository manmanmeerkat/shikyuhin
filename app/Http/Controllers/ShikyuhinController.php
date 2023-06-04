<?php

namespace App\Http\Controllers;

use App\Models\Shikyuhin;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreShikyuhinRequest;
use App\Http\Requests\UpdateShikyuhinRequest;
use Inertia\Inertia;
use Illuminate\Http\Request;

class ShikyuhinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $shikyuhins = Shikyuhin::searchShikyuhins($request->search)
        ->select('id', 'number', 'location', 'plant', 'furidashi')->get();


        return Inertia::render('Shikyuhin/Index', [
            'shikyuhins' => $shikyuhins,
        ]);
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
     * @param  \App\Http\Requests\StoreShikyuhinRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreShikyuhinRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Shikyuhin  $shikyuhin
     * @return \Illuminate\Http\Response
     */
    public function show(Shikyuhin $shikyuhin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Shikyuhin  $shikyuhin
     * @return \Illuminate\Http\Response
     */
    public function edit(Shikyuhin $shikyuhin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateShikyuhinRequest  $request
     * @param  \App\Models\Shikyuhin  $shikyuhin
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateShikyuhinRequest $request, Shikyuhin $shikyuhin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Shikyuhin  $shikyuhin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shikyuhin $shikyuhin)
    {
        //
    }
}
