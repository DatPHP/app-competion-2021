<?php

namespace App\Http\Controllers\Customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\BlogPost;

class BlogPostController extends Controller
{
    public function index()
    {
        // show all blog posts
       // $posts = BlogPost::all(); //fetch all blog posts from DB
	   // return $posts; //returns the fetched posts
       //  return $posts;
        //return response()->json($posts);

        $posts = BlogPost::all(); //fetch all blog posts from DB
	    return view('customer.BlogPost.index', [
            'posts' => $posts,
        ]); //returns the view with posts

    }

    public function landing()
    {
        // show all blog posts
      //  $posts = BlogPost::all(); //fetch all blog posts from DB
	   // return $posts; //returns the fetched posts
       return view('customer.BlogPost.landing');

    }


    public function create()
    {
        //show form to create a blog post

        return view('customer.BlogPost.create');

    }

   
    public function store(Request $request)
    {
        //store a new post

        $newPost = BlogPost::create([
            'title' => $request->title,
            'body' => $request->body,
            'user_id' => 1
        ]);

        return redirect('blog/' . $newPost->id);

    }

    public function show(BlogPost $blogPost)
    {
        //show a blog post
       // return $blogPost; //returns the fetched posts

      // dd($blogPost);


      return view('customer.BlogPost.show', [
        'post' => $blogPost,
    ]); //

    }

    
    public function edit(BlogPost $blogPost)
    {
        //show form to edit the post

        return view('customer.BlogPost.edit', [
            'post' => $blogPost,
        ]); //returns the view with posts

      
    }
    

    
    public function update(Request $request, BlogPost $blogPost)
    {
        //save the edited post

        $blogPost->update([
            'title' => $request->title,
            'body' => $request->body
        ]);

        return redirect('blog/' . $blogPost->id);

    }

    
    public function destroy(BlogPost $blogPost)
    {
        //delete a post

        $blogPost->delete();

        return redirect('/blog');
    }
}
