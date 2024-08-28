<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <section class="container p-6 mx-auto">
        <article class="mb-8 overflow-hidden bg-white rounded-lg shadow-md">
            <div class="p-6">
                <h2 class="mb-4 text-3xl font-extrabold text-gray-900">{{ $post['title'] }}</h2>
                <div class="mb-4 text-sm text-gray-600">
                    <span class="font-medium">By </span>
                    <a href="/authors/{{ $post->author->username }}" class="text-blue-600 hover:text-blue-800">{{ $post->author->name }}</a>
                    <span class="mx-2">|</span>
                    <a href="/categories/{{ $post->category->slug }}" class="text-blue-600 hover:text-blue-800">{{ $post->category->name }}</a>
                    <span class="mx-2">|</span>
                    <time datetime="{{ $post->created_at->toDateString() }}" class="text-gray-500">{{ $post->created_at->diffForHumans() }}</time>
                </div>
                <p class="mb-6 text-gray-700">
                    {{ $post['content'] }}
                </p>
                <a href="/posts" class="inline-block font-semibold text-blue-600 hover:text-blue-800">&laquo; Back to posts</a>
            </div>
        </article>
    </section>
</x-layout>
