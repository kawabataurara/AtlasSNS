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
        <div class="tweet-wrapper">{{ $post->post }}</div>
    </form>

</div>
</div>

</div>
    @endforeach

@endsection
