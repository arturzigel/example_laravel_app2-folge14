<?php

namespace App\View\Components\Post;

use App\Models\Post;
use Illuminate\View\Component;

class Newest extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
       /* $posts = collect([
            ["title" => "Beitrag 1", "author" => "Max", "slug" => "slug-1", "id" => 1, "body" => "lorem", "views" => 10],
            ["title" => "Beitrag 2", "author" => "Max", "slug" => "slug-2", "id" => 2, "body" => "lorem", "views" => 20],
            ["title" => "Beitrag 3", "author" => "Max", "slug" => "slug-3", "id" => 3, "body" => "lorem", "views" => 40],
            ["title" => "Beitrag 4", "author" => "Hans", "slug" => "slug-4", "id" => 4, "body" => "lorem", "views" => 25],
            ["title" => "Beitrag 5", "author" => "Hans", "slug" => "slug-5", "id" => 5, "body" => "lorem", "views" => 35],
        ]);

        //dd($posts->sortBy("id")->pluck("title", "slug")->implode(", "));

        $posts = Post::with("user")->latest()->active()->limit(5)->get();*/

        $posts = Post::latest()->active()->limit(5)->get();

        return view('components.post.newest', compact('posts'));
    }
}
