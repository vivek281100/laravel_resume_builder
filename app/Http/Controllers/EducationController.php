<?php

namespace App\Http\Controllers;

use App\Models\education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('education.resumepage2');
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
     * @param  \App\Models\education  $education
     * @return \Illuminate\Http\Response
     */
    public function show(education $education)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\education  $education
     * @return \Illuminate\Http\Response
     */
    public function edit(education $education)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\education  $education
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, education $education)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\education  $education
     * @return \Illuminate\Http\Response
     */
    public function destroy(education $education)
    {
        //
    }
}
