<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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

    public function singlepost(Artikel $artikel)
    {
        $artikel = Artikel::with('user', 'kategori','tag')->where('slug', '=', $artikel->slug)->first();
        $response = [
            'success' => true,
            'data' => $artikel,
            'message' => 'Berhasil.'
        ];
        // dd($artikel);
        return response()->json($response, 200);
    }

    public function index()
    {
        $latest = Artikel::select('artikels.judul', 'artikels.slug', 'foto', 'konten','artikels.created_at', 'kategoris.nama_kategori as kategori',
        'users.name as author')
        ->join('users', 'users.id', '=', 'artikels.id_user')
        ->join('kategoris', 'kategoris.id', '=', 'artikels.id_kategori')->orderBy('created_at', 'desc')->take(3)->get();

        // apa'an nih
        $x = Artikel::inRandomOrder()->take(7)->get();

        // post
        $post = Artikel::select('artikels.judul', 'artikels.slug', 'foto', 'konten','artikels.created_at', 'kategoris.nama_kategori as kategori',
                'users.name as author')
        ->join('users', 'users.id', '=', 'artikels.id_user')
        ->join('kategoris', 'kategoris.id', '=', 'artikels.id_kategori')->get();

        //  random
        $list_random = Artikel::select('artikels.judul', 'artikels.slug', 'foto', 'konten','artikels.created_at', 'kategoris.nama_kategori as kategori',
                'users.name as author')
        ->join('users', 'users.id', '=', 'artikels.id_user')
        ->join('kategoris', 'kategoris.id', '=', 'artikels.id_kategori')->inRandomOrder()->take(8)->get();

        $populer = Artikel::select('artikels.judul', 'artikels.slug', 'foto', 'konten', 'kategoris.nama_kategori as kategori',
                'users.name as author')
        ->join('users', 'users.id', '=', 'artikels.id_user')
        ->join('kategoris', 'kategoris.id', '=', 'artikels.id_kategori')->take(2)->get();

        $kategori = Kategori::all();
        $b_kategori = Kategori::all();
        $tag = Tag::all();
        $user = User::all();
        $respons = [
            'success' => true,
            'data' => [
            'latest' => $latest,
            'list_random' => $list_random,
            'populer' => $populer,
            'kategori' => $kategori,
            'tag' => $tag,
            'user' => $user,
            'post' => $post,
            'b_kategori' => $b_kategori
        ],
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
        //
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

    public function post()
    {
        $artikel = Artikel::select('artikels.judul', 'artikels.slug', 'foto', 'konten','artikels.created_at', 'kategoris.nama_kategori as kategori',
        'users.name as author')
        ->join('users', 'users.id', '=', 'artikels.id_user')
        ->join('kategoris', 'kategoris.id', '=', 'artikels.id_kategori')->paginate(8);
        $latest = Artikel::select('artikels.judul', 'artikels.slug', 'foto', 'konten','artikels.created_at', 'kategoris.nama_kategori as kategori',
        'users.name as author')
        ->join('users', 'users.id', '=', 'artikels.id_user')
        ->join('kategoris', 'kategoris.id', '=', 'artikels.id_kategori')->latest()->take(4)->get();
        $random = Artikel::select('artikels.judul', 'artikels.slug', 'foto', 'konten','artikels.created_at', 'kategoris.nama_kategori as kategori',
                'users.name as author')
        ->join('users', 'users.id', '=', 'artikels.id_user')
        ->join('kategoris', 'kategoris.id', '=', 'artikels.id_kategori')->inRandomOrder()->take(8)->get();

        $response = [
            'success' => true,
            'data' => [
                'artikel' => $artikel,
                'latest' => $latest,
                'random' => $random
            ],
            'message' => 'Berhasil.'
        ];
        // dd($artikel);
        return response()->json($response, 200);

    }

    public function postkategori(Kategori $kategori)
    {
        $artikel = $kategori->artikel()->latest()->paginate(8);
        $latest = Artikel::select('artikels.judul', 'artikels.slug', 'foto', 'konten','artikels.created_at', 'kategoris.nama_kategori as kategori',
        'users.name as author')
        ->join('users', 'users.id', '=', 'artikels.id_user')
        ->join('kategoris', 'kategoris.id', '=', 'artikels.id_kategori')->latest()->take(4)->get();
        $random = Artikel::select('artikels.judul', 'artikels.slug', 'foto', 'konten','artikels.created_at', 'kategoris.nama_kategori as kategori',
                'users.name as author')
        ->join('users', 'users.id', '=', 'artikels.id_user')
        ->join('kategoris', 'kategoris.id', '=', 'artikels.id_kategori')->inRandomOrder()->take(8)->get();

        $response = [
            'success' => true,
            'data' => [
                'artikel' => $artikel,
                'latest' => $latest,
                'random' => $random
            ],
            'message' => 'Berhasil.'
        ];
        // dd($artikel);
        return response()->json($response, 200);

    }


}
