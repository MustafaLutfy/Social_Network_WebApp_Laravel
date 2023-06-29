<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Follow;
use Illuminate\Support\Facades\Auth;


class ProfileController extends Controller
{
    public function edit($id)
    {
        return view('profile.edit')->with([
            'user' => User::get()->where('id', $id)->first()
        ]);
    }

    public function update(Request $request, $id)
    {
        
        if($request->user_image){
            $request->validate([
                'name'=>'required',
                'user_image'=>'required|mimes:jpg,png,jpeg|max:2048'
            ]);

            $newImageName = uniqid(). '-' . $request->name . '.' . $request->user_image->extension();
            $request->user_image->move(public_path('users_images'), $newImageName);

            User::where('id', $id)
            ->update([
                'name' => $request->input('name'),
                'image_path' => $newImageName,
            ]);
        }
        else{
            $request->validate([
                'name'=>'required',
            ]);

            User::where('id', $id)
            ->update([
                'name' => $request->input('name'),
            ]);
        }
        return redirect('/profile/'. $id);
}


        function follow($id){
            
            $following_id = Auth::user()->id;
            // $followers = Follow::get()->count();
            
            // dd(Follow::where('following_id', $following_id)->exists());
            
                if (Follow::where('following_id', $following_id)->exists() && $following_id == $id) {  
                    return redirect('/profile/' . $id);
                }
                else{
                    
                    Follow::create([
                        'following_id' => $following_id,
                        'followed_id' => $id,
                    ]); 
                    return redirect('/profile/' . $id);
                }
                
        }

        
        function unfollow($id){
            Follow::where('following_id', Auth::user()->id)->where('followed_id', $id)->delete();

            return redirect()->back( );
        }

        function following($id){

            $follows = Follow::where('following_id', $id)->get();
            $users = User::get();
            


            $gsom = collect([]);
            foreach($follows as $follow){
                $users = User::where('id', $follow->followed_id)->get();
                $gsom = $gsom->merge($users);
            } 

            return view('profile.following')->with([
                'users' => $gsom,

            ]);
        }
}