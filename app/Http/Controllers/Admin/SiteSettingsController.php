<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SiteSettings;
use App\Traits\ImageTrait;
use Illuminate\Http\Request;

class SiteSettingsController extends Controller
{
    private $image_path;

    use ImageTrait;

    public function __construct()
    {
        $this->image_path =  public_path('uploads/images/site_settings') . '/';
    }

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
        $site_settings = SiteSettings::firstOrFail();
        return view('admin.site_settings.edit', compact('site_settings'));
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
        $site_settings = SiteSettings::findOrFail($id);

        $logo_name = $site_settings->logo;
        $favicon_name = $site_settings->favicon;

        $logo_file = $this->verifyAndUpload($request, 'logo', $this->image_path, $logo_name);
        if (!is_null($logo_file)) {
            $logo_name = $logo_file;
        }

        $favicon_file = $this->verifyAndUpload($request, 'favicon', $this->image_path, $favicon_name);
        if (!is_null($favicon_file)) {
            $favicon_name = $favicon_file;
        }

        $site_settings->title = $request->title;
        $site_settings->logo = $logo_name;
        $site_settings->favicon = $favicon_name;
        $site_settings->meta_title = $request->meta_title;
        $site_settings->meta_keywords = $request->meta_keywords;
        $site_settings->meta_description = $request->meta_description;
        $site_settings->save();

        return redirect()
            ->route('admin.sitesettings.edit', $site_settings)
            ->with('status', true)
            ->with('message', 'Site Settings Updated Successfully');
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
