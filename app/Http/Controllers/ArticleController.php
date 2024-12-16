<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = [
            [
                "id" => 1,
                "title" => "Laravel Blog",
                "content" => "Laravel Blog Content"
            ],
            [
                "id" => 2,
                "title" => "Laravel Blog 2",
                "content" => "Laravel Blog Content 2"
            ],
            [
                "id" => 3,
                "title" => "Laravel Blog 3",
                "content" => "Laravel Blog Content 3"
            ],
            [
                "id" => 4,
                "title" => "Laravel Blog 4",
                "content" => "Laravel Blog Content 4"
            ],
            [
                "id" => 5,
                "title" => "Laravel Blog 5",
                "content" => "Laravel Blog Content 5"
            ]
        ];
        return view('articles.index', compact('articles'));
    }

    public function create()
    {
        return view('articles.create');
    }
}
