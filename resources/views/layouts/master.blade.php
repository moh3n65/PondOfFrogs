<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{url('/')}}{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.min.css" media="screen" title="no title" charset="utf-8">
    <link rel="icon" href="{{ url('/img/frog.png') }}" type="image/x-icon">
    <title>Frog Malaysia</title>

    <script>
        window.Laravel = {!!json_encode(['csrfToken' => csrf_token()])!!};
        window.domain = "{!! url('/')!!}";
    </script>
</head>
<body>
    <div id="app" class="container">
        @include('layouts.header')
        @yield('content')
    </div>

    <script src="{{url('/')}}{{ mix('/js/app.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.min.js" charset="utf-8"></script>
</body>
</html>
