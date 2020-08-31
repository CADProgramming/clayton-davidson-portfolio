<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('./css/stylesheet.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Portfolio Clayton Davidson</title>
</head>
<body>
    <header>
        <div class="title-heading">Software Engineering Portfolio</div>
    </header>
    <nav><a class="{{ Request::path() === '/' ? 'nav-selected' : '' }}" href="/">Home</a>@for ($w = 0; $w < $week_count; $w++)<a class="{{ Request::path() === 'weeks/'.($w + 1) ? 'nav-selected' : '' }}" href="/weeks/{{ $w + 1 }}">Week {{ $w + 1 }}</a>@endfor
    </nav>
    @yield ('content')
    <footer>
        <div>CADProgramming Clayton_Davidson Davica3 1000061387</div>
    </footer>
</body>
<script src="{{ asset('./js/scroll_to_top.js') }}"></script>
</html>