<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vote;
use App\Category;
use Session;

class VoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.vote.index')->with('votes',Vote::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.vote.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vote = Vote::create([
            'question' => $request->question
        ]);
        $vote->save();
        return redirect(route('votes'));
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
        $vote = Vote::find($id);
        return view('admin.vote.edit')->with('vote', $vote);
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
        $vote = Vote::find($id);
        $vote->question = $request->question;
        $vote->save();
        Session::flash('success', 'You Successfully Updated a Poll');
        return redirect(route('votes'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vote = Vote::find($id);
        $vote->delete();
        Session::flash('success', 'You Successfully Deleted a Poll');
        return redirect(route('votes'));
    }


    public function answer_store(Request $request)
    {
        $id = $request->question;
        $answer = $request->answer;
        $vote = Vote::find($id);

        if($answer == 'neutral')
        {
            $vote->neutral++;
            $vote->save();
        }
        if($answer == 'yes')
        {
            $vote->yes++;
            $vote->save();
        }
        if($answer == 'no')
        {
            $vote->no++;
            $vote->save();
        }
        
        return redirect(route('homepage'));
        
    }

    public function poll_result()
    {
        return view('poll_result')->with('votes', Vote::all())
                                  ->with('categories', Category::all())
                                  ->with('fb_title', 'বর্তমানবিডি২৪.কম')
                                  ->with('fb_desc' ,'সবার আগে নির্ভরযোগ্য বাংলা খবর')
                                  ->with('fb_image', asset('images/logo_fb.jpg'));
            
            
    }


}
