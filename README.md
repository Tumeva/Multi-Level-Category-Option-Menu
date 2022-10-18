```
$categories = Category::orderBy('sorting', 'asc')->get();
$post_categories = $post->categories->pluck('id')->toArray();


public function edit(Post $post)
{
   return view('admin.edit', compact('categories','post_categories'));
}
```

![görünüm](https://i.hizliresim.com/o9wi6q3.jpg)


