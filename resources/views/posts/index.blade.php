@extends('layouts.login')

@section('content')


<form action="/top" method="post">
{{ csrf_field() }}
<div class="index-box">
<div class="index-view">
<div class="tweet">
    <img src="{{ asset('images/icon1.png') }}" class="tweet-icon" alt="atlas">
    <textarea class="tweet-text" name="post" placeholder="投稿内容を入力してください。"></textarea>
    {{-- <input type="text" class="tweet-text" name="post" placeholder="投稿内容を入力してください。"> --}}
    <input type="image" class="tweet-btn" name="submit" src="{{ asset('images/post.png') }}" alt="投稿">

</div>
    @if($errors->first('post'))
    <p>{{$errors->first('post')}}</p>
    @endif
    <div class="tweet-box">
        @foreach($posts as $post)
        <div class="tweet-wrapper">
            {{ $post->post }}
            <div class="tweet-wrapper-btn">
                <tr>
                    <td>{{ $post->created_at }}</td>
                </tr>
                <input type="image" class="edit-btn" id="open" src="{{ asset('images/edit.png') }}" alt="編集">

                {{-- ララベル課題参考箇所 --}}
            <td><a href="/post/{{$post->id}}/delete"><img src="{{ asset('images/trash-h.png') }}" class="trash-btn" onclick="return confirm('こちらの投稿を削除してもよろしいでしょうか？')" alt="削除"></a></td>
            </div>
        </div>

            {{-- 編集のポップアップ表示 --}}
        <div class="edit">
            <nav>
            {{ $post->post }}
            <input type="image" id="close" name="submit" src="{{ asset('images/edit.png') }}" alt="閉じる">
            </nav>



        </div>
    </form>

</div>
</div>

</div>
    @endforeach

@endsection
