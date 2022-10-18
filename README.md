$categories = Category::orderBy('sorting', 'asc')->get();

$post_categories = $post->categories->pluck('id')->toArray();
