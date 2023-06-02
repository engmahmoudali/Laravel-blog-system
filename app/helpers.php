<?php
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

/**
 * Upload an file and saving it then return its name with path
 * @param string $filename
 * @param string $path
 * 
 * @return string
 */
if (!function_exists('uploadFile')) {
    function storeImage($filename, $path) {
        $image_ex = $filename->getClientOriginalExtension();
        $name = time(). Str::random(6) .'.'.$image_ex;
        $filename->storeAs($path, $name, 'public');
        return 'storage/'.$path . '/' . $name;
    }
}

/**
 * Updating an file and saving it then return its name with path
 * @param string $oldPhoto
 * @param string $newPhoto
 * @param string $path
 * 
 * @return string
 */

if (!function_exists('updateImages')) {
    function updateImages($oldPhoto, $newPhoto, $path)
    {
        if (File::exists('storage/'.$oldPhoto)){
            File::delete('storage/'.$oldPhoto);
        }

        return storeImage($newPhoto, $path);
    }
}

/**
 * Delete an file
 * @param string $oldPhoto
 * @param string $path
 * 
 * @return string
 */

if (!function_exists('deleteImage')) {
    function deleteImage($oldPhoto)
    {
        if (File::exists('storage/'.$oldPhoto)){
            File::delete('storage/'.$oldPhoto);
        }

        return true;
    }
}
