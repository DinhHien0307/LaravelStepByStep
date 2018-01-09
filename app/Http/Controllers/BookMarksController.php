<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\BookMark;
use Illuminate\Support\Facades\Redirect;

include("simple_html_dom.php");

class BookMarksController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $bookmarks = BookMark::all()->where('user_id',auth()->id());
        return view('BookMarks.index', compact('bookmarks'));
    }

    public function show($id)
    {
        $bookmark = BookMark::find($id);
        echo $bookmark->data;
    }

    public function store(Request $request)
    {
        $url=request('url');
        $html = file_get_html($url);
        $article = new BookMark;
        $article->user_id = auth()->id();
        $article->url=$url;
        $article->data = $html;
        $article->save();
        return back();
    }
}
