@extends('layouts.logout')

@section('content')

{!! Form::open() !!}

<p><img src="images/welcome.png" class="welcome-img"></p>

<div class="logout-container">

<p class="label-text">{{ Form::label('e-mail') }}</p>
<p>{{ Form::text('mail',null,['class' => 'input']) }}</p>
<p class="label-text">{{ Form::label('password') }}</p>
<p>{{ Form::password('password',['class' => 'input']) }}</p>

<p>{{ Form::submit('ログイン') }}</p>

<p><a href="/register">新規ユーザーの方はこちら</a></p>

</div>
{!! Form::close() !!}



@endsection
