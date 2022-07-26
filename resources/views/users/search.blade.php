@extends('layouts.login')

@section('content')

<div>
    {{-- <form action="/top" method="post"> --}}
  <form action="{{ route('users.searchGet') }}" method="GET">
    <input type="text" name="keyword" value="{{ $keyword }}">
    <input type="submit" value="検索">
  </form>
</div>

{{-- <div class="users">
    <img src="{{ asset('images/icon2.png') }}" alt="ユーザーアイコン">
    <div class="users-follow-btn">
        <a href="">フォロー解除</a>
        <a href="">フォローする</a>
    </div>
</div> --}}

@forelse ($users as $user)
    <tr>
      <td><a href="{{ route('users.searchGet' , $user) }}">
        {{-- {{ $user->images }} --}}
    </td></a>
      <td>{{ $user->username }}</td>
    </tr>
  @empty
    <td>No posts!!</td>
  @endforelse

@endsection
