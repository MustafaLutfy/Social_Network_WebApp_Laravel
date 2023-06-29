<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Post;
use App\Models\Follow;
use App\Models\Save;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function index()
    {
        return view('index');
    }

    public function profile($id)
    {
        
        $posts = Post::get()->where('user_id', $id);
        $user = User::get()->where('id', $id)->first();
        $followers = Follow::get()->where('followed_id',$id)->count();

        $following = Follow::get()->where('following_id',$id)->count();


        if(Follow::exists() && Follow::get('following_id')->contains('following_id', Auth::user()->id) && Follow::get('followed_id')->where('followed_id',$id)->contains('followed_id', $id)){


                return view('profile.profile')->with([
                        'user' => $user,
                        'posts' => $posts,
                        'followers' => $followers,
                        'following' => $following,
                        'state' => 'Unfollow'
                    
                    ]);
                }     
                else{
                    return view('profile.profile')->with([
                        'user' => $user,
                        'posts' => $posts,
                        'followers' => $followers,
                        'following' => $following,
                        'state' => 'follow'
                    ]);
              }
    }      
   
    

    

    public function followed($id)
    {
       
        if(Follow::get()->where('following_id',$id)->first() == null)
        {
            return redirect()->back();
        }
        else{
                
             $followers = Follow::where('following_id', $id)->get('followed_id');

            $gsom = collect([]);
            foreach($followers as $follower){
                $posts = Post::where('user_id', $follower->followed_id)->get();
                $gsom = $gsom->merge($posts);
            } 
            
            return view('profile.Followed')->with([
                'posts' => $gsom,
             ]);
            
            //   return view('profile.Followed')->with([
            //      'posts' => $posts,
            //      'followers' => $followers
            //   ]);
        }
        
    }

    public function admin()
    {
        return view('admin.home');
    }

    public function saved($id)
    {
        
        
        $post_ids = Save::where('user_id', $id)->get();
        $saved_posts = collect([]);
    
            foreach($post_ids as $post_id){
                $posts = Post::where('id', $post_id->post_id)->get();
                $saved_posts = $saved_posts->merge($posts);
            } 
            
        return view('profile.saved')->with([
            'posts' => $saved_posts
        ]);
    }

}
