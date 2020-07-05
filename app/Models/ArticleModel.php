<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class ArticleModel
{
    public static function getTitles() { // mengambil judul-judul artikel
        $articles = DB::table('articles')
                    ->get();
        return $articles;
    }

    public static function getById($id) { // mengambil data berdasarkan id
        $article = DB::table('articles')
                    ->where('id', $id)
                    ->get();
        return $article;
    }

    public static function add($data){ // menambahkan artikel
        // dd($data);
        $new_article = DB::table('articles')
                        ->insert([
                            'penulis' => $data["penulis"],
                            'judul' => $data["judul"],
                            'isi' => $data['isi'],
                            'slag' => $data['slag'],
                            'tag' => $data["tag"]
                        ]);
        return $new_article;
    }

    public static function renew($data, $id){
        $renewed_article = DB::table('articles')
                        ->where('id', $id)
                        ->update([
                            'penulis' => $data["penulis"],
                            'judul' => $data["judul"],
                            'isi' => $data['isi'],
                            'slag' => $data['slag'],
                            'tag' => $data["tag"]
                        ]);
        return $renewed_article;
    }

    public static function destroy($id)
    {
        $removed = DB::table('articles')
                        ->where('id', $id)
                        ->delete();
        return $removed;
    }
}
