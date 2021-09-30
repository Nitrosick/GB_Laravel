<?php declare(strict_types=1);

namespace App\Services;

use Exception;
use Illuminate\Http\UploadedFile;

class UploadService
{
    public function upload(UploadedFile $file, string $path = 'news'): string
    {
        $extension = $file->getClientOriginalExtension();
        $fileName = uniqid('u_') . '.' . $extension;

        if ($filePath = $file->storeAs($path, $fileName, 'public')) {
            return $filePath;
        }

        throw new Exception('The file was not uploaded');
    }
}
