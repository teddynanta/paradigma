<!-- article-list.blade.php -->
<div>
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
</div>
