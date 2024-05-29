@extends('layouts.default')

@section('content')
<section class="">
    <p><a href="/questions/create"><button class="btn" type="button" name="all">質問を<br>新規作成</button></a></p>
    <ul class="conditions">
        <li class="headerbtn"><a href=""><button class="btn" type="button" name="all">すべて</button></a></li>
        <li class="headerbtn"><a href=""><button class="btn" type="button" name="active">回答募集中</button></a></li>
        <li class="headerbtn"><a href=""><button class="btn" type="button" name="closed">クローズ</button></a></li>
    </ul>
</section>

<section>
    <h1>質問一覧</h1>
</section>


@endsection