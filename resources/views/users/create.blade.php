@extends('layouts.plain')

@section('content')
<section class="">
    <form action="{{ route('user.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            <h3>ユーザ登録</h3>
            <div>
                <button type="submit">登録</button>
            </div>
        </div>
        <div>
            <label class="" for="name">名前</label>
            <input id="name" class="" type="text" name="name" value="{{ old('name') }}">
        </div>
        <div>
            <label class="" for="email">メールアドレス</label>
            <input id="email" class="" type="email" name="email" value="{{ old('email') }}">
        </div>
        <div>
            <label class="" for="password">パスワード</label>
            <input id="password" class="" type="password" name="password">
        </div>
        <div>
            <label class="" for="password_confirmation">パスワード(確認)</label>
            <input id="password_confirmation" class="" type="password" name="password_confirmation">
        </div>
        <div>
            <label class="" for="image">画像</label>
            <div class="">
                <img id="previewImage" src="" data-noimage="" alt="ユーザ画像" class="rounded-full shadow-md w-32">
                <input id="image" class="" type="file" accept='image/*' name="image">
            </div>
        </div>
        <div>
            <label class="" for="introduction">自己紹介文</label>
            <textarea id="introduction" class="" name="introduction" rows="2">{{ old('introduction') }}</textarea>
        </div>
    </form>
</section>
@endsection