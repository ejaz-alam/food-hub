<?php

namespace App\Traits;

use Illuminate\Http\Request;

trait FileUploadTrait
{
    public function uploadFile(Request $request, $fieldName, $path = '/uploads'): ?string
    {
        if ($request->hasFile($fieldName)) {
            $image = $request->file($fieldName);
            $extension = $image->getClientOriginalExtension();
            $imageName = $fieldName . '_' . time() . '.' . $extension;
            $image->move(public_path($path), $imageName);
            return $path . DIRECTORY_SEPARATOR . $imageName;
        }
        return null;
    }
}
