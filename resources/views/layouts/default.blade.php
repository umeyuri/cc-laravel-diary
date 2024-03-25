<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <style>
        .header_nav {
            display: flex;
            list-style: none;
            padding-left: 0;
        }
        .header_nav li {
            margin-right: 30px;
        }
        .error {
            color: red;
        }
        .success {
            color: green;
        }
    </style>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    @yield('header')
    @foreach ($errors->all() as $error)
        <p class="error">{{ $error }}</p>
    @endforeach
    @if (session()->has('success'))
        <div class="success">
            {{ session()->get('success') }}
        </div>
    @endif
    @yield('content')

</body>
</html>