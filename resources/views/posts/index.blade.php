@extends('layouts.login')

@section('content')


<form action="/top" method="post">
{{ csrf_field() }}

<div class="tweet">
    <img src="{{ asset('images/icon1.png') }}" class="tweet-icon" alt="atlas">
    <textarea class="tweet-text" name="post" placeholder="投稿内容を入力してください。"></textarea>
    <input type="image" class="tweet-btn" name="submit" src="{{ asset('images/post.png') }}" alt="投稿">
</div>
</form>


    @if($errors->first('post'))
    <p>{{$errors->first('post')}}</p>
    @endif
    @foreach($posts as $post)
    <div class="tweet-box">
        <div class="tweet-wrapper">
            {{-- <div id="mask" class="hid"></div> --}}

            <tr>
                <td> {{ $post->post }}</td>
                <td>{{ $post->created_at }}</td>
            </tr>
            <div class="content, tweet-wrapper-btn">
                {{-- <a class="js-modal-open"><img src="{{ asset('images/edit.png') }}" post="{{ $post->post }}" post_id="{{ $post->id }}" class="edit-btn" alt="編集"></a> --}}
                <a class="js-modal-open" href="" post="{{ $post->post }}" post_id="{{ $post->id }}" ><img src="{{ asset('images/edit.png') }}" alt="編集">
                </a>
                    {{-- ララベル課題参考箇所 --}}
                <td><a href="/post/{{$post->id}}/delete"><img src="{{ asset('images/trash-h.png') }}" class="trash-btn" onclick="return confirm('こちらの投稿を削除してもよろしいでしょうか？')" alt="削除"></a></td>
            </div>
         </div>
    </div>
    @endforeach

 {{-- <section id="modal" class="hid"> --}}
     <div class="modal js-modal">
        <div class="modal__bg js-modal-close"></div>
            <div class="modal__content">
                {{-- <form action="{{ route('posts.index', $post) }}" method="post"> --}}
                <form action="{{ route('posts.index') }}" method="post">
                    @csrf
                     {{-- <textarea class="tweet-text" name="tweettext">{{ old('tweettext', $post->post) }}</textarea> --}}
                     {{-- <textarea class="tweet-text, modal_post" name="tweettext"></textarea> --}}
                     <textarea class="modal_post" name=""></textarea>
                      {{-- <input type="hidden" name="post-id" class="modal_id" value="{{$post->id}}"> --}}
                      <input type="hidden" name="" class="modal_id" value="{{$post->id}}">
                    <input type="image"  src="{{ asset('images/edit.png') }}" class="edit-btn2, modal_id" value="更新" alt="更新">
                    {{-- {{ scrf_fiels() }} --}}
                </form>
                <a class="js-modal-close" href="">閉じる</a>
            </div>
        </div>

  {{-- </section> --}}


@endsection
