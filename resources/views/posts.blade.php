<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    Welcome to my blog

    @foreach ($posts as $post)
    <article class="p-6 mb-6 overflow-hidden bg-white rounded-lg shadow-lg">
        <h2 class="mb-2 text-2xl font-bold text-gray-800">{{ $post['title'] }}</h2>
        <div class="mb-4 text-sm text-gray-500">
            <a href="#" class="text-blue-500 hover:text-blue-700">{{ $post['author'] }}</a> | {{ $post['date'] }}
        </div>
        <p class="mb-4 text-gray-700">
            {{ Str::limit( $post['content'], 200, '...') }}
        </p>
        <a href="posts/{{ $post['id'] }}" class="inline-block font-semibold text-blue-500 hover:text-blue-700">Read more &raquo;</a>
    </article>
    @endforeach
    
</x-layout>