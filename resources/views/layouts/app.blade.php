<!doctype html>
<html x-ref="html" data-theme="{{ setting('theme')}}" lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" />

        <title>{{ $title ?? config('app.name') }}</title>

        @vite(['resources/js/app.js'])

    </head>
    <body class="h-full min-h-screen scrollbar-none bg-[#f5f5f5] dark:bg-[#1f1f1f]">
        {{ $slot }}
    </body>
</html>
