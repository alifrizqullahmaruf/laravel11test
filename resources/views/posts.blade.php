<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <section class="container p-6 mx-auto">
        {{-- <h1 class="mb-8 text-4xl font-extrabold text-gray-900">W   elcome to My Blog</h1> --}}
        
        @foreach ($posts as $post)
        <article class="mb-6 overflow-hidden bg-white rounded-lg shadow-lg">
            <div class="p-6">
                <h2 class="mb-4 text-3xl font-bold text-gray-800">{{ $post['title'] }}</h2>
                <div class="mb-4 text-sm text-gray-600">
                    <span class="font-medium">By </span>
                    <a href="/authors/{{ $post->author->username }}" class="text-blue-600 hover:text-blue-800">{{ $post->author->name }}</a> 
                    <span class="mx-2">|</span>
                    <a href="/categories/{{ $post->category->slug }}" class="text-blue-600 hover:text-blue-800">{{ $post->category->name }}</a>
                    <span class="mx-2">|</span>
                    <time datetime="{{ $post->created_at->toDateString() }}" class="text-gray-500">{{ $post->created_at->diffForHumans() }}</time>
                </div>
                <p class="mb-4 text-gray-700">
                    {{ Str::limit($post['content'], 200, '...') }}
                </p>
                <a href="posts/{{ $post['id'] }}" class="inline-block font-semibold text-blue-600 hover:text-blue-800">Read more &raquo;</a>
            </div>
        </article>
        @endforeach
    </section>
</x-layout>
