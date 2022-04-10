<?php

namespace App\Http\Controllers;

use App\Models\resumedetails;
use Illuminate\Http\Request;

class ResumedetailsController extends Controller
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
        return view('Resume.resumepage1');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response 
     */
    public function store(Request $request)
    {
        $detail = new resumedetails();

        $detail->user_id = $request->auth()->id();
        $detail->fullname = $request->input('fullname');
        $detail->phone = $request->input('phone');
        $detail->email = $request->input('email');
        $detail->address = $request->input('address');
        $detail->save();
        return redirect()->route('education.resumepage2');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\resumedetail  $resumedetail
     * @return \Illuminate\Http\Response
     */
    public function show(resumedetail $resumedetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\resumedetail  $resumedetail
     * @return \Illuminate\Http\Response
     */
    public function edit(resumedetail $resumedetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\resumedetail  $resumedetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, resumedetail $resumedetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\resumedetail  $resumedetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(resumedetail $resumedetail)
    {
        //
    }
}
