<?php

namespace App\Service;

use Illuminate\Support\Facades\Storage;

class UploadFileService
{
    public function uploadFile(array $data, string $field, string $path, string $oldImage = null)
    {
        $img = $data[$field];

        // Check if the directory exists
        if (!Storage::disk('public_direct')->exists($path)) {
            Storage::disk('public_direct')->makeDirectory($path);
        }

        $img->store($path, 'public_direct');

        if ($oldImage) {
            Storage::disk('public_direct')->delete("$path/$oldImage");
        }

        return Storage::disk('public_direct')->url($path . '/' . $img->hashName());
    }

    public function deleteFile(string $path, string $image)
    {
        Storage::disk('public')->delete("$path/$image");
    }
}
