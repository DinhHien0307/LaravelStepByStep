<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

include("simple_html_dom.php");

class ArticlesController extends Controller
{
    public $html;
    public function index()
    {
        // $articles = Article::find(1);
        return view('Articles.index');
    }

    public function store()
    {
        $url="https://vnexpress.net/";
        $this->html = file_get_html($url);
        $article = new Article;
        $article->user_id = 1;
        $article->link=$url;
        $article->data = $this->html;
        $article->save();
    }
}
