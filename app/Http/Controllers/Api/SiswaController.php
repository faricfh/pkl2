<?php

namespace App\Http\Controllers\Api;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\User;
use App\Siswa;


class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa = Siswa::all();
        if (!$siswa) {
            $respons = [
                'success' => false,
                'data' => 'Empety',
                'message' => 'Siswa tidak ditemukan'

            ];
            return response()->json($respons, 404);
        }

        $respons = [
            'success' => true,
            'data' => $siswa,
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
        // 1.Tampung semua inputan ke $input
        $input = $request->all();

        // 2. Buat validasi tampung ke $validator
        $validator = Validator::make($input, [
            'nama' => 'required|min:10'
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
        $siswa = Siswa::create($input);

        // 5. menapilkan response
        $response = [
            'success' => true,
            'data' => $siswa,
            'message' => 'siswa berhasil ditemukan'
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
        $siswa = Siswa::Find($id);
        if (!$siswa) {
            $respons = [
                'success' => false,
                'data' => 'Empety',
                'message' => 'Siswa tidak ditemukan'

            ];
            return response()->json($respons, 404);
        }

        $respons = [
            'success' => true,
            'data' => $siswa,
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
