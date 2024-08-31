<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <section class="container px-6 py-8 mx-auto">
        <!--
        Install the "flowbite-typography" NPM package to apply styles and format the article content:
        URL: https://flowbite.com/docs/components/typography/
        -->

        <main class="pt-8 pb-16 antialiased bg-white lg:pt-12 lg:pb-24">
            <div class="flex justify-center max-w-screen-xl px-6 mx-auto">
                <article class="w-full max-w-4xl mx-auto format format-sm sm:format-base lg:format-lg format-blue">
                    <header class="mb-6 lg:mb-8 not-format">
                        <a href="/posts" class="block mb-4 text-blue-600 hover:text-blue-800">&laquo; Back to all posts</a>
                        <address class="flex items-center mb-6 not-italic">
                            <div class="inline-flex items-center mr-3 text-sm text-gray-900">
                                <img class="w-16 h-16 mr-4 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="{{ $post->author->name }}">
                                <div>
                                    <a href="#" rel="author" class="text-xl font-bold text-gray-900">{{ $post->author->name }}</a>
                                    <p class="text-base text-gray-500">
                                        <time pubdate datetime="{{ $post->created_at->toDateString() }}" title="{{ $post->created_at->format('F jS, Y') }}">{{ $post->created_at->diffForHumans() }}</time>
                                    </p>
                                    <a href="/categories/{{ $post->category->slug }}">
                                        <span class="bg-{{ $post->category->color }}-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded">
                                            {{ $post->category->name }}
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </address>
                        <h1 class="text-3xl font-extrabold leading-tight text-gray-900 lg:text-4xl">
                            {{ $post->title }}
                        </h1>
                    </header>

                    <p class="leading-relaxed text-gray-700">{{ $post->content }}</p>
                </article>
            </div>
        </main>
    </section>
</x-layout>
