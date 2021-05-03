<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use App\Repositories\ProductRepositoryInterface;
use App\Traits\ImageTrait;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $productRepository;
    private $image_path;

    use ImageTrait;

    /**
     *@param ProductRepositoryInterface
     */
    public function __construct(ProductRepositoryInterface $productRepository)
    {
        $this->productRepository = $productRepository;
        $this->image_path =  public_path('uploads/images/products') . '/';
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = $this->productRepository->all();
        return view('admin.products.index', [
            'products' => ProductResource::collection($products),
            'module' => 'products',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.products.create', [
            'module' => 'products',
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
        $product = new Product();
        $product->name = $request->name;
        $product->short_description = $request->short_description;
        $product->slug = $request->slug;
        $product->description = $request->description;
        $product->sort = $request->sort;
        $product->meta_title = $request->meta_title;
        $product->meta_description = $request->meta_description;
        $product->meta_keywords = $request->meta_keywords;

        if ($request->is_publish) {
            $product->is_publish = 1;
        } else {
            $product->is_publish = 0;
        }

        if ($request->display_in_header) {
            $product->display_in_header = 1;
        } else {
            $product->display_in_header = 0;
        }

        $image_name = '';
        $image_file = $this->verifyAndUpload($request, 'image', $this->image_path, $image_name);

        if (!is_null($image_file)) {
            $image_name = $image_file;
        }

        $product->image = $image_name;

        $product->save();

        return redirect()
            ->route('admin.products.index')
            ->with('status', true)
            ->with('message', 'Product Created Successfully');
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
        $product = Product::findOrFail($id);
        return view('admin.products.edit', [
            'product' => $product,
            'module' => 'products',
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
        $product = Product::findOrFail($id);
        $product->name = $request->name;
        $product->short_description = $request->short_description;
        $product->slug = $request->slug;
        $product->description = $request->description;
        $product->sort = $request->sort;
        $product->meta_title = $request->meta_title;
        $product->meta_description = $request->meta_description;
        $product->meta_keywords = $request->meta_keywords;

        if ($request->is_publish) {
            $product->is_publish = 1;
        } else {
            $product->is_publish = 0;
        }

        if ($request->display_in_header) {
            $product->display_in_header = 1;
        } else {
            $product->display_in_header = 0;
        }

        $image_name = $product->image;
        $image_file = $this->verifyAndUpload($request, 'image', $this->image_path, $image_name);

        if (!is_null($image_file)) {
            $image_name = $image_file;
        }

        $product->image = $image_name;

        $product->save();

        return redirect()
            ->route('admin.products.edit', $product)
            ->with('status', true)
            ->with('message', 'product Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        File::delete($this->image_path . $product->image);
        $product->delete();
        return true;
    }
}
