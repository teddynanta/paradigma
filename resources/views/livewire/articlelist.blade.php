<!-- article-list.blade.php -->
{{-- <div>
    <h1 class="text-2xl font-bold mb-4">Articles</h1>

    <div class="grid gap-6">
        @foreach ($articles as $article)
            <div class="p-4 border rounded-lg">
                <h2 class="text-xl font-semibold">
                    <a href="#">{{ $article->title }}</a>
                </h2>
                <p class="text-sm text-gray-500">By {{ $article->author->name }} in {{ $article->category->name }}</p>
                <p class="mt-2">{{ $article->excerpt }}</p>
            </div>
        @endforeach
    </div>

    <div class="mt-6">
        {{ $articles->links() }}
    </div>
</div> --}}
<div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="flex justify-center flex-wrap md:flex-wrap lg:flex-nowrap lg:flex-row lg:justify-between gap-8">
        <div class="w-full flex justify-between flex-col lg:w-2/5">
            <div class="block lg:text-left text-center">
                <h2 class="text-4xl font-bold text-gray-900 leading-[3.25rem] mb-5">Our latest <span
                        class=" text-indigo-600">blogs</span></h2>
                <p class="text-gray-500 mb-5 max-lg:max-w-xl max-lg:mx-auto">Welcome to our blog section, where
                    knowledge meets inspiration. Explore insightful articles, expert tips, and the latest trends
                    in
                    our field.</p>
                <a href="javascript:;"
                    class="cursor-pointer border border-gray-300 shadow-sm rounded-full py-3.5 px-7 w-52 lg:mx-0 mx-auto flex justify-center text-gray-900 font-semibold transition-all duration-300 hover:bg-gray-100">View
                    All</a>
            </div>
            <!-- Slider controls -->
            <div class="flex items-center lg:justify-start justify-center lg:mt-0 mt-8 gap-8 mb-4">
                <button id="slider-button-left"
                    class="swiper-button-prev group flex justify-center items-center border border-solid border-indigo-600 w-11 h-11 transition-all duration-500 rounded-full hover:bg-indigo-600"
                    data-carousel-prev>
                    <svg class="h-6 w-6 text-indigo-600 group-hover:text-white" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M20.9999 12L4.99992 12M9.99992 6L4.70703 11.2929C4.3737 11.6262 4.20703 11.7929 4.20703 12C4.20703 12.2071 4.3737 12.3738 4.70703 12.7071L9.99992 18"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
                <button id="slider-button-right"
                    class="swiper-button-next group flex justify-center items-center border border-solid border-indigo-600 w-11 h-11 transition-all duration-500 rounded-full hover:bg-indigo-600"
                    data-carousel-next>
                    <svg class="h-6 w-6 text-indigo-600 group-hover:text-white" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M3 12L19 12M14 18L19.2929 12.7071C19.6262 12.3738 19.7929 12.2071 19.7929 12C19.7929 11.7929 19.6262 11.6262 19.2929 11.2929L14 6"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
            </div>
        </div>
        <div class="w-full lg:w-3/5">
            <!--Slider wrapper-->
            @foreach ($articles as $article)
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide w-full max-lg:max-w-xl lg:w-1/2 group">
                            <div class="flex items-center mb-9">
                                <img src="https://pagedone.io/asset/uploads/1696244059.png" alt="blogs tailwind section"
                                    class="rounded-2xl w-full object-cover">
                            </div>
                            <h3 class="text-xl text-gray-900 font-medium leading-8 mb-2 group-hover:text-indigo-600">
                                {{ $article->title }}
                            </h3>
                            <p class="text-gray-500 leading-6 transition-all duration-500 mb-4">
                                {{ $article->excerpt }}
                            </p>
                            <a href="javascript:;"
                                class="cursor-pointer flex items-center gap-2 mb-8 text-lg text-indigo-700 font-semibold">
                                Read more<svg width="15" height="12" viewBox="0 0 15 12" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M1.25 6L13.25 6M9.5 10.5L13.4697 6.53033C13.7197 6.28033 13.8447 6.15533 13.8447 6C13.8447 5.84467 13.7197 5.71967 13.4697 5.46967L9.5 1.5"
                                        stroke="#4338CA" stroke-width="1.8" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="mt-6">
        {{ $articles->links() }}
    </div>
</div>
