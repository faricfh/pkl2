<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;
use App\Kategori;
use App\Tag;
use App\User;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {

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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $artikel = Artikel::where('slug', $id)->first();

        // if (!$artikel) {
        //     $response = [
        //         'success' => false,
        //         'data' => 'Empty',
        //         'message' => 'artikel tidak ditemukan.'
        //     ];
        //     return response()->json($response, 404);
        // }

        // $response = [
        //     'success' => true,
        //     'data' =>  $artikel,
        //     'message' => 'Berhasil.'
        // ];

        // return response()->json($response, 200);
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

    public function singlepost(Artikel $artikel)
    {
        $artikel = Artikel::with('user', 'kategori','tag')->where('slug', '=', $artikel->slug)->first();
        return view('frontend.singlepost',compact('artikel'));
    }

    public function singletest(){

        return view('frontend.singlepost');
    }

    public function post(){
        $artikel = Artikel::select('artikels.judul', 'artikels.slug', 'foto', 'konten','artikels.created_at', 'kategoris.nama_kategori as kategori','users.name as author')
        ->join('users', 'users.id', '=', 'artikels.id_user')
        ->join('kategoris', 'kategoris.id', '=', 'artikels.id_kategori')->paginate(8);
        $data = Artikel::inRandomOrder()->take(1)->get();
        return view('frontend.post',compact('artikel','data'));
    }

     // post KATEGORI
     public function postkategori(Kategori $kategori)
     {

         $artikel = $kategori->artikel()->latest()->paginate(8);
         $data = Artikel::inRandomOrder()->take(1)->get();

         return view('frontend.post',compact('artikel','data'));
     }

     public function kategori()
     {
         return view('frontend.kategori');
     }

}
