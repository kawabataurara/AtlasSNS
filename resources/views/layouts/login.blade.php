<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
    <!--IEブラウザ対策-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="ページの内容を表す文章" />
    <title></title>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }} ">
    <link rel="stylesheet" href="{{ asset('css/style.css') }} ">
    <!--スマホ,タブレット対応-->
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <!--サイトのアイコン指定-->
    <link rel="icon" href="画像URL" sizes="16x16" type="image/png" />
    <link rel="icon" href="画像URL" sizes="32x32" type="image/png" />
    <link rel="icon" href="画像URL" sizes="48x48" type="image/png" />
    <link rel="icon" href="画像URL" sizes="62x62" type="image/png" />
    <!--iphoneのアプリアイコン指定-->
    <link rel="apple-touch-icon-precomposed" href="画像のURL" />
    <!--OGPタグ/twitterカード-->

</head>
<body>

    <header>
        <div id="head">
            <div id="head-design">
                <h1 class="logo-img"><a href="/top"><img src="{{ asset('images/atlas.png') }}" alt="atlas"></a></h1>
            </div>
                <div class="header-list">
                    <div class="user-profile">
                    <p class="username-box">{{ Auth::user()->username }}さん</p>
                    <img src="{{ asset('images/icon1.png') }} " alt="icon1">
                    </div>
                        <div class="menu">
                            <div class="sp-menu">
                                <span class="dli-chevron-down" id="open"></span>
                             </div>
                             <span class="dli-chevron-up" id="close"></span>
                 </div>
                  </div>
                   </div>

                            <div class="overlay">
                                {{-- </label> --}}
                                            <nav>
                                                <ul>
                                                    <li><a href="/top">ホーム</a></li>
                                                    <li><a href="/profile">プロフィール編集</a></li>
                                                    <li><a href="/logout">ログアウト</a></li>
                                                </ul>
                                            </nav>
                                        </div>


                            </div>
                        </header>
                        <div id="row">
                            <div id="container">
                                @yield('content')
                            </div >
                                @include('layouts.sidebar')


                        </div>
                        <footer>
                        </footer>
                        <script src="JavaScriptファイルのURL"></script>
                        <script src="JavaScriptファイルのURL"></script>


                        <script src="{{ asset('/js/login.js') }}"></script>
                    </body>
                    </html>
