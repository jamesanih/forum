<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Topic;
use App\Comment;

class RouteController extends Controller
{
    //view index page
    public function topic($topic, $id){
    	$topic = $topic;
        $id = $id;
        
        $comments = Comment::where('topics_id', $id)->orderBy('id', 'desc')
                                      ->paginate(5);
     //   $data = Topic::where('id', $id)->paginate(3);

    	// return view('pages.topic', [
    	// 	'topic'=>$topic, 
     //        'data'=> $data,
     //        'comment'=> $comment
    	// ]);

    	$data = Topic::where('id', $id)->orderBy('id', 'desc')->get();

        return view('pages.topic', [
        	'topic'=> $topic,
        	'data'=> $data,
        	'comments'=>$comments
        ]);
    }


    public function getTopic(){

    	$topics = Topic::orderBy('id', 'desc')
                        ->paginate(3);
        return view('index', [
            'topics'=>$topics
        ]);
    }


    public function forum($topic, $id){
        $topics = $topic;
        $id = $id;
        $data = Topic::where('forums_id', $id)->paginate(3);

        return view('pages.forum',[
            'topics'=>$topics,
            'data'=> $data
        ]);

}


}
