<x-app-layout>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Posts</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    
    <body class="bg-gray-100 dark:bg-gray-900">
        <div class="max-w-2xl mx-auto p-5">
            @if (session('success'))
                <div class="bg-green-100 dark:bg-green-900 border border-green-400 dark:border-green-700 text-green-700 dark:text-green-100 px-4 py-3 rounded relative mb-4">
                    {{ session('success') }}
                </div>
            @endif
    
            <div class="space-y-6">
                @foreach ($posts as $post)
                    <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg overflow-hidden">
                        @if ($post->mediaUrl)
                            <img src="{{ $post->mediaUrl }}" alt="Post Image" class="w-full h-48 object-cover">
                        @endif
                        <div class="p-4">
                            <p class="text-gray-700 dark:text-gray-300 mb-2">{{ $post->content }}</p>
                            <div class="text-sm text-gray-500 dark:text-gray-400">
                                <p><strong>Likes:</strong> {{ $post->likes_count }}</p>
                                <p><strong>Tag:</strong> {{ $post->tag }}</p>
                                <p><strong>Comments:</strong> {{ $post->comments }}</p>
                                <p><strong>Posted by:</strong> {{ $post->user->name }}</p>
                                <p><strong>Posted on:</strong> {{ $post->created_at->format('F j, Y, g:i a') }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </body>
    
    </x-app-layout>