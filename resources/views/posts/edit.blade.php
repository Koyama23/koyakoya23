<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
    </head>
    <body>
    <h1 class="title">編集画面</h1>
    <div class="content">
        <form action="/posts/{{ $post->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class='content__title'>
                <h2>タイトル</h2>
                 <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
                <input type="text" name="post[title]" placeholder="タイトル" value="{{ old('post.title') }}"/>
            </div>
            <div class='content__body'>
                <h2>本文</h2>
                <p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p>
                <input type='text' name='post[body]'  placeholder="本文" value="{{ old('post.body') }}"/>
            </div>
            <input type="submit" value="保存">
        </form>
        <div class="back">
        <a href="/posts/{{ $post->id }}">戻る</a>
        </div>
    </body>
</html>