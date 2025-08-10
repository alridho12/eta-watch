<?php

namespace App\Service;

use Illuminate\Support\Facades\Storage;

class UploadFileService
{
    public function uploadFile(array $data, string $field, string $path, string $oldImage = null)
    {
        $img = $data[$field];

        // Check if the directory exists
        if (!Storage::disk('public')->exists($path)) {
            // Create the directory if it doesn't exist
            Storage::disk('public')->makeDirectory($path);
        }

        $img->store($path, 'public');

        if ($oldImage) {
            Storage::disk('public')->delete("$path/$oldImage");
        }

        return $img->hashName();
    }

    public function deleteFile(string $path, string $image)
    {
        Storage::disk('public')->delete("$path/$image");
    }
}
