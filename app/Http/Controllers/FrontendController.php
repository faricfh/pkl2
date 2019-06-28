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

    public function latest()
    {
        $artikel = Artikel::orderBy('created_at', 'desc')->take(4)->get();
        $kategori = Kategori::all();
        $tag = Tag::all();
        $user = User::all();
        $respons = [
            'success' => true,
            'data' => [
                'artikel' => $artikel,
                'kategori' => $kategori,
                'tag' => $tag,
                'user' => $user
            ],
            'message' => 'Berhasil'
        ];
        return response()->json($respons, 200);
    }

    public function blogdetail(Artikel $artikel)
    {
        $artikel = Artikel::all();
        $kategori = Kategori::all();
        $tag = Tag::all();
        $user = User::all();
        $respons = [
            'success' => true,
            'data' => [
                'artikel' => $artikel,
                'kategori' => $kategori,
                'tag' => $tag,
                'user' => $user
            ],
            'message' => 'Berhasil'
        ];
        return view('frontend.blog-detail');
    }
}
