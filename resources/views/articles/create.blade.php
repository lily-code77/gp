@extends('layouts.default')

@section('content')
<section class="">
    <form action="{{ route('article.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" name="title" class="" placeholder="記事タイトル"><br>
        <input type="text" name="tags" class="" placeholder="タグをスペース区切りで入力してください（最大5つまで）"><br>
        <input type="file" name="image" accept='image/*' class=""><br>
        <div id="editor">
            <textarea type="text" name="content" id="" placeholder="食材、調理方法、味付け、調理器具など共有/記録したい内容を書いてください。"></textarea>
        </div>
        <p class="">
        <button class="" type="submit" name="status" value="draft">下書き保存</button>
        <button class="" type="submit" name="status" value="publish">公開設定</button>
        </p>
    </form>
</section>

<!-- <script>
    const quill = new Quill('#editor', {
        theme: 'snow'
    });
</script> -->
@endsection