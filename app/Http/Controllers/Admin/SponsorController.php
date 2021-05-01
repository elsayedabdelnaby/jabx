<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\SponsorResource;
use App\Models\Sponsor;
use App\Repositories\SponsorRepositoryInterface;
use App\Traits\ImageTrait;
use Illuminate\Http\Request;

class SponsorController extends Controller
{

    private $sponsorRepository;
    private $image_path;

    use ImageTrait;

    /**
     *@param AdminUserRepositoryInterface
     */
    public function __construct(SponsorRepositoryInterface $sponsorRepository)
    {
        $this->sponsorRepository = $sponsorRepository;
        $this->image_path =  public_path('uploads/images/sponsors') . '/';
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sponsors = $this->sponsorRepository->all();
        return view('admin.sponsors.index', [
            'sponsors' => SponsorResource::collection($sponsors),
            'module' => 'sponsors',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sponsors.create', [
            'module' => 'sponsors',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sponsor = new Sponsor();

        $sponsor->name = $request->name;
        $logo_name = '';
        $logo_file = $this->verifyAndUpload($request, 'logo', $this->image_path, $logo_name);

        if (!is_null($logo_file)) {
            $logo_name = $logo_file;
        }

        $sponsor->logo = $logo_name;
        $sponsor->save();

        return redirect()
            ->route('admin.sponsors.index')
            ->with('status', true)
            ->with('message', 'Sponsor Created Successfully');
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
        return view('admin.sponsors.edit');
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
        //
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
