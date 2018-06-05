<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Str;

use Auth;
use DB;
use App\Topic;
use App\Forums;
use App\Trends;
use App\Tags;
use App\User;

class Topicontroller extends Controller
{

	 public function createTopic(Request $request){
	 	$user_id = Auth::user()->id;
	 	$this->validateTopic($request);


        $user_image = Auth::user()->image;

	 	
	 	$topic = new Topic();
	 	$topic->name = $request->input('name');
	 	$topic->desc = $request->input('desc');
	 	$topic->forums_id = $request->input('forums');
	 	$topic->trends_id = $request->input('tags');
		$topic->user_id = $user_id;
		$topic->title_slug = Str::slug($request->input('name'));
        $topic->image = $user_image;
	 	
    	if($topic->save()){
    		return response()->json(['message'=>'Topic created']);
    	}else{
    		return response()->json(['message'=>'Topic not created']);
    	}
    }


    public function getTopic(){
    	$user_id = Auth::user()->id;
    	$topic = Topic::where('user_id',$user_id)
    						->orderBy('id', 'desc')
    						->paginate(3);
    	 return view('pages.new_topic')->with('topic', $topic);
    	
    }

    

    protected function validateTopic(Request $request){
    	$this->validate($request,[
    		'name' => 'required|string|max:191',
    		'desc' => 'required|string|max:3000'
    	]);
	}
	

	public function Like(Request $request){


            $topic_id = $request->topic_id;
         
		  $topic = Topic::find($topic_id);
          foreach ($topic as $data) {
              $old_likes =  $topic->likes;
              $new_likes = $old_likes + $request->like;
          }

          $topic->likes = $new_likes;
         
         


          if($topic->save()){
            return response()->json(['message'=>'Liked']);
          }

	}


public function Dislike(Request $request){


            $topic_id = $request->topic_id;
         
          $topic = Topic::find($topic_id);
          foreach ($topic as $data) {
              $old_dislike =  $topic->dislike;
              $new_dislike = $old_dislike + $request->dislike;
          }

          $topic->dislike = $new_dislike;
         
         


          if($topic->save()){
            return response()->json(['message'=>'Dislike']);
          }

    }



   



    


   
}
