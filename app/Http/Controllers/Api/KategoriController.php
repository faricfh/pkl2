<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Kategori;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori = Kategori::all();
        if (count($kategori) <= 0) {
            $respons = [
                'success' => false,
                'data' => 'Empety',
                'message' => 'Kategori tidak ditemukan'

            ];
            return response()->json($respons, 404);
        }

        $respons = [
            'success' => true,
            'data' => $kategori,
            'message' => 'Berhasil'
        ];
        return response()->json($respons, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kategori = $request->all();

        // 2. Buat validasi tampung ke $validator
        $validator = Validator::make($kategori, [
            'nama_kategori' => 'required|min:5'
        ]);

        // 3.cek validasi
        if ($validator->fails()) {
            $response = [
                'success' => false,
                'data' => 'validator error',
                'message' => $validator->error()
            ];
            return response()->json($response, 500);
        }

        // 4. buat fungsi untuk menghandle semua inputan-> dimasukan ke table
        // $kategori = Kategori::create($input);
        $kategori = new Kategori();
        $kategori->nama_kategori = $request->nama_kategori;
        $kategori->slug = str_slug($request->nama_kategori, '-');
        $kategori->save();


        // 5. menapilkan response
        $response = [
            'success' => true,
            'data' => $kategori,
            'message' => 'tag berhasil ditambahkan'
        ];

        // 6. tampilkan hasil
        return response()->json($response, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kategori = Kategori::Find($id);
        if (!$kategori) {
            $respons = [
                'success' => false,
                'data' => 'Empety',
                'message' => 'tag tidak ditemukan'

            ];
            return response()->json($respons, 404);
        }

        $respons = [
            'success' => true,
            'data' => $kategori,
            'message' => 'Berhasil'

        ];
        return response()->json($respons, 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $kategori = Kategori::Find($id);
        $input = $request->all();

        if (!$kategori) {
            $respons = [
                'success' => false,
                'data' => 'Empety',
                'message' => 'tag tidak ditemukan'

            ];
            return response()->json($respons, 404);
        }

        $validator = Validator::make($input, [
            'nama_kategori' => 'required|min:5'
        ]);

        // 3.cek validasi
        if ($validator->fails()) {
            $response = [
                'success' => false,
                'data' => 'validator error',
                'message' => $validator->error()
            ];
            return response()->json($response, 500);
        }

        $kategori->nama_kategori = $request->nama_kategori;
        $kategori->slug = str_slug($request->nama_kategori, '-');
        $kategori->save();

        $response = [
            'success' => true,
            'data' => $kategori,
            'message' => 'tag berhasil diupdate'
        ];

        // 6. tampilkan hasil
        return response()->json($response, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kategori = Kategori::Find($id);
        if (!$kategori) {
            $respons = [
                'success' => false,
                'data' => 'Empety',
                'message' => 'tag tidak ditemukan'

            ];
            return response()->json($respons, 404);
        }

        $kategori->delete();

        $response = [
            'success' => true,
            'data' => $kategori,
            'message' => 'tag berhasil dihapus'
        ];

        // 6. tampilkan hasil
        return response()->json($response, 200);
    }
}
