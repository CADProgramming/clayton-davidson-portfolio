@extends ('layout')

@section ('content')
    <div class="main-container">
        <div class="sub-container">
            <h1>Week {{ $week_data[0]->id }}: {{ date('jS', strtotime($week_data[0]->week_start)) }} - {{ date('jS \of F', strtotime($week_data[0]->week_end)) }}</h1>
            <div>
                <section class="during-class">
                    <h2>During Class Work</h2>
                    @for ($p = 0; $p < count($post_data); $p++)
                        @if ($post_data[$p]->inclass)
                            <div class="session-divider">
                                <h2 class="section-header">{{ $post_data[$p]->title }} ({{ date('jS \of F', strtotime($post_data[$p]->date)) }})</h2>
                                @for ($s = 0; $s < count($section_data[$p]); $s++)
                                    @if ($section_data[$p][$s]->post_id == $post_data[$p]->id)
                                        @if ($section_data[$p][$s]->title != '')
                                            <h2>{{ $section_data[$p][$s]->title }}</h2>
                                        @endif
                                        @for ($c = 0; $c < count($content_data[$p]); $c++)
                                            @if ($content_data[$p][$c]->section_id == $section_data[$p][$s]->id)
                                                <h3>{{ $content_data[$p][$c]->title }}</h3>
                                                <div class="content-div">{!! $content_data[$p][$c]->body !!}</div>
                                            @endif
                                        @endfor
                                    @endif
                                @endfor
                            </div>
                        @endif
                    @endfor
                </section>
                <section class="outside-class">
                    <h2>Outside of Class Work</h2>
                    @for ($p = 0; $p < count($post_data); $p++)
                        @if ($post_data[$p]->inclass == false)
                            <div class="session-divider">
                                <h2 class="section-header">{{ $post_data[$p]->title }} ({{ date('jS \of F', strtotime($post_data[$p]->date)) }})</h2>
                                @for ($s = 0; $s < count($section_data[$p]); $s++)
                                    @if ($section_data[$p][$s]->post_id == $post_data[$p]->id)
                                        @if ($section_data[$p][$s]->title != '')
                                            <h2>{{ $section_data[$p][$s]->title }}</h2>
                                        @endif
                                        @for ($c = 0; $c < count($content_data[$p]); $c++)
                                            @if ($content_data[$p][$c]->section_id == $section_data[$p][$s]->id)
                                                <h3>{{ $content_data[$p][$c]->title }}</h3>
                                                <div>{!! $content_data[$p][$c]->body !!}</div>
                                            @endif
                                        @endfor
                                    @endif
                                @endfor
                            </div>
                        @endif
                    @endfor
                </section>
            </div>
            <div id="scroll-return"><i class="fa fa-chevron-up"></i> Scroll To Top <i class="fa fa-chevron-up"></i></div>
        </div>
    </div>
@endsection