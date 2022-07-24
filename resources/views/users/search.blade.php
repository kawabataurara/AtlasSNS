@extends('layouts.login')

@section('content')

<div class="users">
    <img src="{{ asset('images/icon2.png') }}" alt="ユーザーアイコン">
    <div class="users-follow-btn">
        <a href="">フォロー解除</a>
        <a href="">フォローする</a>
    </div>
</div>

@endsection
