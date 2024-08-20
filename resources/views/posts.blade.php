<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])


    <style>
        
    </style>




</head>







<body>
    <div class="container mt-5">
        <h1 class="mb-4">Posts</h1>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if ($posts->isEmpty())
            <p>No posts available.</p>
        @else
            <div class="list-group">
                @foreach ($posts as $post)
                    <div class="list-group-item mb-3">
                        <h5>{{ $post->content }}</h5>
                        <p><strong>Likes:</strong> {{ $post->likes_count }}</p>
                        <p><strong>Tag:</strong> {{ $post->tag }}</p>
                        <p><strong>Comments:</strong> {{ $post->comments }}</p>
                        @if ($post->mediaUrl)
                            <img src="{{ $post->mediaUrl }}" target="_blank"  class="w-20"></img>
                        @endif
                        <p><strong>Posted by:</strong> {{ $post->user->name }}</p>
                        <p><strong>Posted on:</strong> {{ $post->created_at->format('F j, Y, g:i a') }}</p>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</body>

</html>
