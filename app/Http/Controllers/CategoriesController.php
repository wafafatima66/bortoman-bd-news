<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Category;
class CategoriesController extends Controller
{

    public function index()
    {
        return view('admin.categories.index')->with('categories', Category::all());
    }


    public function create()
    {
        return view('admin.categories.create');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required'
        ]);

        $category = new Category;
        $category->name = $request->name;
        $category->position = $request->position;
        $category->save();
        Session::flash('success', 'You Successfully Created a Catefory');
        return redirect()->route('categories');
    }


    public function show()
    {
        $category = Category::find(2);
        if($category !== null){
            $posts = $category->posts;
            return view('blog', [
                'posts' => $posts,
                'category' => $category,

            ]);
        }
    }


    public function edit($id)
    {
        $vote = Vote::find($id);
        return view('admin.vote.edit')->with('vote', $vote);
    }


    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        $category->name = $request->name;
        $category->position = $request->position;
        $category->save();
        Session::flash('success', 'You Successfully Updated a Catefory');
        return redirect(route('categories'));
    }


    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        Session::flash('success', 'You Successfully Deleted a Catefory');
        return redirect(route('categories'));

    }
}
