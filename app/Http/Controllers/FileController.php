<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Illuminate\Http\Request;

class FileController extends Controller
{
    public function view(Request $request, $folder, $file)
    {
        $filePath = Storage::url($file->file_path);
    }
}
