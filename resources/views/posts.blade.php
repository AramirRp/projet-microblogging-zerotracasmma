<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
    <div class="max-w-4xl mx-auto p-5">
        <h1 class="text-2xl font-bold mb-4">Posts</h1>

        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4">
                {{ session('success') }}
            </div>
        @endif

        @if ($posts->isEmpty())
            <p class="text-gray-600">No posts available.</p>
        @else
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                @foreach ($posts as $post)
                    <div class="bg-white shadow-md rounded-lg overflow-hidden">
                        <div class="p-4">
                            @if ($post->mediaUrl)
                                <img src="{{ $post->mediaUrl }}" alt="Post Image" class="w-full h-48 object-cover mb-2">
                            @endif
                            <p class="text-gray-700 mb-2">{{ $post->content }}</p>
                            <div class="text-sm text-gray-500 mb-2">
                                <p><strong>Likes:</strong> {{ $post->likes_count }}</p>
                                <p><strong>Tag:</strong> {{ $post->tag }}</p>
                                <p><strong>Comments:</strong> {{ $post->comments }}</p>
                            </div>
                            <div class="text-sm text-gray-500">
                                <p><strong>Posted by:</strong> <a href="/posts/users/{{$post->user_id}}" class="text-blue-500 hover:underline">{{ $post->user->name }}</a></p>
                                <p><strong>Posted on:</strong> {{ $post->created_at->format('F j, Y, g:i a') }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</body>

</html>