<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the posts.
     */
    public function index()
    {
        $posts = Post::with('user')->latest()->paginate(10);
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new post.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created post in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'content' => 'required|max:1000',
            'tag' => 'required|max:20',
            'mediaUrl' => 'nullable|url',
        ]);

        $post = Auth::user()->posts()->create($validatedData);

        return redirect()->route('posts.show', $post)->with('success', 'Post créé avec succès!');
    }

    /**
     * Display the specified post.
     */
    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified post.
     */
    public function edit(Post $post)
    {
        $this->authorize('update', $post);
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified post in storage.
     */
    public function update(Request $request, Post $post)
    {
        $this->authorize('update', $post);

        $validatedData = $request->validate([
            'content' => 'required|max:1000',
            'tag' => 'required|max:20',
            'mediaUrl' => 'nullable|url',
        ]);

        $post->update($validatedData);

        return redirect()->route('posts.show', $post)->with('success', 'Post mis à jour avec succès!');
    }

    /**
     * Remove the specified post from storage.
     */
    public function destroy(Post $post)
    {
        $this->authorize('delete', $post);
        $post->delete();
        return redirect()->route('posts.index')->with('success', 'Post supprimé avec succès!');
    }

    /**
     * Like or unlike a post.
     */
    public function like(Post $post)
    {
        // Ici, vous devriez implémenter la logique pour liker/unliker un post
        // Par exemple, vous pourriez utiliser une relation many-to-many avec les utilisateurs
        // pour les likes, ou simplement incrémenter/décrémenter le compteur de likes

        $post->increment('likes_count');
        return back()->with('success', 'Post liké!');
    }

    /**
     * Add a comment to a post.
     */
    public function addComment(Request $request, Post $post)
    {
        $validatedData = $request->validate([
            'coments' => 'required|max:250',
        ]);

        // Ici, vous devriez implémenter la logique pour ajouter un commentaire
        // Cela pourrait impliquer la création d'un nouveau modèle Comment
        // ou l'ajout à un champ JSON, selon votre structure de données

        $post->update(['coments' => $validatedData['coments']]);

        return back()->with('success', 'Commentaire ajouté!');
    }
}