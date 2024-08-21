<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'content' => 'required|string',
            'likes_count' => 'nullable|integer',
            'tag' => 'nullable|string|max:255',
            'comments' => 'nullable|string',
            'mediaUrl' => 'nullable|url',
        ]);

        try {
            // Check if the user is authenticated
            if (!Auth::check()) {
                return redirect()->route('login')->with('error', 'You must be logged in to create a post.');
            }

            // Get the authenticated user
            $user = Auth::user();

            // Create the post
            $post = $user->posts()->create([
                'content' => $validatedData['content'],
                'likes_count' => $validatedData['likes_count'] ?? 0,
                'tag' => $validatedData['tag'],
                'comments' => $validatedData['comments'],
                'mediaUrl' => $validatedData['mediaUrl'],
                'user_id' => $user->id,
            ]);

            // Redirect to the post's show page with a success message
            return redirect()->route('posts.show', $post->id)->with('success', 'Post created successfully!');

        } catch (\Exception $e) {
            // Log the error
            // Redirect back with an error message
            return back()->with('error', 'An error occurred while creating the post. Please try again.');
        }        
    }

    public function index()
    {
        // Fetch all posts with their associated user
        $posts = Post::orderBy('created_at', 'desc')->with('user')->get();

        // Pass the posts to the view
        return view('posts', compact('posts'));
    }

    public function show($id)
    {
        // Retrieve the post by its ID
        $post = Post::findOrFail($id);

        // Return the view with the post data
        return view('posts.show', compact('post'));
    }

    public function user($user_id)
    {
        // Retrieve the post by its ID
        $posts = Post::where('user_id', $user_id)->with('user')->get();

        // Return the view with the post data
        return view('posts.user', compact('posts'));
    }

}