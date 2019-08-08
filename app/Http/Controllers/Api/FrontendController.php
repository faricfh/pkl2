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
    public function singleblog(Artikel $artikel)
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
        ->join('kategoris', 'kategoris.id', '=', 'artikels.id_kategori')->orderBy('created_at', 'desc')->take(6)->get();

        // KATEGORI ADVENTURE
        $adventure = Artikel::select('artikels.judul', 'artikels.slug', 'foto', 'konten','artikels.created_at', 'kategoris.nama_kategori as kategori',
                'users.name as author')
        ->join('users', 'users.id', '=', 'artikels.id_user')
        ->join('kategoris', 'kategoris.id', '=', 'artikels.id_kategori')
        ->where('kategoris.nama_kategori','=','adventure')->take(3)->get();

        // KATEGORI RPG
        $rpg = Artikel::select('artikels.judul', 'artikels.slug', 'foto', 'konten','artikels.created_at', 'kategoris.nama_kategori as kategori',
                'users.name as author')
        ->join('users', 'users.id', '=', 'artikels.id_user')
        ->join('kategoris', 'kategoris.id', '=', 'artikels.id_kategori')
        ->where('kategoris.nama_kategori','=','rpg')->take(3)->get();

        //  KATEGORI FPS
        $fps = Artikel::select('artikels.judul', 'artikels.slug', 'foto', 'konten','artikels.created_at', 'kategoris.nama_kategori as kategori',
                'users.name as author')
        ->join('users', 'users.id', '=', 'artikels.id_user')
        ->join('kategoris', 'kategoris.id', '=', 'artikels.id_kategori')
        ->where('kategoris.nama_kategori','=','fps')->take(3)->get();

        // MOST POPULAR
        $most_popular = Artikel::inRandomOrder()->take(5)->get();

        // BLOG
        $blog = Artikel::select('artikels.judul', 'artikels.slug', 'foto', 'konten','artikels.created_at', 'kategoris.nama_kategori as kategori',
                'users.name as author')
        ->join('users', 'users.id', '=', 'artikels.id_user')
        ->join('kategoris', 'kategoris.id', '=', 'artikels.id_kategori')->get();

        //  POPULAR POST
        $popular_post = Artikel::select('artikels.judul', 'artikels.slug', 'foto', 'konten','artikels.created_at', 'kategoris.nama_kategori as kategori',
                'users.name as author')
        ->join('users', 'users.id', '=', 'artikels.id_user')
        ->join('kategoris', 'kategoris.id', '=', 'artikels.id_kategori')->inRandomOrder()->take(3)->get();

        $artikel = Artikel::orderBy('created_at', 'desc')->take(4)->get();

        $article = Artikel::select('artikels.judul', 'artikels.slug', 'foto', 'konten', 'kategoris.nama_kategori as kategori',
                'users.name as author')
        ->join('users', 'users.id', '=', 'artikels.id_user')
        ->join('kategoris', 'kategoris.id', '=', 'artikels.id_kategori')->get();

        // CATEGORY
        $category = Artikel::select('artikels.judul', 'artikels.slug', 'foto', 'konten','artikels.created_at', 'kategoris.nama_kategori as kategori',
                'users.name as author')
        ->join('users', 'users.id', '=', 'artikels.id_user')
        ->join('kategoris', 'kategoris.id', '=', 'artikels.id_kategori')->get();

        $kategori = Kategori::take(5)->get();
        $b_kategori = Kategori::all();
        $tag = Tag::all();
        $user = User::all();
        $respons = [
        'success' => true,
        'data' => [
        'latest_artikel' => $latest,
        'most_popular' => $most_popular,
        'popular_post' => $popular_post,
        'category' => $category,
        'artikel' => $artikel,
        'kategori' => $kategori,
        'tag' => $tag,
        'user' => $user,
        'article' => $article,
        'blog' => $blog,
        'adventure' => $adventure,
        'rpg' => $rpg,
        'fps' => $fps,
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


}
