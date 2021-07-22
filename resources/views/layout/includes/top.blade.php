<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:url" content="{{ url('') }}">

    <link href="{{ asset('css/reset.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/fonts.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />

    <script>var baseUrl = "{{asset('/')}}";</script>
    @stack('styles_header')
    @stack('styles')
    <title>URL Shortener</title>
</head>
