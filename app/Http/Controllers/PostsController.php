<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;
use App\Models\Save;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{

    public function index()
    {
        return view('blog.index')
        ->with('posts', Post::orderBy('created_at','desc')->get());
    }

    public function comment(Request $request, $slug)
    {
        $post = Post::where('slug', $slug)->first();

        $request->validate([
            'comment'=>'required',
        ]);
        if(Auth::check()){
            $comment = Comment::create([
                'comment' => $request->input('comment'),
                'post_slug' => $slug,
                'user_id' => Auth::user()->id
                ]);
            
            return redirect('/blog/' . $slug);
        }
        else{
            return redirect('/blog/' . $slug)->with('message', 'Login first to post a comment');
        }
       
    }

    
    public function create()
    {
        return view('blog.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'description'=>'required',
            'image'=>'required|mimes:jpg,png,jpeg|max:5048'
        ]);
        $slug = Str::slug($request->title, '-');
        $newImageName = uniqid(). '-' . $slug . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $newImageName);
      
        $post = Post::create([
        'title' => $request->input('title'),
        'slug' => $slug,
        'description' => $request->input('description'),
        'image_path' => $newImageName,
        'user_id' => Auth::user()->id
        ]);
        


        return redirect('blog');

       
    }

    public function show($slug)
    {
     
        return view('blog.show')->with([
            'post'=> Post::where('slug', $slug)->first(),
            'comments'=> Comment::orderBy('created_at','desc')->get()->where('post_slug', $slug),
        ]);
    }


    public function edit($slug)
    {
        return view('blog.edit')->with([
            'post'=> Post::where('slug', $slug)->first()
        ]);
    }

    public function update(Request $request, $slug)
    {
        

        
        if($request->image){
            $request->validate([
                'title'=>'required',
                'description'=>'required',
                'image'=>'required|mimes:jpg,png,jpeg|max:5048'
            ]);

            $newImageName = uniqid(). '-' . $slug . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $newImageName);

            Post::where('slug', $slug)
            ->update([
                'title' => $request->input('title'),
                'slug' => $slug,
                'description' => $request->input('description'),
                'image_path' => $newImageName,
                'user_id' => Auth::user()->id
            ]);
        }
        else{
            $request->validate([
                'title'=>'required',
                'description'=>'required',
            ]);

            Post::where('slug', $slug)
            ->update([
                'title' => $request->input('title'),
                'slug' => $slug,
                'description' => $request->input('description'),
                'user_id' => Auth::user()->id
            ]);
        }
       
        
        return redirect('/blog/' . $slug)->with('message','Post updated successfully');
    }

    public function save($id)
    {

        $post = Save::create([
            'post_id' => $id,
            'user_id' => Auth::user()->id
            ]);
            
            return redirect()->back()->with('message','Post saved successfully');
    }

    public function destroy($slug)
    {
        Post::where('slug', $slug)->delete();

        return redirect('blog')->with('message','Post deleted successfully');
    }

    public function commentDelete($id)
    {
        $comment = Comment::get()->where('comment_id', (int)$id)->first();
        $slug = $comment->post_slug;
        Comment::where('comment_id', (int)$id)->delete();
        return redirect('/blog/' . $slug)->with('message', 'Comment deleted');


    }
}
