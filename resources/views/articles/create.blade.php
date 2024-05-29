@extends('layouts.default')

@section('content')
<section class="">
    <form action="{{ route('articles.article.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" name="title" class="" placeholder="記事タイトル"><br>
        <input type="text" name="tags" class="" placeholder="タグをスペース区切りで入力してください（最大5つまで）"><br>
        <input type="file" name="file_path" class=""><br>
        <div id="editor">
            <textarea type="text" name="content" id="editor"></textarea>
        </div>
        <p class="">
            <button class="" type="submit" name="status" value="draft">下書き保存</button>
            <button class="" type="submit" name="status" value="publish">公開設定</button>
        </p>
    </form>
</section>
@endsection