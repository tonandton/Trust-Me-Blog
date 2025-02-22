<x-app-layout title="Home">
    @section('hero')
        <div class="w-full text-center py-32">
            <h1 class="text-2xl md:text-3xl font-bold text-center lg:text-5xl text-gray-700">
                {{ __('home.hero.title') }} <span class="text-emerald-500">&lt;Trust Me&gt;</span>
                <span class="text-gray-900">Blogs</span>
            </h1>
            <p class="text-gray-500 text-lg mt-1">{{ __('home.hero.desc') }}</p>
            <a href="{{ route('posts.index') }}"
                class="px-3 py-2 text-lg text-white bg-gray-800 rounded mt-5 inline-block">{{ __('home.hero.cta') }}</a>
        </div>
    @endsection

    <div class="mb-10 w-full">
        <div class="mb-16">
            <div class="mt-16 mb-5 text-3xl text-green-500 font-bold">{{ __('home.featured_posts') }}</div>
            <div class="w-full">
                <div class="grid grid-cols-3 gap-10 w-full">
                    @foreach ($featuredPosts as $post)
                        <x-posts.post-card :post="$post" class="md:col-span-1 col-span-3" />
                    @endforeach
                </div>
            </div>
            <a href=""
                class="mt-10 block text-center text-lg text-green-500 font-semibold">{{ __('home.more_posts') }}</a>
        </div>
        <hr>

        <h2 class="mt-16 mb-5 text-3xl text-green-500 font-bold">{{ __('home.latest_posts') }}</h2>
        <div class="w-full mb-5">
            <div class="grid grid-cols-3 gap-10 w-full">
                @foreach ($latestPosts as $post)
                    <div class="md:col-span-1 col-span-3">
                        <x-posts.post-card :post="$post" />
                    </div>
                @endforeach
            </div>
        </div>
        <a href=""
            class="block mt-10 text-lg font-semibold text-center text-green-500">{{ __('home.more_posts') }}</a>
    </div>
</x-app-layout>
