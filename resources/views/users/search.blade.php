@extends('layouts.login')

@section('content')

<div>
    {{-- <form action="/top" method="post"> --}}
  <form action="{{ route('users.search') }}" method="GET">
    <input type="text" name="keyword" value="{{ $keyword }}">
    <input type="submit" value="検索">
  </form>
</div>


@forelse ($users as $user)
    <div class="search-list">
        <tr>
            <img src="{{ asset('images/icon2.png') }}" alt="ユーザーアイコン">
            <td><a href="{{ route('users.search' , $user) }}"class="after-search">{{ $user->username }}
            {{-- {{ $user->images }} --}}
            </td></a>
            {{-- <td>{{ $user->username }}</td> --}}
            <div class="users-follow-btn">
            {{-- <a href="">フォロー解除</a> --}}
            <a href="" class="search-follow">フォローする</a>
        </tr>
    </div>
  @empty
    <td>No user</td>
  @endforelse

@endsection
