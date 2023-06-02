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
        if (File::exists('storage/'.$path.$oldPhoto)){
            File::delete('storage/'.$path.$oldPhoto);
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
    function deleteImage($oldPhoto,$path)
    {
        if (File::exists('storage/'.$path.$oldPhoto)){
            File::delete('storage/'.$path.$oldPhoto);
        }

        return true;
    }
}

/**
 * Creating a slug for a given title.
 */
if (!function_exists('createSlug')) {
    function createSlug($str, $delimiter = '-'){
        $slug = strtolower(trim(preg_replace('/[\s-]+/', $delimiter, preg_replace('/[^A-Za-z0-9-]+/', $delimiter, preg_replace('/[&]/', 'and', preg_replace('/[\']/', '', iconv('UTF-8', 'ASCII//TRANSLIT', $str))))), $delimiter));
        return $slug;
    } 
}