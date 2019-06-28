<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Tag;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tag = Tag::all();
        if (count($tag) <= 0) {
            $respons = [
                'success' => false,
                'data' => 'Empety',
                'message' => 'tag tidak ditemukan'

            ];
            return response()->json($respons, 404);
        }

        $respons = [
            'success' => true,
            'data' => $tag,
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
        // $input = $request->all();
        $tag = $request->all();

        // 2. Buat validasi tampung ke $validator
        $validator = Validator::make($tag, [
            'nama_tag' => 'required|min:5'
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
        // $tag = Tag::create($input);
        $tag = new Tag();
        $tag->nama_tag = $request->nama_tag;
        $tag->slug = str_slug($request->nama_tag, '-');
        $tag->save();


        // 5. menapilkan response
        $response = [
            'success' => true,
            'data' => $tag,
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
        $tag = Tag::Find($id);
        if (!$tag) {
            $respons = [
                'success' => false,
                'data' => 'Empety',
                'message' => 'tag tidak ditemukan'

            ];
            return response()->json($respons, 404);
        }

        $respons = [
            'success' => true,
            'data' => $tag,
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
        $tag = Tag::Find($id);
        $input = $request->all();

        if (!$tag) {
            $respons = [
                'success' => false,
                'data' => 'Empety',
                'message' => 'tag tidak ditemukan'

            ];
            return response()->json($respons, 404);
        }

        $validator = Validator::make($input, [
            'nama_tag' => 'required|min:5'
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

        $tag->nama_tag = $request->nama_tag;
        $tag->slug = str_slug($request->nama_tag, '-');
        $tag->save();

        $response = [
            'success' => true,
            'data' => $tag,
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
        $tag = Tag::Find($id);
        if (!$tag) {
            $respons = [
                'success' => false,
                'data' => 'Empety',
                'message' => 'tag tidak ditemukan'

            ];
            return response()->json($respons, 404);
        }

        $tag->delete();

        $response = [
            'success' => true,
            'data' => $tag,
            'message' => 'tag berhasil dihapus'
        ];

        // 6. tampilkan hasil
        return response()->json($response, 200);
    }
}
