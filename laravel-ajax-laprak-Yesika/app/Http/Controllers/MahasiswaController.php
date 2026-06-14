<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\View\View;

class MahasiswaController extends Controller
{
    public function index(): View
    {
        return view('home');
    }

    public function getData(): JsonResponse
    {
        $path = storage_path('app/mahasiswa.json');

        if (! file_exists($path)) {
            return response()->json([
                'status' => false,
                'message' => 'File mahasiswa.json tidak ditemukan.',
                'data' => [],
            ], 404);
        }

        $json = file_get_contents($path);
        $data = json_decode($json, true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            return response()->json([
                'status' => false,
                'message' => 'Format file mahasiswa.json tidak valid.',
                'data' => [],
            ], 500);
        }

        return response()->json([
            'status' => true,
            'message' => 'Data mahasiswa berhasil diambil.',
            'data' => $data,
        ]);
    }
}
