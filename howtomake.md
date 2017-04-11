# belongsToManyの使い方
## PostテーブルとCategoryテーブルの場合
### 中間テーブルの作り方
```
Schema::create('post_category', function(Blueprint $table){
    $table->integer('post_id')->unsigned()->index();
    $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
    $table->integer('category_id')->unsigned()->index();
    $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
    $table->timestamps();
});
```
### モデルに実装するメソッド
```
Post側
public function categories()
{
    return $this->belongsToMany(App\Category::class);
}
Category側
public function posts()
{
    return $this->belongsToMany(App\Post::class);
}
```
### 各テーブルの要素の関連付けのやり方
```
$post = App\Post::first();
$post->categories()->attach(関連付けるカテゴリーのID);
```
