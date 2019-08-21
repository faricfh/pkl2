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

        return view('frontend.singlepost');
    }

    public function singletest(){

        return view('frontend.singlepost');
    }

    public function post(){
        $artikel = Artikel::orderBy('created_at','desc')->paginate(8);
        return view('frontend.post',compact('artikel'));
    }

     // post TAG
    //  public function posttag(Tag $tag)
    //  {
    //      $kategori = Kategori::all();
    //      $artikel = $tag->artikel()->latest()->paginate(8);
    //      $popular = Artikel::inRandomOrder()->take(5)->get();
    //      $tag = Tag::all();

    //      return view('frontend.post',compact('artikel'));
    //  }

     // post KATEGORI
     public function postkategori(Kategori $kategori)
     {

         $artikel = $kategori->artikel()->latest()->paginate(8);
         $popular = Artikel::inRandomOrder()->take(5)->get();
         $tag = Tag::all();

         return view('frontend.post',compact('artikel'));
     }

     public function kategori()
     {
         return view('frontend.kategori');
     }

}
