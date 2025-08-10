<?php

namespace App\Service;

use Illuminate\Support\Facades\Storage;

class UploadFileService
{
    public function uploadFile(array $data, string $field, string $path, string $oldImage = null)
    {
        $img = $data[$field];

        // Path tujuan di dalam public_html/public
        $destinationPath = public_path('storage/' . $path);

        // Buat folder kalau belum ada
        if (!file_exists($destinationPath)) {
            mkdir($destinationPath, 0775, true);
        }

        // Pindahkan file
        $img->move($destinationPath, $img->hashName());

        // Hapus gambar lama kalau ada
        if ($oldImage) {
            $oldPath = $destinationPath . '/' . $oldImage;
            if (file_exists($oldPath)) {
                unlink($oldPath);
            }
        }

        // Return URL lengkap
        return url("public/storage/{$path}/" . $img->hashName());
    }

    public function deleteFile(string $path, string $image)
    {
        Storage::disk('public')->delete("$path/$image");
    }
}
