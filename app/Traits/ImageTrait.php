<?php

namespace App\Traits;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use File;

trait ImageTrait
{

    /**
     * @param Request $request
     * @return $this|false|string
     */
    public function verifyAndUpload(Request $request, $field_name = 'image', $directory = 'uploads/images', $file_name = '')
    {
        if ($request->hasFile($field_name)) {
            if (File::exists($directory . $file_name)) {
                File::delete($directory . $file_name);
            }
            $image = $request->file($field_name);
            $extension = $image->getClientOriginalExtension();
            $name = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
            $image_name = Str::slug(date('Y-m-d-h-i-s') . $name . Str::random()) . '.' . $extension;
            $image->move($directory, $image_name);
            return $image_name;
        }
        return null;
    }
}
