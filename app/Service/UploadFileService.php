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

        // Buat folder jika belum ada
        if (!file_exists($destinationPath)) {
            mkdir($destinationPath, 0775, true);
        }

        // Pindahkan file ke folder public/storage/gambar-katalog
        $img->move($destinationPath, $img->hashName());

        // Hapus gambar lama jika ada
        if ($oldImage) {
            $oldPath = $destinationPath . '/' . $oldImage;
            if (file_exists($oldPath)) {
                unlink($oldPath);
            }
        }

        // Kembalikan nama file saja
        return $img->hashName();
    }

    public function deleteFile(string $path, string $image)
    {
        Storage::disk('public')->delete("$path/$image");
    }
}
