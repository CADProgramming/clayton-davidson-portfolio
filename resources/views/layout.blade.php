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
    <nav class="drop-nav">
        <a href="/">Home</a>
        <div class="dropdown">
            <a href="javascript:void(0)" class="dropbtn">Tutorials</a>
            <div class="dropdown-content">
                @for ($w = 1; $w < $week_count && $w <= 2; $w++)
                    <a href="/weeks/{{ $w }}">Week {{ $w }}</a>
                @endfor
            </div>
        </div>
        @for ($s = 1; $s <= round(($week_count - 2) / 2); $s++)
            <div class="dropdown">
                <a href="javascript:void(0)" class="dropbtn">Sprint {{ $s }}</a>
                <div class="dropdown-content">
                    @for ($w = ($s * 2) + 1; $w <= $week_count && $w <= ($s * 2) + 2; $w++)
                        <a href="/weeks/{{ $w }}">Week {{ $w }}</a>
                    @endfor
                    <a href="/sprint/{{ $s }}">Sprint Reflection</a>
                </div>
            </div>
        @endfor
    </nav>
    @yield ('content')
    <footer>
        <div>CADProgramming Clayton_Davidson Davica3 1000061387</div>
    </footer>
</body>
<script src="{{ asset('./js/scroll_to_top.js') }}"></script>
</html>