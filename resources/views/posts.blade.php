<x-app-layout>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Posts</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    
    <body class="bg-gray-100 dark:bg-gray-900">
        <div class="max-w-4xl mx-auto p-5">
            <h1 class="text-2xl font-bold mb-4 text-gray-800 dark:text-gray-200">Latest Posts</h1>
    
            @if (session('success'))
                <div class="bg-green-100 dark:bg-green-900 border border-green-400 dark:border-green-700 text-green-700 dark:text-green-100 px-4 py-3 rounded relative mb-4">
                    {{ session('success') }}
                </div>
            @endif
    
            @if ($posts->isEmpty())
                <p class="text-gray-600 dark:text-gray-300">No posts available.</p>
            @else
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    @foreach ($posts as $post)
                        <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg overflow-hidden">
                            <div class="p-4">
                                @if ($post->mediaUrl)
                                    <img src="{{ $post->mediaUrl }}" alt="Post Image" class="w-full h-48 object-cover mb-2">
                                @endif
                                <p class="text-gray-700 dark:text-gray-300 mb-2">{{ $post->content }}</p>
                                <div class="text-sm text-gray-500 dark:text-gray-400 mb-2">
                                    <p><strong>Likes:</strong> {{ $post->likes_count }}</p>
                                    <p><strong>Tag:</strong> {{ $post->tag }}</p>
                                    <p><strong>Comments:</strong> {{ $post->comments }}</p>
                                </div>
                                <div class="text-sm text-gray-500 dark:text-gray-400">
                                    <p><strong>Posted by:</strong> <a href="/posts/users/{{$post->user_id}}" class="text-blue-500 dark:text-blue-300 hover:underline">{{ $post->user->name }}</a></p>
                                    <p><strong>Posted on:</strong> {{ $post->created_at->format('F j, Y, g:i a') }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </body>
    
    </x-app-layout>