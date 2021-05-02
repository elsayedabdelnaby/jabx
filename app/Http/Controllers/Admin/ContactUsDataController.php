<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactUsData;
use Illuminate\Http\Request;

class ContactUsDataController extends Controller
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
        //
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
        $contact_us_data = ContactUsData::findOrFail($id);
        return view('admin.contact_us_data.edit', compact('contact_us_data'));
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
        $contact_us_data = ContactUsData::findOrFail($id);
        $contact_us_data->address_title = $request->address_title;
        $contact_us_data->address_link = $request->address_link;
        $contact_us_data->working_times = $request->working_times;
        $contact_us_data->phone_1 = $request->phone_1;
        $contact_us_data->phone_2 = $request->phone_2;
        $contact_us_data->email = $request->email;
        $contact_us_data->facebook_link = $request->facebook_link;
        $contact_us_data->instagram_link = $request->instagram_link;
        $contact_us_data->twitter_link = $request->twitter_link;
        $contact_us_data->linkedin_link = $request->linkedin_link;
        $contact_us_data->save();

        return redirect()
            ->route('admin.contactusdata.edit', $contact_us_data)
            ->with('status', true)
            ->with('message', 'Contact Us Data Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
