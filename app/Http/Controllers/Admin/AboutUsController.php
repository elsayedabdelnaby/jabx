<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Traits\ImageTrait;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    private $image_path;

    use ImageTrait;

    public function __construct()
    {
        $this->image_path =  public_path('uploads/images/aboutus') . '/';
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $aboutus = AboutUs::firstOrFail();
        return view('admin.aboutus.edit', compact('aboutus'));
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
        $aboutus = AboutUs::findOrFail($id);

        $banner_name = $aboutus->banner;
        $main_section_image_name = $aboutus->main_section_image;

        $banner_file = $this->verifyAndUpload($request, 'banner', $this->image_path, $banner_name);
        if (!is_null($banner_file)) {
            $banner_name = $banner_file;
        }

        $main_section_image_file = $this->verifyAndUpload($request, 'main_section_image', $this->image_path, $main_section_image_name);
        if (!is_null($main_section_image_file)) {
            $main_section_image_name = $main_section_image_file;
        }

        $aboutus->ourmission = $request->ourmission;
        $aboutus->why_choose_us = $request->why_choose_us;
        $aboutus->what_we_do = $request->what_we_do;
        $aboutus->main_section_title = $request->main_section_title;
        $aboutus->main_section_description = $request->main_section_description;
        $aboutus->projects_number = $request->projects_number;
        $aboutus->users_number = $request->users_number;
        $aboutus->awards_number = $request->awards_number;
        $aboutus->meta_title = $request->meta_title;
        $aboutus->meta_keywords = $request->meta_keywords;
        $aboutus->meta_description = $request->meta_description;
        $aboutus->banner = $banner_name;
        $aboutus->main_section_image = $main_section_image_name;
        $aboutus->save();

        return redirect()
            ->route('admin.aboutus.edit', $aboutus)
            ->with('status', true)
            ->with('message', 'About Us Updated Successfully');
    }
}
