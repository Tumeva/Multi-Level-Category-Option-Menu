```
$categories = Category::orderBy('sorting', 'asc')->get();
$post_categories = $post->categories->pluck('id')->toArray();

```

```
public function edit(Post $post)
{
   return view('admin.edit', compact('categories','post_categories'));
}
```

```
<select multiple="multiple" name="catid[]" id="multiselect-optiongroup">
{{$helper->listCategory($helper->createCategory($categories),0,$post_categories)}}
</select>
```

![görünüm](https://i.hizliresim.com/o9wi6q3.jpg)


