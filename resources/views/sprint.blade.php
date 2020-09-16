@extends ('layout')

@section ('content')
    <div class="main-container">
        <div class="sub-container">
            <h1>Sprint {{ $sprint_number }} (Week {{ ($sprint_number * 2) + 1 }} and Week {{ ($sprint_number * 2) + 2 }})</h1>
            <div>
                <div class="session-divider">
                    <h2 class="section-header">{{ $post_data[0]->title }}</h2>
                    @for ($s = 0; $s < count($section_data[0]); $s++)
                        @if ($section_data[0][$s]->post_id == $post_data[0]->id) 
                            <h2>{{ $section_data[0][$s]->title }}</h2>
                            @for ($c = 0; $c < count($content_data[0][$s]); $c++)
                                @if ($content_data[0][$s][$c]->section_id == $section_data[0][$s]->id)
                                    <h3>{{ $content_data[0][$s][$c]->title }}</h3>
                                    <div class="content-div">{!! $content_data[0][$s][$c]->body !!}</div>
                                @endif
                            @endfor
                        @endif
                    @endfor
                </div>
            </div>
            <div id="scroll-return"><i class="fa fa-chevron-up"></i> Scroll To Top <i class="fa fa-chevron-up"></i></div>
        </div>
    </div>
@endsection