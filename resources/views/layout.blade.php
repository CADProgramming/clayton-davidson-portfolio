<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/stylesheet.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Portfolio Clayton Davidson</title>
</head>
<body>
    <header>
        <div class="title-heading">Software Engineering Portfolio</div>
    </header>
    <nav><a class="{{ Request::path() === '/' ? 'nav-selected' : '' }}" href="/">Home</a><a class="{{ Request::path() === 'weeks/1' ? 'nav-selected' : '' }}" href="/weeks/1">Week 1</a><a class="{{ Request::path() === 'weeks/2' ? 'nav-selected' : '' }}" href="/weeks/2">Week 2</a><a class="{{ Request::path() === 'weeks/3' ? 'nav-selected' : '' }}" href="/weeks/3">Week 3</a><a class="{{ Request::path() === 'weeks/4' ? 'nav-selected' : '' }}" href="/weeks/4">Week 4</a><a class="{{ Request::path() === 'weeks/5' ? 'nav-selected' : '' }}" href="/weeks/5">Week 5</a><a class="{{ Request::path() === 'weeks/6' ? 'nav-selected' : '' }}" href="/weeks/6">Week 6</a></nav>
    @yield ('content')
    <footer>
        <div>CADProgramming Clayton_Davidson Davica3 1000061387</div>
    </footer>
</body>
<script src="./js/scroll_to_top.js"></script>
</html>