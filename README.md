$categories = Category::orderBy('sorting', 'asc')->get();

$post_categories = $post->categories->pluck('id')->toArray();

![görünüm](https://i.hizliresim.com/o9wi6q3.jpg)


