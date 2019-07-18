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

    // public function kategori(kategori){

    // }

    // BLOG
    public function blog()
    {
        $kategori = Kategori::all();
        $artikel = Artikel::orderBy('created_at','desc')->paginate(5);
        $popular = Artikel::inRandomOrder()->take(5)->get();
        $tags = Tag::all();
        return view('frontend.blog-grid', compact('artikel','popular','tags','kategori'));
    }

    // BLOG TAG
    public function blogtag(Tag $tag)
    {
        $kategori = Kategori::all();
        $artikel = $tag->artikel()->latest()->paginate(5);
        $popular = Artikel::inRandomOrder()->take(5)->get();
        $tags = Tag::all();

        return view('frontend.blog-grid', compact('artikel','popular','tags','kategori'));
    }

    //  NEWS
     public function news()
    {
        $ver_kategori = Artikel::orderBy('created_at','desc')->paginate(5);
        $popular = Artikel::inRandomOrder()->take(5)->get();
        $tags = Tag::all();
        return view('frontend.category', compact('ver_kategori','popular','tags'));
    }

    // KATEGORI
    public function newskategori(Kategori $kategori)
    {
        $ver_kategori = $kategori->artikel()->latest()->paginate(5);
        $popular = Artikel::inRandomOrder()->take(5)->get();
        $tags = Tag::all();
        $kategori = Kategori::all();
        return view('frontend.category', compact('ver_kategori','popular','tags','kategori'));
    }
    // END NAV NEWS

    public function index()
    {
        // $menu = Category::take(3)->get();
        // $top = Article::where('headline', 0)->orderBy('created_at', 'desc')->take(5)->get();
        // $headline = Article::where('headline', 1)->orderBy('created_at', 'desc')->take(3)->get();
        // $article = Article::select('articles.title', 'articles.slug', 'headline', 'image', 'categories.title as categories', 'users.name as author')
        //     ->join('users', 'users.id', '=', 'articles.user_id')
        //     ->join('categories', 'categories.id', '=', 'articles.category_id')
        //     ->paginate(2);
        // $trending = Article::inRandomOrder()->take(3)->get();
        // $latest = Article::orderBy('created_at', 'desc')->take(4)->get();

        // $response = [
        //     'success' => true,
        //     'data' => ['menu' => $menu, 'top' => $top, 'headline' => $headline, 'article' => $article, 'trending' => $trending, 'latest' => $latest],
        //     'message' => 'Berhasil.'
        // ];

        // return response()->json($response, 200);
        // LATEST ARTIKEL
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
                'fps' => $fps
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

    // public function latest()
    // {
    //     $artikel = Artikel::orderBy('created_at', 'desc')->take(4)->get();
    //     $kategori = Kategori::all();
    //     $tag = Tag::all();
    //     $user = User::all();
    //     $respons = [
    //         'success' => true,
    //         'data' => [
    //             'artikel' => $artikel,
    //             'kategori' => $kategori,
    //             'tag' => $tag,
    //             'user' => $user
    //         ],
    //         'message' => 'Berhasil'
    //     ];
    //     return response()->json($respons, 200);
    // }

    public function blogdetail($id)
    {
        $popular = Artikel::inRandomOrder()->take(5)->get();
        $tags = Tag::all();
        $kategori = Kategori::take(5)->get();
        $artikel = Artikel::where('slug', $id)->first();

        if (!$artikel) {
            $response = [
                'success' => false,
                'data' => 'Empty',
                'message' => 'artikel tidak ditemukan.'
            ];
            return response()->json($response, 404);
        }

        $response = [
            'success' => true,
            'data' => $artikel,

            'message' => 'Berhasil.'
        ];

        return view('frontend.blog-detail', compact('artikel','popular','tags','kategori'));
    }

}
