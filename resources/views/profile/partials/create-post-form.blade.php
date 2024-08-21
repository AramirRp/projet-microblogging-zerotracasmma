<div class="flex items-center justify-center min-h-screen bg-gray-100 dark:bg-gray-900">
    <div class="w-full max-w-2xl p-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
        <h3 class="mb-6 text-2xl font-semibold text-gray-900 dark:text-gray-100">Add a Post</h3>
        <form action="{{ route('posts.store') }}" method="post">
            @csrf
            <div class="mb-6">
                <label for="content" class="block mb-2 text-lg font-medium text-gray-700 dark:text-gray-300">Content</label>
                <textarea id="content" name="content" rows="4" required class="w-full px-4 py-3 text-lg text-gray-900 placeholder-gray-500 bg-gray-100 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent dark:bg-gray-700 dark:text-gray-100 dark:placeholder-gray-400 dark:border-gray-600"></textarea>
            </div>
            <div class="mb-6">
                <label for="likes_count" class="block mb-2 text-lg font-medium text-gray-700 dark:text-gray-300">Likes Count</label>
                <input type="number" id="likes_count" name="likes_count" class="w-full px-4 py-3 text-lg text-gray-900 placeholder-gray-500 bg-gray-100 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent dark:bg-gray-700 dark:text-gray-100 dark:placeholder-gray-400 dark:border-gray-600">
            </div>
            <div class="mb-6">
                <label for="tag" class="block mb-2 text-lg font-medium text-gray-700 dark:text-gray-300">Tag</label>
                <input type="text" id="tag" name="tag" maxlength="255" class="w-full px-4 py-3 text-lg text-gray-900 placeholder-gray-500 bg-gray-100 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent dark:bg-gray-700 dark:text-gray-100 dark:placeholder-gray-400 dark:border-gray-600">
            </div>
            <div class="mb-6">
                <label for="comments" class="block mb-2 text-lg font-medium text-gray-700 dark:text-gray-300">Comments</label>
                <textarea id="comments" name="comments" rows="4" class="w-full px-4 py-3 text-lg text-gray-900 placeholder-gray-500 bg-gray-100 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent dark:bg-gray-700 dark:text-gray-100 dark:placeholder-gray-400 dark:border-gray-600"></textarea>
            </div>
            <div class="mb-6">
                <label for="mediaUrl" class="block mb-2 text-lg font-medium text-gray-700 dark:text-gray-300">Media URL</label>
                <input type="url" id="mediaUrl" name="mediaUrl" class="w-full px-4 py-3 text-lg text-gray-900 placeholder-gray-500 bg-gray-100 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent dark:bg-gray-700 dark:text-gray-100 dark:placeholder-gray-400 dark:border-gray-600">
            </div>
            <button type="submit" class="w-full px-6 py-3 text-lg font-medium text-white bg-blue-600 rounded-lg transition duration-300 ease-in-out transform hover:bg-blue-700 hover:shadow-lg hover:scale-105 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 dark:focus:ring-offset-gray-900">
                Create Post
            </button>
        </form>
    </div>
</div>