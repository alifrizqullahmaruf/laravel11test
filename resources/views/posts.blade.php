<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    {{-- <h1 class="mb-8 text-4xl font-extrabold text-gray-900">W   elcome to My Blog</h1> --}}

    {{-- <article class="mb-6 overflow-hidden bg-white rounded-lg shadow-lg">
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
        </article> --}}
    <div class="max-w-screen-xl px-4 py-4 mx-auto lg:py-8 lg:px-0">
        <div class="grid gap-8 lg:grid-cols-3">
            @foreach ($posts as $post)
                <article
                    class="p-6 bg-white border border-gray-200 rounded-lg shadow-md dark:bg-white dark:border-gray-200">
                    <div class="flex items-center justify-between mb-5 text-gray-500">
                        <a href="/categories/{category:slug}">
                            <span
                                class="bg-{{ $post->category->color }}-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-300 dark:text-primary-800">
                                {{ $post->category->name }}
                            </span>
                        </a>
                        <a href="#">
                            <span class="text-sm">{{ $post->created_at->diffForHumans() }}</span>
                        </a>
                    </div>
                    <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-gray-900"><a
                            href="#">{{ $post['title'] }}</a></h2>
                    <p class="mb-5 font-light text-gray-500 dark:text-gray-400">{{ $post->content }}</p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-4">
                            <img class="rounded-full w-7 h-7"
                                src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png"
                                alt="Jese Leos avatar" />
                            <span class="font-medium text-blue-900">
                                {{ $post->author->name }}
                            </span>
                        </div>
                        <a href="#"
                            class="inline-flex items-center font-medium text-primary-600 dark:text-primary-500 hover:underline">
                            Read more
                            <svg class="w-4 h-4 ml-2" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</x-layout>
