<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\SliderResource;
use App\Models\Slider;
use App\Repositories\SliderRepositoryInterface;
use App\Traits\ImageTrait;
use Illuminate\Http\Request;
use File;

class SliderController extends Controller
{

    private $sliderRepository;
    private $image_path;

    use ImageTrait;

    /**
     *@param SliderRepositoryInterface
     */
    public function __construct(SliderRepositoryInterface $sliderRepository)
    {
        $this->sliderRepository = $sliderRepository;
        $this->image_path =  public_path('uploads/images/sliders') . '/';
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = $this->sliderRepository->all();

        return view('admin.sliders.index', [
            'sliders' => SliderResource::collection($sliders),
            'module' => 'sliders',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sliders.create', [
            'module' => 'sliders',
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
        $slider = new Slider();

        $slider->name = $request->name;
        if ($request->is_active) {
            $slider->is_active = 1;
        } else {
            $slider->is_active = 0;
        }
        $image_name = '';
        $image_file = $this->verifyAndUpload($request, 'image', $this->image_path, $image_name);

        if (!is_null($image_file)) {
            $image_name = $image_file;
        }

        $slider->image = $image_name;
        $slider->save();

        return redirect()
            ->route('admin.sliders.index')
            ->with('status', true)
            ->with('message', 'Slider Created Successfully');
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
        $slider = Slider::findOrFail($id);
        return view('admin.sliders.edit', [
            'slider' => $slider,
            'module' => 'sliders',
        ]);
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
        $slider = Slider::findOrFail($id);
        $slider->name = $request->name;
        if ($request->is_active) {
            $slider->is_active = 1;
        } else {
            $slider->is_active = 0;
        }
        
        $image_name = $slider->image;

        $image_file = $this->verifyAndUpload($request, 'image', $this->image_path, $image_name);

        if (!is_null($image_file)) {
            $image_name = $image_file;
        }

        $slider->image = $image_name;

        $slider->save();

        return redirect()
            ->route('admin.sliders.edit', $slider)
            ->with('status', true)
            ->with('message', 'Slider Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slider = Slider::findOrFail($id);
        File::delete($this->image_path . $slider->image);
        $slider->delete();
        return true;
    }
}
