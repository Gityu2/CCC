<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\News;
use App\Consts\NewsStatusConst;

class CategoryController extends Controller
{
    public function show($id)
    {
        $all_news = News::withCount('comments')
                        ->with(['bookmarks', 'reactions'])
                        ->where('category_id', $id)
                        ->where('status', NewsStatusConst::PUBLISHED)
                        ->where('post_date_time', '<=', News::currentTime())
                        ->latest('published_at')
                        ->get();

        $category = Category::findOrFail($id);

        return view('user.news.category')->with('category', $category)->with('all_news', $all_news);
    }
}
