<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Comment;
use Auth;

class CommentController extends Controller
{
    public function Comment(Request $request)
    {
        $topic = $request->topic_name;
    	$topic_id = $request->id;
        $comment = $request->comment;
        $path = 'public/uploadedImage';
        $post_name = Auth::user()->name;
        //echo $id . " ". $comment . " ". $image;
        
    	if($request->hasFile('image')){
            $image = $request->file('image');
             $filename = $image->getClientOriginalName();
            $fileExtension = $image->getClientOriginalExtension();
            if($fileExtension == "JPEG" || $fileExtension == "PNG" || $fileExtension == "JPG" || $fileExtension == "GIF"){
                $new_filename = time(). "_" .$filename;

                $madeComment = new Comment();
                $madeComment->comment = $comment;
                $madeComment->who_made_comment = $post_name;
                $madeComment->topics_id = $topic_id;
                $madeComment->image = $new_filename;
                        
                        

                if($madeComment->save()){
                    $image->move($path, $new_filename);
                }
            }else{
                return redirect()->back()->with(['message'=>'image not supported']);
            }
        }else{

                $madeComment = new Comment();
                $madeComment->comment = $comment;
                $madeComment->who_made_comment = $post_name;
                $madeComment->topics_id = $topic_id;
                $madeComment->image = "NULL";

                $madeComment->save();
        }

        // $data = $this->viewcomment($topic_id);

        // return view('pages.topic', [
        //         'data'=>$data,
        //         'topic'=>$topic
        // ]);
        return redirect()->back();

           
    	
    }



    // public function viewcomment(){
    //     $id = request()->route;
    //     $comment = Comment::where('topics_id', $id)->get();
       
    // }
}
