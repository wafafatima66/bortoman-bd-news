<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Post;
use App\Category;
use App\StyleCategory;
use App\Tag;
use App\Vote;
use App\Result;

class HomePageController extends Controller
{
    public function index()
    {
        // $posts = new Post;
        // $categories = new Category;
        // return view('welcome')->with('posts', Post::all(), 'categories', Category::all());


        
        $categories = Category::all();
        $posts = Post::all();
        $votes = Vote::all();
        $stylecategory_feature_big = StyleCategory::find(1);
        
        // if($category !== null){
            
        // }
        $stylecategory_feature_small = StyleCategory::find(2);
        $category_sports = Category::find(4);
        $category_entertainments = Category::find(5);
        $category_pollitics = Category::find(6);
        $category_bangladesh = Category::find(8);
        $category_tech = Category::find(7);


        $posts_feature_big = $stylecategory_feature_big->posts;
        $posts_feature_small = $stylecategory_feature_small->posts;
        $posts_sports = $category_sports->posts;
        $posts_entertainments = $category_entertainments->posts;
        $posts_pollitics = $category_pollitics->posts;
        $posts_bangladesh = $category_bangladesh->posts;
        $posts_tech = $category_tech->posts;


        return view('welcome', [
            'categories' => $categories,
            'posts' => $posts,
            'votes' => $votes,
        	'posts_feature_big' => $posts_feature_big, 
        	'posts_feature_small' => $posts_feature_small,
        	'posts_sports' => $posts_sports,
        	'posts_entertainments' => $posts_entertainments,
        	'posts_pollitics' => $posts_pollitics,
        	'posts_bangladesh' => $posts_bangladesh,
        	'posts_tech' => $posts_tech,
            'fb_title' => 'বর্তমানবিডি২৪.কম',
            'fb_desc' => 'সবার আগে নির্ভরযোগ্য বাংলা খবর',
            'fb_image' => asset('images/logo_fb.jpg')
        	


        ]);

    }

    public function singlenews($id) {
        $news = Post::find($id);
        $this_category = Post::find($id)->category;
        $this_category_id = $this_category->id;
        $category_posts = Category::find($this_category_id);
        $posts = $category_posts->posts;

        return view('single_news', [
            'news'=> $news,
            'fb_title'=>$news->title,
            'fb_desc'=>$news->content,
            'fb_image'=>$news->featured,
            'posts' => $posts,
            'all_posts' => Post::all(),
            'this_category' => $this_category,
            'categories' =>Category::all()
        ]);
    }


    public function single_category($id) {
        // $single_category = Category::find($id);
        // $posts = $single_category ->posts;
        $posts = Category::find($id)->posts;

        return view('single_category', [
            'name' => Category::find($id),
            'posts'=> $posts,
            'categories' =>Category::all(),
            'fb_title' => 'বর্তমানবিডি২৪.কম',
            'fb_desc' => 'সবার আগে নির্ভরযোগ্য বাংলা খবর',
            'fb_image' => asset('images/logo_fb.jpg')
        ]);
        
    }

    public function search(request $request) {
        // $single_category = Category::find($id);
        // $posts = $single_category ->posts;
        $search = $request->search;
        $result = Post::where('title', 'LIKE', '%'.$search.'%')->get();

        return view('search', [
            'categories' =>Category::all(),
            'posts' => $result,
            'fb_title' => 'বর্তমানবিডি২৪.কম',
            'fb_desc' => 'সবার আগে নির্ভরযোগ্য বাংলা খবর',
            'fb_image' => asset('images/logo_fb.jpg')
        ]);
        
    }
}
