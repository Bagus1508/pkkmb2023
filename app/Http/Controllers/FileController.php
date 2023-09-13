<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Illuminate\Http\Request;

class FileController extends Controller
{
    public function download(Request $request, $folder, $file_name)
    {
        // Validasi file name sesuai dengan kebutuhan Anda
        // Misalnya, pastikan file tersebut ada dalam direktori yang benar

        // Menentukan path file berdasarkan nama file yang didapatkan
        $filePath = storage_path('upload' . $file_name, 'public');

        // Mengecek apakah file ada di direktori yang benar
        if (file_exists($filePath)) {
            // Jika file ada, maka melakukan proses unduh
            return response()->download($filePath);
        } else {
            // Jika file tidak ada, Anda dapat menghandle kasus ini sesuai dengan kebutuhan Anda,
            // misalnya, mengembalikan response error atau mengarahkan ke halaman lain.
            return response()->json([
                'message' => 'File not found.',
            ], 404);
        }
    }
}
