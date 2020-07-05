<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArticleModel;

class ArticleController extends Controller
{
    public static function getTitles()
    {
        $articles = ArticleModel::getTitles();
        return view('daftar-artikel', compact('articles'));
    }

    public static function getByID($id)
    {
        $article = ArticleModel::getById($id)[0];
        return view('show-artikel', compact('article'));
    }

    public static function create()
    {
        return view('buat-artikel');
    }

    public static function new(Request $request)
    {
        $data = $request->all();
        unset($data["_token"]);
        $data["penulis"] = (int) $data["penulis"];
        // dd($data);
        $new_article = ArticleModel::add($data);
        return redirect('/artikel');
    }

    public static function edit($id)
    {
        $article = ArticleModel::getById($id)[0];
        return view('edit-artikel', compact('article'));
    }

    public static function renew(Request $request, $id)
    {
        $data = $request->all();
        unset($data["_token"]);
        $data["penulis"] = (int) $data["penulis"];
        $renewed_article = ArticleModel::renew($data, $id);
        return redirect('/artikel');
    }

    public static function destroy($id)
    {
        $removed = ArticleModel::destroy($id);
        return redirect('/artikel');
    }
}
