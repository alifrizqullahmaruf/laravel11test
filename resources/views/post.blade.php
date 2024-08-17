<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <article class="p-6 mb-6 overflow-hidden bg-white rounded-lg shadow-lg ">
        <h2 class="mb-2 text-2xl font-bold text-gray-800">{{ $post['title'] }}</h2>
        <div class="mb-4 text-sm text-gray-500">
            <a href="#" class="text-blue-500 hover:text-blue-700">{{ $post['author'] }}</a> | {{ $post['date'] }}
        </div>
        <p class="mb-4 text-gray-700">
            {{ $post['content'] }}
        </p>
        <a href="/posts" class="inline-block font-semibold text-blue-500 hover:text-blue-700">&laquo;  Back to posts </a>
    </article>
    
</x-layout>